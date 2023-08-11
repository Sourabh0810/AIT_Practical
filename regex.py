import re
def validate(str):
    regex=("(http|https)://) (www.)?"+"[a-zA-Z-9@:%-\\+~#?&//=]"+"{2,256}\\")
    p=re.compile(regex)
    if(str==None):
        return False
    if(re.search.p,str):
        return True
    else:
        return False
    
url="https://www.google.com"
if(validate(url)==True):
    print("yes")
else:
    print("no")
