# a = "42"
# a += "5"
# t = int(a) - 8
# print(float(t))

mesage = input("Enter a message: ")

while mesage != '':
    n = int(input("Enter a number: "))
    for i in range(n):
        print(mesage)
    mesage = input("Enter a message: ")