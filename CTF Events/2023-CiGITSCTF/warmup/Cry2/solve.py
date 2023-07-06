import string

dict = string.ascii_lowercase
print(f'{dict=}')

# 3 18 25 16 20 15 {20 8 5 14 21 13 2 5 18 19 13 1 19 15 14}
c = '3 18 25 16 20 15 20 8 5 14 21 13 2 5 18 19 13 1 19 15 14'
c = c.split(' ')
c = [int(i) for i in c]
c= [(i + 25) % 26 for i in c]

flag = ''.join([dict[i] for i in c])

print(f'{flag=}')