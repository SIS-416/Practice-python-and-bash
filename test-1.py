sentence = input("Enter a sentence :")
print("total char with space ",len(sentence))

spaces = 0

for i in range(0, len(sentence)):
    if sentence[i] == " ":
        spaces +=1
print("spaces = ", spaces)  
      