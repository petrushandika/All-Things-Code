import datetime as dt

# Get today's date
today = dt.date.today()
print(today)
print(f"Today = {today:%A}")

# Example date for demonstration
date = dt.date(2005, 10, 10)
print(date)
print(f"Day of the date = {date:%A}")

# Input date of birth
print("Please input date, month, and year of birth")
day = int(input("Date \t: "))
month = int(input("Month \t: "))
year = int(input("Year \t: "))

# Create date of birth object
date_of_birth = dt.date(year, month, day)
print(f"Your Date of Birth: {date_of_birth}")
print(f"Day of Birth: {date_of_birth:%A}")

# Calculate the difference between today's date and date of birth
age_days = (today - date_of_birth).days

# Convert to years and months
if age_days >= 365:
    age_in_years = age_days // 365
    remaining_days = age_days % 365
    age_in_months = remaining_days // 30  # Approximate month calculation
    print(f"Your age is: {age_in_years} years and {age_in_months} months")
else:
    age_in_months = age_days // 30  # Approximate month calculation for those under 1 year
    remaining_days = age_days % 30
    print(f"Your age is: {age_in_months} months and {remaining_days} days")
