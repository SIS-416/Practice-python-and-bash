from collections import deque


stack = deque()

stack.append('a')
stack.append('b')
stack.append('c')

print("Initial Stack")
print(stack)
print("Element popped from Stack")
print(stack.pop())
print(stack.pop())
print(stack.pop())
print("After popping element from stack")
print(stack)



