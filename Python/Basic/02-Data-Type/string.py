# string operator

# using double quote ("")
print("Hello World")

# using single quote ('')
print('Hello World')

# using backslash
print("C:\\user\\petrus")

# using tab
print("Petrus\t\t\tHandika")

# using backspace
print("Petrus \ Handika")

# using newline
print("line one.\nline two.")

print("---------------")

print("line one.\rline two.")

print("---------------")

print("line one.\r\nline two.")

# string literal or raw

# using raw string
print(r"C:\new folder")

# mutiline literal string
print("""
      Name : Petrus
      Class : Natural Science   
      """)

# multiline literal string and raw
print(r"""
      Name : Petrus Handika
      Class : Natural Science
      """)

# manipulate string

print("---------------")

# connecting string (concatenate)
first_name = "petrus"
last_name = "handika"
full_name = first_name + last_name
print("My name is", full_name)

# calculate length string
length = len(full_name)
print("Lenght Full Name", length)

# operator for string
# checking have a component char or string in string
x = "x"
status = x in full_name
print(x + " already in " + full_name + " = " + str(status)) 

X = "X"
status = X in full_name
print(X + " already in " + full_name + " = " + str(status)) 

x = "x"
status = x not in full_name
print(x + " already in " + full_name + " = " + str(status)) 

# repeat string
print("ya "*10)
print(10*"ya ")

# indexing
print("index - 0 : " + full_name[0])
print("index - 6 : " + full_name[6])
print("index - (-1) : " + full_name[-1])
print("index - (-2) : " + full_name[-2])
print("index - [0:3] : " + full_name[0:3])
print("index - [3:7] : " + full_name[3:7])
print("index - [0, 2, 4, 6, 8, 10] : " + full_name[0:11:12])

# smallest item
print("smallest item : " + min(full_name))

# largest item
print("largest item :", max(full_name))

ascii_code = ord(" ")
print("ASCII code for space is " + str(ascii_code))