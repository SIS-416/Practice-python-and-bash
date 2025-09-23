T = [[1,2,3,4,5],[6,7,8,9,10],[11,12,13,14,15]]
print(T)
print("after use of for loop")
for i in T:
    for j in i:
        print(j,end=" ")
        #print(T[i][j],end=" ")
    print()
    