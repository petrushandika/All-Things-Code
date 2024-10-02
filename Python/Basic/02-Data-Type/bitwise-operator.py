# bitwise operator & binart operator
x = 9
y = 5

# bitwise OR (|)
z = x | y
print("value :", x, ", binary :", format(x, "08b"))
print("value :", y, ", binary :", format(y, "08b"))
print("------------------------------ +")
print("value :", z, ", binary :", format(z, "08b"))

print("------------------------------")

# bitwise AND (&)
z = x & y
print("value :", x, ", binary :", format(x, "08b"))
print("value :", y, ", binary :", format(y, "08b"))
print("------------------------------ +")
print("value :", z, ", binary :", format(z, "08b"))

# bitwise NOT (~)
x = ~ y
print("value :", x, ", binary :", format(x, "08b"))
print("------------------------------ ~")
print("value :", y, ", binary :", format(y, "08b"))
print("------------------------------ ^")

# shifting right (>>)
x = y >> 2
print("value :", x, ", binary :", format(x, "08b"))
print("------------------------------ >>")
print("value :", y, ", binary :", format(y, "08b"))
print("------------------------------ >>")

# shifting left (<<)
x = y << 2
print("value :", x, ", binary :", format(x, "08b"))
print("------------------------------ <<")
print("value :", y, ", binary :", format(y, "08b"))
print("------------------------------ <<")