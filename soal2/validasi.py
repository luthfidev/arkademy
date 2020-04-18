# Password validation in Python 
# using naive method 
import re 
  
# Function to validate the password 
def username_check(username): 
      
    SpecialSym =['@'] 
    val = True
      
    if len(username) < 2: 
        print('Minimal karakter 2') 
        val = False
          
    if len(username) > 12: 
        print('Maksimal karakter 12') 
        val = False
          
    if not any(char in SpecialSym for char in username): 
        print('Username harus menganduk @ didepan') 
        val = False
    if val: 
        return val

def password_check(password): 
    reg = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!#%*?&]{6,20}$"
      
    # compiling regex 
    pat = re.compile(reg) 
      
    # searching regex                  
    mat = re.search(pat, password)

    val = True
      
    if len(password) < 2: 
        print('length should be at least 6') 
        val = False
          
    if len(password) > 12: 
        print('length should be not be greater than 8') 
        val = False
          
    if mat: 
        print('Password should have at least one of the symbols $@#') 
        val = False
    if val: 
        return val  
  
# Main method 
def main():

    username = 'koders' 
    password = '123123@'

        
    if (username_check(username)): 
        print("Username Benar") 
    else: 
        print("Username Salah")

    if (password_check(password)):
        print("Valid")
    else:
        print("not Valid")

    
          
# Driver Code         
if __name__ == '__main__': 
    main() 