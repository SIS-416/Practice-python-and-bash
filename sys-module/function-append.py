def fun(lst):
    lst.append(3)
    return lst
def func(lst):
    lst.append(4)
    return lst

x = [1, 2]
y = fun(x)
z = func(x)
print(f"{x} {y} {z}")