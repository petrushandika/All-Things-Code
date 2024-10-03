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

# format string

# string
name = "petrus"
format_str = f"hello {name}"
print(format_str)

# boolean
boolean = False
format_str = f"boolean = {boolean}"
print(format_str)

# number
number = 2005.5
format_str = f"number = {number}"
print(format_str)

# integers
number = 15.5
format_str = f"integers = {number}"
print(format_str)

# thousands
number = 2000
format_str = f"ribuan = {number}"
print(format_str)

# decimals
number = 2005.54321
format_str = f"decimals = {number: .3f}"
print(format_str)

# show leading zero
number = 2005.54321
format_str = f"decimals = {number: 010.3f}"
print(format_str)

# show + or -
minus_number = -10
plus_number = +10.1234
format_minus = f"minus = {minus_number:+d}"
format_plus = f"plus = {plus_number:+.2f}"

print(format_minus)
print(format_plus)

# format percent
percentage = 0.045
format_percent = f"percent = {percentage:.2%}"
print(format_percent)

# using arithmetic operation in placeholder
value = 10000
total = 5

format_string = f"total value = Rp. {value*total:,}"
print(format_string)

# format another value (binary, octal, hexadecimal)
value = 255
format_binary = f"binary = {bin(value)}"
format_octal = f"ocal = {oct(value)}"
format_hex = f"hex = {hex(value)}"

print(format_binary)
print(format_octal)
print(format_hex)

# width and multiline

# data
name_data = "Petrus Handika"
age_data = 22
height_data = 172
size_data = 42

# standard string
string_data = f"name = {name_data}, age = {age_data}, height = {height_data}, shoes size = {size_data}"
print(string_data)

# multiline string
string_data = f"name = {name_data}, \nage = {age_data}, \nheight = {height_data}, \nshoes size = {size_data}"
print(string_data)

# multiline string (triple quote)
string_data = f"""
name        = {name_data}
age         = {age_data}
tinggi      = {height_data}
shoes size  = {size_data}
"""
print(string_data)

