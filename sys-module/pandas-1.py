import pandas as pd

dict = {
    'A': [1, None, 3, 4, None],
    'B': [10, 20, None, 40, 50],
    'C': [100, 200, None, 400, 500]
    
}
data = pd.DataFrame(dict)
print(data)

data1 = data.ffill()
print(data1)

