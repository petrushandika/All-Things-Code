# Input grade and convert to integer
grade = int(input("Please input your grade value: "))

if grade >= 80:
    print("A")
elif grade >= 65:
    print("B")
elif grade >= 50:
    print("C")
elif grade >= 35:
    print("D")
else:
    print("E")
