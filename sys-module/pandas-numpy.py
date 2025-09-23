import pandas as pd
import numpy as np

dict = {
    "Name": ["Sakib", None, "Mushfiq", "Mashrafi", None],
    "Age": [30, None, None, 38, 23],
    "City": ["Dhaka", None, "Rajshahi", "Khulna", "Rangpur"],
    "Country": ["Bangladesh", "India", "Pakistan", "Srilanka", "Nepal"]
    
}

data = pd.DataFrame(dict)
print(data)

df_cleaned = data.dropna(axis=1)
print(df_cleaned)
