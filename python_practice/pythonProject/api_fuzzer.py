import requests
import sys

res = requests.get(url=f"http://10.10.11.161/api")

print(res)
