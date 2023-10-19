#!/usr/bin/env python
# coding: utf-8

# In[1]:


import string

# Inputan plaintext yang akan dienkripsi
plaintext = input("Masukkan teks yang akan dienkripsi: ")

def caesar_encrypt(plaintext):
    res = ""
    for x in range(len(plaintext)):
        if plaintext[x].isupper():
            enc = (string.ascii_uppercase.index(plaintext[x]) + 32) % 26
            res += string.ascii_uppercase[enc]
        elif plaintext[x].islower(): 
            enc = (string.ascii_lowercase.index(plaintext[x]) + 32) % 26 
            res += string.ascii_lowercase[enc] 
        elif plaintext[x].isdigit(): 
            res += chr(((ord(plaintext[x]) - ord('0') + 32) % 32) + ord('0')) 
        else:
            res += plaintext[x]
    return res


encrypted_text = caesar_encrypt(plaintext)
print("Teks terenkripsi:", encrypted_text)


ciphertext = input("Masukkan teks yang akan didekripsi: ")

def caesar_decrypt(ciphertext):
    res = ""
    for x in range(len(ciphertext)):
        if ciphertext[x].isupper():
            dec = (string.ascii_uppercase.index(ciphertext[x]) - 32) % 26
            res += string.ascii_uppercase[dec]
        elif ciphertext[x].islower():
            dec = (string.ascii_lowercase.index(ciphertext[x]) - 32) % 26
            res += string.ascii_lowercase[dec]
        elif ciphertext[x].isdigit():
            res += chr(((ord(ciphertext[x]) - ord('0') - 32) % 10) + ord('0'))
        else:
            res += ciphertext[x]
    return res

decrypted_text = caesar_decrypt(ciphertext)
print("Teks terdekripsi:", decrypted_text)


# In[ ]:




