value_x = float(input("please input value = "))
operator = input("operator (+, -, x, /) = ")
value_y = float(input("please input value = "))

# conditional
if operator == "+" :
    result = value_x + value_y
elif operator == "-" :
    result = value_x - value_y
elif operator == "x" or operator == "*" :
    result = value_x * value_y
elif operator == "/" :
    result = value_x / value_y

# Convert the result to an integer to remove decimals
output = int(result)
print(f"Result: {output}")
