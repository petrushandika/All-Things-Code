inputUser = float(input("Input a number that is less than 3 and greater than 10 : "))

isLessThen = (inputUser < 3)
print("Less Then =", isLessThen)

isGreaterThen = (inputUser > 10)
print("Greater Then =", isGreaterThen)

isCorrect = isLessThen or isGreaterThen
print("Value input =", isCorrect)

isGreaterThen = inputUser > 3
print("Greater then 3 =", isGreaterThen)

isLessThen = inputUser < 10
print("Less then 10 =", isLessThen)