a=int(input("enter first number"))
b=int(input("enter first number"))
c=int(input("enter first number"))
if(a>=b)&(a>=c):
    {
        print("{0}a is greater".format(a))
    }
elif(b>=c)&(b>=a):
    {
        print("{0}b is greater".format(b))
    }
else:
    {
        print("{0}c is greater".format(c))
    }
