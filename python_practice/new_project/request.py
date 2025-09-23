from requests import get
response = get("https://www.w3schools.com/python/numpy/default.asp")
print(response.status_code)
