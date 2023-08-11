n=9
for i in range(n,0,-1):
    for j in range(i,0,-1):
        if(j==6):
            print(9,end=" ")
        elif(j==9):
            print(6,end=" ")
        else:
            print(j,end=" ")
    print("\n")
