# a = "8"
# a += "65"
# print(a)
# t = int(a) + 5

# print(float(t))

class Node:
     def __init__(self,data=None):
         self.data = data
         self.next = None
         

class LinkedList:
    def __init__(self):
        self.head = None
        
def append(self,data):
new_node = Node(data)
if not self.head:
    self.head = new_node
    return
current = self.head
while current.next:
    current = current.next 
current.next = new_node


l1 = LinkedList()
l1.append(1)
l1.append(2)
l1.append(3)      

def prepend(self,data):
    new_node = Node(data)
    new_node.next = self.head
    self.head = new_node
    

l1 = LinkedList()
l1.prepend(1)
l1.prepend(0)


def print_list(self):
    current = self.head
    while current:
        print(current.data, end=" -> ")
        current = current.next
    print("Node")
    
    
l1 = LinkedList()
l1.append(1)
l1.append(2)
l1.append(3)
l1.print_list()     

