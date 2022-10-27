from software_oblig.function import isLeapYear

print("this code will take a year and check if its s leap year\n")
print("what year do you want to check?")
year = input()
year = int(year)


if isLeapYear(year) == True:
    print(f"{year} is a leap year")

if isLeapYear(year) == False:
    print(f"{year} is not a leap year")

