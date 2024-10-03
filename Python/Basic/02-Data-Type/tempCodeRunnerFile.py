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

data = 117
print("ASCII code for space is " + chr(data))

# operator in method
data = "Petrus Handika Sinaga ..."
count = data.count("a")
print("count a from " + data + " = " + str(count))

# normal case
regards = "bro"
print("normal =", regards)

# upper case
regards = regards.upper()
print("upper =", regards)

# lower case
regards = regards.lower()
print("lower =", regards)

# check with isX method

# check lower case example
regards = "sist"
is_lower = regards.islower()
print(regards + "is lower " + str(is_lower))

is_lower= regards.isupper()
print(regards + "is upper " + str(is_lower))

# isalpha() --> checking all alphabeth
# isalnum() --> checking alphabeth and number
# isdecimal() --> checking number only
# isspace() --> checking space, tab, and newline (/n)
# istitle() --> all words started from capital case

title = "It Is Okay Not To Be Okay"
check_title = title.istitle()

print(title + " is title = " + str(check_title))

# checking startswith() & endswith() component
check_start = "Petrus Handika".startswith("Petrus")
print("start =", str(check_start))

check_end = "Petrus Handika".endswith("Petrus")
print("end =", str(check_end))

# merger join() & split() component
x = ["hello", "everyone", "in", "here"]
y = ",".join(x)
print(x)
print(y)

z = " hm ".join(x)
print(z)

z = "hellohmeveryoneinhere"
print(z.split("hm"))

# alocation character with rjust(), ljust(), & center()
right = "right".rjust(10)
print(""+right+"")

left = "left".ljust(10)
print(""+left+"")

center = "center".center(10)
print(""+center+"")

right = right.strip(":")
print(""+right+"")