class A:
    def __init__(self):
       self.value = 10
       
    def __getatter__(self, name):
        if name == 'value':
            return 20
        raise AttributeError
a = A()
print(a.value)                   
