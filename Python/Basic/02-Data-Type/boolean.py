# logical operator or boolean
# not, or, and xor

x = False
y = not x
print("data x = ", x)

print("---------------")

print("data y = ", y)

# OR (if one value true, so the result is true)
x = False
y = False
z = x or y
print(x, "OR", y, "=", z)

x = False
y = True
z = x or y
print(x, "OR", y, "=", z)

x = True
y = False
z = x or y
print(x, "OR", y, "=", z)

x = False
y = False
z = x or y
print(x, "OR", y, "=", z)

print("---------------")

# AND (if one value false, so the result is false)
x = False
y = False
z = x and y
print(x, "AND", y, "=", z)

x = False
y = True
z = x and y
print(x, "AND", y, "=", z)

x = True
y = False
z = x and y
print(x, "AND", y, "=", z)

x = False
y = False
z = x and y
print(x, "AND", y, "=", z)

print("---------------")

# XOR (will be true if one value true, the rest is false)
x = False
y = False
z = x ^ y
print(x, "XOR", y, "=", z)

x = False
y = True
z = x ^ y
print(x, "XOR", y, "=", z)

x = True
y = False
z = x ^ y
print(x, "XOR", y, "=", z)

x = False
y = False
z = x ^ y
print(x, "XOR", y, "=", z)