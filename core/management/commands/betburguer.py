import os
import pickle
from decimal import Decimal
from time import sleep

from django.conf import settings
from django.core.management import BaseCommand
from django.utils import timezone
from selectolax.parser import HTMLParser
from selenium.webdriver import Keys
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chrome.webdriver import WebDriver
from selenium.webdriver.common.by import By

from core.models import Odd


def find_creator(browser):
    return lambda selector: browser.find_element(By.CSS_SELECTOR, selector)


def search_creator(browser):
    return lambda selector: browser.find_elements(By.CSS_SELECTOR, selector)


class Command(BaseCommand):
    help = ''

    def handle(self, *args, **options):
        options = Options()
        options.add_argument('--headless=new')
        driver = WebDriver(options=options)

        driver.get('https://www.betburger.com/br/arbs/live')
        driver.set_window_size(1920, 4000)

        if os.path.exists('cookies.pkl'):
            cookies = pickle.load(open("cookies.pkl", "rb"))

            for cookie in cookies:
                driver.add_cookie(cookie)
        else:
            input('Press enter after login')
            pickle.dump(driver.get_cookies(), open("cookies.pkl", "wb"))

        driver.refresh()


        while True:
            for _ in range(2):
                try:
                    driver.find_element(By.CSS_SELECTOR, '.arbs-wrapper').send_keys(Keys.END)
                except:
                    continue

            parser = HTMLParser(driver.page_source)
            arbs = parser.css('.arbs-list')

            if arbs:
                Odd.objects.filter(is_live=True).delete()

                for arb_items in arbs:
                    for arb in arb_items.css('li'):
                        for item in arb.css('.bet-wrapper.is-live'):
                            profit = Decimal(arb.css_first('.percent').text().strip().strip('%'))
                            live_color = arb.css_first('.percent').attributes['class']
                            #chance = Decimal(item.css_first('.coefficient').text().strip())
                            chance = Decimal(item.css_first('.coefficient-link').text().strip())
                            minutes = 0
                            match_datetime = timezone.localtime()
                            house_name = item.css_first('.bookmaker-name .text-ellipsis').text().strip()
                            match = item.css_first('.event-name a').text().strip()
                            sport = arb.css_first('.sport-name').text().strip()
                            tournament = arb.css_first('.league').text().strip()
                            market = item.css_first('.market').html.replace('data-original-title', 'title').replace('<a', '<span').replace('/a>', '/span>')
                            surebet_id = item.css_first('.event-name a').attributes['href'].split('?')[0].split('/')[-1].strip()
                            #anchor = item.css_first('.text-ellipsis a').attributes['href']
                            anchor = item.css_first('.market a').attributes['href']

                            if not Odd.objects.filter(surebet_id=surebet_id, house=house_name).exists():
                                Odd.objects.create(
                                    profit=profit,
                                    minutes=minutes,
                                    date=match_datetime.date(),
                                    hour=match_datetime.time(),
                                    timestamp=match_datetime,
                                    house=house_name,
                                    match=match,
                                    sport=sport,
                                    tournament=tournament,
                                    market=market,
                                    surebet_id=surebet_id,
                                    chance=chance,
                                    anchor=f'https://www.betburger.com{anchor}',
                                    is_live=True,
                                    live_color=live_color
                                )

                                print(f'Fetching BetBurguer odd {match} {profit}, {chance}, {house_name}')

