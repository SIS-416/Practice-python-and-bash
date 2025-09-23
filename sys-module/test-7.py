# import calendar

# yy = 2022
# mm = 12
# print(calendar.month(yy, mm))


import matplotlib.pyplot as plt

labels = ('Python', 'C++', 'Ruby', 'Java')
sizes = [215, 130, 245, 210]
plt.pie(sizes, labels=labels, autopct='%1.1f%%',counterclock=False, 
        startangle=105)

plt.show()
