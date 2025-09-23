import pandas as pd

people = [
    {'name': 'alice', 'age': 18, 'city': 'beijing'},
    {'name': 'bob', 'age': 20, 'city': 'shanghai'},
    {'name': 'cindy', 'age':22, 'city': 'shenzhen'},
    {'name': 'david', 'age': 24, 'city': 'guangzhou'},
    {'name': 'eve', 'age': 26, 'city': 'chengdu'}
]

df = pd.DataFrame(people)

#print(df)

#dd = df.to_csv('data.csv')

print(df.bfill())