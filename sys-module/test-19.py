message = input("Tell me something, and I will repeat it back to you: ")

while message != 'quit':
   n = int(input("How many times do you want me to repeat it? "))
   for i in range(n):
    print(message)
        
    message = input("Tell me something, and I will repeat it back to you: ")
    
print("Goodbye!")
