
import re 

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
    
    val = True
     
    if len(password) < 2: 
        print('Minimal 2 karakter') 
        val = False
          
    if len(password) > 12: 
        print('Maksimal karakter 12') 
        val = False
    
    reg = "\D"
    pat = re.compile(reg)            
    mat = re.search(pat, password)
    if mat: 
        print('Password harus berisi digit') 
        val = False
    if val: 
        return val  
  

def main():

    x = '@'
    username = x,'koders' 
    password = '123123'

        
    if (username_check(username)): 
        print("Username Benar") 
    else: 
        print("Username Salah")

    if (password_check(password)):
        print("Password Valid")
    else:
        print("Password Tidak Valid")

           
if __name__ == '__main__': 
    main() 