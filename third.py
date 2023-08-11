n=int(input("enter  n value"))
m=int(input("enter m value"))
print("the prime numbers in the range are:")
for number in range(n,m+1):
    if number>1:
        for i in range(2,number):
            if(number%i)==0:
                break
            else:
                print(number)