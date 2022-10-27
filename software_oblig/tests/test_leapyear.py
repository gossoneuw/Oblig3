from software_oblig.Main.function import isLeapYear


def test_if_number_divisible_by_4_but_not_100_is_leapyear():
    assert isLeapYear(2024)

def test_if_number_divisible_by_400_is_leapyear():
    assert isLeapYear(2000)

def test_if_number_divisible_by_100_but_not_400_is_not_leapyear():
    assert not isLeapYear(1900)

def test_if_number_not_divisible_by_4_is_not_leapyear():
    assert not isLeapYear(1991)