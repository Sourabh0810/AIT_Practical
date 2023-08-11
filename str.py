str="restart"
modified_str=" "
for char in range(0,len(str)):
    if(str[char]=='a'):
        modified_str +='$'
     
    else:
        modified_str +=str[char]
        print("your modified string")
        print(modified_str)
        
    
    