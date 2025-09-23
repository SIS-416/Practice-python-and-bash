# for i in range(1,6):
#     for j in range(1,6):
#         print(j%2, end=" ")
#     print()


import calendar

def display_calendar(year, month):
    year = int(input("Enter year: "))
    month = int(input("Enter month: "))
    
    cal = calendar.TextCalendar(calendar.SUNDAY)
    month_calnder = cal.formatmonth(year, month)
    print(month_calnder)

display_calendar(2023, 12)    
