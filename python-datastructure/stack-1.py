class Stack:
    
    def __init__(self, size):
        self.arr = [None] * size
        self.capacity = size
        self.top = -1
        
    def push(self, val):
        if self.isFull():
            print("Stack Overfloww!!")
            exit(-1)
            
        print("Inserting element into stack")
        self.top = self.top +1
        self.arr[self.top] = val
        
    def pop(self):
        if self.isEmpty():
            print("Stack is Empty")
            exit(-1)
        print("Deleting element is :", self.peek())
        
        val = self.arr[self.top]
        self.top = self.top -1
        return val
    
    def peek(self):
        if self.isEmpty():
            exit(-1)
        return self.arr[self.top]
    
    def size(self):
        return self.top + 1
    
    def isEmpty(self):
        return self.size() == 0
    
    def isFull(self):
        return self.capacity == self.size()
    
stack = Stack(3)
stack.push(1)
stack.push(2)
stack.push(3)
stack.pop()
stack.pop()

print("top element of stack is ", stack.peek())
print("Size of this ",stack.size())