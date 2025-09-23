import pandas as pd

dict = {
    "name": ["sakib", "tamim", "mushfiq", "mashrafi", "mehedi"],
    "age": [30, 28, 32, 38, 23],
    "city": ["dhaka", "chittagong", "rajshahi", "khulna", "rangpur"],
    
}

replace = {
    "city": {
        "dhaka": "Dhaka",
        "chittagong": "Chittagong",
        "rajshahi": "Rajshahi",
        "khulna": "Khulna",
        "rangpur": "Rangpur"
    },
    "age": {
        30: 31,
        28: 29,
        32: 33,
        38: 39,
        23: 24
    }
}

data = pd.DataFrame(dict)
print(data)

data1 = data.replace(replace)
print(data1)
