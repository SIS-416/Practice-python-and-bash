import requests
response = requests.get("https://www.w3schools.com/python/numpy/default.asp")
print(response.status_code)
