import pandas as pd

ps = pd.Series([1,2,3,4])

print(ps)
print(type(ps))

ps_list = ps.tolist()

print(ps_list)
print(type(ps_list))