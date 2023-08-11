def oddvalue(str):
    result=""
    for i in range(len(str)):
        if i%2!=0:
            result =result+str[i]
            i+=1
            return result
        
print(oddvalue("sourabh"))
print(oddvalue('yadav'))