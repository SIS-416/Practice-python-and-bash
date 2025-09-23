import pandas as pd

dict = {
    "a": ["dhaka", None, "sylhet", "comilla", None],
    "b": ["koltaka", "dheli", None, "paris", "texas"],
    
}

data = pd.DataFrame(dict)
print(data)

data1 = data.bfill()
print(data1)