x = 20
y = 10

# addition operators
result = x + y
print(x, "+", y, "=", result)

# substraction operators
result = x - y
print(x, "-", y, "=", result)

# multiplication operators
result = x * y
print(x, "x", y, "=", result)

# division operators
result = x / y
print(x, "/", y, "=", result)

# exponent operators
result = x ** y
print(x, "^", y, "=", result)

# modulus operators
result = x % y
print(x, "%", y, "=", result)

# floor division operators
result = x // y
print(x, "//", y, "=", result)

# precedence operators
result = x + y - x * y / x ** y % x // y
print(result)

# priority precedence operators
# ()
# exponent **
# multiplication
# addition and substraction