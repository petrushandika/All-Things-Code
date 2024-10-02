# assignment operator
x = 5 # this is assignment
print("value x =", x)

x += 1 # it means x = x + 1
print("value x += 1, value x =", x)

x -= 1 # it means x = x - 1
print("value x -= 1, value x =", x)

x *= 1 # it means x = x + 1
print("value x *= 1, value x =", x)

x /= 1 # it means x = x + 1
print("value x /= 1, value x =", x)

print("---------------")

y = 10
print("value y =", y)

y %= 3
print("value y %= 3, value y =", y)

y // 3
print("value y // 3, value y =", y)

print("---------------")

x = 5
print("value x =", x)

x **= 3
print("value x **= 3, value x =", y)

print("---------------")

# bitwise operator OR (|)
z = True
print("value z =", z)

z |= False
print("value z |= 3, value z =", z)

z = False
print("value z =", z)

z |= False
print("value z |= 3, value z =", z)

print("---------------")

# bitwise operator AND (&)
z = True
print("value z =", z)

z &= False
print("value z &= 3, value z =", z)

z = False
print("value z =", z)

z &= False
print("value z &= 3, value z =", z)

print("---------------")

# bitwise operator XOR (^)
z = True
print("value z =", z)

z ^= False
print("value z ^= 3, value z =", z)

z = False
print("value z =", z)

z ^= False
print("value z ^= 3, value z =", z)

# shifting right (>>=)
shift = 0b0100
print("value shift =", format(shift, "04b"))

shift >>= 2
print("value shift >>= 2, value shift =", format(shift, "04b"))

# shifting right (<<=)
shift <<= 2
print("value shift <<= 2, value shift =", format(shift, "04b"))
