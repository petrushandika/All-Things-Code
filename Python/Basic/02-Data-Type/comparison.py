# comparison operators
x = 4
y = 2

# greater then (>)
result = x > 3
print(x, ">", 3, "=", result)

result = y > 3
print(x, ">", 3, "=", result)

result = y > 2
print(x, ">", 2, "=", result)

print("---------------")

# less then (<)
result = x < 3
print(x, "<", 3, "=", result)

result = y < 3
print(y, "<", 3, "=", result)

result = y < 2
print(y, "<", 2, "=", result)

print("---------------")

# greater equals then (>=)
result = x >= 3
print(x, ">=", 3, "=", result)

result = y >= 3
print(y, ">=", 3, "=", result)

result = y >= 2
print(y, ">=", 2, "=", result)

print("---------------")

# less equals then (<=)
result = x <= 3
print(x, "<=", 3, "=", result)

result = y <= 3
print(y, "<=", 3, "=", result)

result = y <= 2
print(y, "<=", 2, "=", result)

print("---------------")

# equals then
result = x == 4
print(x, "==", 4, "=", result)

result = y == 4
print(y, "==", 4, "=", result)

print("---------------")

# not equals then
result = x != 4
print(x, "!=", 4, "=", result)

result = y != 4
print(y, "!=", 4, "=", result)

print("---------------")

# "is" to be comparison identity object
x = 5
y = 5
print ("value x = ,", x, "id = ", hex(id(x)))
print ("value y = ,", y, "id = ", hex(id(y)))

result = x is y
print("x is y = ", result)

result = x is not y
print("x is not y", result)
