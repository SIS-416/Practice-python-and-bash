# def print_msg(number):
#     def printer():
#         number  = 3
#         print(number)
#     printer()
#     print(number)
# print_msg(9)        

def outer_func():
    y =20
    def inner_func():
        nonlocal y
        y = 30
        print(y)
    inner_func()
    print(y)
outer_func()    