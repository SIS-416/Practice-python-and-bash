import string

def str_cleaner(x: string):
    trns = str.maketrans('', '', string.punctuation)
    cln_str = x.translate(trns)
    return cln_str

txt = "Hello, my name is John Doe! I am $$$25 years old."
print(str_cleaner(txt))

