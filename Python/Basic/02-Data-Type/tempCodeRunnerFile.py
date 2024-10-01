x = 20
y = 10

# addition operations
result = x + y
print(x, "+", y, "=", result)

# substraction operations
result = x - y
print(x, "-", y, "=", result)

# multiplication operations
result = x * y
print(x, "x", y, "=", result)

# division operations
result = x / y
print(x, "/", y, "=", result)

# exponent operations
result = x ** y
print(x, "^", y, "=", result)

# modulus operations
result = x % y
print(x, "%", y, "=", result)

# floor division operations
result = x // y
print(x, "//", y, "=", result)

# precedence operations
result = x + y - x * y / x ** y % x // y
print(result)