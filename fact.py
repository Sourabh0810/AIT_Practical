n=int(input("enter a number"))
if(n<0):
    print("please enter a valid number")
    
elif(n==0):
    print("factorial is:0")
    
    
else:
    fact=1
    for i in range(1,n+1):
        fact=fact*i
    print("factorial is:",fact)  
      

