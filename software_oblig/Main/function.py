
def isLeapYear(n: int):
    if (n % 400 == 0):
        return True
    elif (n % 4 == 0) and (n % 100 != 0):
        return True
    else:
        return False