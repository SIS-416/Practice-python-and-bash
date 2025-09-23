import pandas as pd
import numpy as np

data = {
    'name': ['John', 'Anna', 'julie', 'Chris'],
    'review': ['Good', 'best', 'Excellent', 'Average']
    
}

data_pandas = pd.DataFrame(data)
print(data_pandas.to_json("output.json", orient="records", lines=True))