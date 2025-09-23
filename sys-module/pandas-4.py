import pandas as pd
import numpy as np

data = {
    'name': ['John', 'Anna', None, None],
    'location': ['New York', 'Paris', 'Berlin', 'London'],
    'age': [24, 13, None, 33]
    
}

data_pandas = pd.DataFrame(data)
print(data_pandas)

print(data_pandas.isnull())
print(data_pandas.isnull().sum())
