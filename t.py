n=int(input("enter a number"))
m=int(input("enter a second number"))
for number in range(n,m+1):
    for i in range(2,number):
       if(number%i)==0:
        
           #print("{0} is not prime number".format(n))
           break
       else:
         
           #print("{0}no is prime".format(n))
           print(number)
           
           
         
    


    
       
        
        
    
    