# a = "Tiger"
# print(a.upper())

# lst = []

# result = 0

# for i in range(5):
#     num = int(input("Enter the numbers:"))
#     lst.append(num)
#     result = result + num
    
# print("The list is ", lst)    
# print("Result ",result)    



lst = []

for i in range(5):
     num = int(input("Enter the numbers:"))
     lst.append(num)


tupl = tuple(lst)  
result = 1  

for j in  tupl:    
     result = result * j
 
    
print("The tuple is ", tupl)    
print("Result ",result)    

