vowels = ['a','e','i','o','u','m']

sentence = "my name is shakib"
count = 0

for i in sentence:
    for j in vowels:
     if i == j:
      count +=1
print(count)           
