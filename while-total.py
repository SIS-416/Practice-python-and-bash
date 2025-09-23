
n = int(input("Enter a number: "))
total = 0
while n > 0:
    d = n % 10 # d is the last digit of n
    total += d
    n = n // 10 # n is the number without the last digit
print(f"Total digits: {total}")
    