from array import *

T = [[11,22,33,44,5],[30,40,50],[10,20,21,23],[90,89,74,85]]

# print(T[0])
# print(T[1][0])
# del T[3]

T[2] = [110,220]
T[0][3] = 777

for r in T:
    for c in r:
        print(c, end= " ")
    print()
        