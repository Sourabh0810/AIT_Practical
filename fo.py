n=int(input("how many terms"))
n1=0
n2=1
if(n<1):
    print("please enter a positive number")
    
elif(n==1):
    print("number is"+n1)
    
else:
    
    count=0
    while count<n:
        print(n1)
        nth=n1+n2
        n1=n2
        n2=nth
      #count=count+1
        count+=1
        8
         
