import datetime
import os
import pickle
from decimal import Decimal
from django.core.management import BaseCommand
from django.utils import timezone
from django.utils.timezone import make_aware
from selectolax.parser import HTMLParser
from selenium.webdriver import Keys
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chrome.webdriver import WebDriver
from selenium.webdriver.common.by import By

from core.models import Odd, Processed


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

        driver.get('https://www.betburger.com/br/arbs')
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
            arbs = parser.css('#arbs-list')

            if arbs:
                for arb_items in arbs:
                    for arb in arb_items.css('li'):
                        chances = []

                        for item in arb.css('.bet-wrapper'):
                            chances.append(Decimal(item.css_first('.coefficient').text().strip()))
                            # chances.append(Decimal(item.css_first('.coefficient-link').text().strip()))

                        if len(chances) >= 3:
                            continue

                        for item in arb.css('.bet-wrapper'):
                            profit = [1 / c for c in chances]
                            profit = Decimal(((1 / (profit[0] + profit[1])) - 1) * 100)
                            chance = Decimal(item.css_first('.coefficient').text().strip())
                            # chance = Decimal(item.css_first('.coefficient-link').text().strip())
                            minutes = 0
                            match_datetime = make_aware(datetime.datetime.strptime(item.css_first('.date').text().strip(), '%d %b %H:%M').replace(year=timezone.now().year))
                            house_name = item.css_first('.bookmaker-name .text-ellipsis').text().strip()
                            match = item.css_first('.event-name a').text().strip()
                            sport = arb.css_first('.sport-name').text().strip()
                            tournament = arb.css_first('.league').text().strip()
                            market = item.css_first('.market').html.replace('data-original-title', 'title').replace('<a', '<span').replace('/a>', '/span>')
                            surebet_id = item.css_first('.event-name a').attributes['href'].split('?')[0].split('/')[-1].strip()
                            anchor = item.css_first('.text-ellipsis a').attributes['href']
                            # anchor = item.css_first('.market a').attributes['href']

                            if not Processed.objects.filter(surebet_id=surebet_id).exists():
                                Processed.objects.create(surebet_id=surebet_id)

                            odd, created = Odd.objects.get_or_create(
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
                                anchor=f'https://www.betburger.com{anchor}'
                            )

                            if created:
                                Odd.objects.exclude(id=odd.id).filter(surebet_id=surebet_id, house=house_name).delete()
                                print(f'Fetching BetBurguer odd {match} {profit}, {chance}, {house_name}')
