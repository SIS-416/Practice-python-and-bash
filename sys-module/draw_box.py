# def drawBox():
#     print("Drawing a box")
#     print("**********")
#     print("*        *")
#     print("*        *")
#     print("*        *")
#     print("**********")
    
# drawBox()    


def count_func(data=None):
    if data is None:
        data = {}
    data['count'] = data.get('count', 0) + 1
    return data['count']
print(count_func())
print(count_func())
print(count_func())
print(count_func())
print(count_func())    