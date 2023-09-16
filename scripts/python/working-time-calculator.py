weeks = 37

btime =  70
# time spent in week
bweektime = (btime * 2 * 5 - btime * 2)/65

byeartime = bweektime * weeks - bweektime * 6

eweektime = 8 * 45

eyeartime = (eweektime * weeks)/0.25 - eweektime * 5 - eweektime * 10

hweektime = 4

hyeartime = hweektime * weeks + hweektime * 4

total = byeartime + eweektime + hyeartime

print(f"The total working time was {total}, the time worked in bus was {byeartime}, the time worked in entreprise was {eyeartime}, the time worked at home was {hyeartime}")