from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import pickle
import time

chrome_options = Options()
chrome_options.add_argument("--headless")
chrome_options.add_argument("--disable-gpu")
chrome_options.add_argument("--start-maximized")  # A janela começa maximizada para evitar problemas de elementos fora da tela.

driver = webdriver.Chrome(options=chrome_options)

driver.get("https://www.betburger.com/pt/users/sign_in")

# Dados de autenticação
email = "alanvictordsg@gmail.com"
password = "Acesso@102030"

# Preencher campos de login
email_field = driver.find_element(By.ID, 'betburger_user_email')
email_field.send_keys(email)

password_field = driver.find_element(By.ID, 'betburger_user_password')
password_field.send_keys(password)

# Aceitar cookies
try:
    # Aguarde até que o botão de consentimento de cookies esteja clicável
    cookies_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, ".cc-btn.cc-allow"))
    )
    # Clique no botão de consentimento dos cookies
    cookies_button.click()
except Exception as e:
    print("Não foi possível clicar no consentimento dos cookies:", str(e))

# Aguardar e clicar no botão de login
try:
    login_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button.btn.btn-submit.submit.sign_in'))
    )
    # Scroll para o botão para garantir que está visível
    driver.execute_script("arguments[0].scrollIntoView(true);", login_button)
    login_button.click()
except Exception as e:
    print("Erro ao clicar no botão de login:", str(e))

# Aguarde alguns segundos para o login ser processado
time.sleep(5)

# Aqui seria ideal verificar alguma condição que confirme o login bem-sucedido

# Salvar cookies
cookies = driver.get_cookies()
with open("cookies.pkl", "wb") as cookies_file:
    pickle.dump(cookies, cookies_file)

# Fechar o navegador
driver.quit()
