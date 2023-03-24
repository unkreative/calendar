import os


with open("/Users/lousergonne/Documents/GitHub/calendar/tuteurs.csv", "r") as f:
    frtut = f.read()

with open("/Users/lousergonne/Documents/GitHub/calendar/echantillon-datebank-lou.csv", "r") as f:
    fr = f.read()

frtut = frtut.split("\n")
fr = fr.split("\n")

print(frtut)
print(fr)
numtut = 0
for tut in frtut:
    if "\ufeff" in tut:
        tut = tut.replace("\ufeff","")
    tut = tut.split(";")
    query_tuteur = f"INSERT INTO `tuteur` (`id`, `first_name`, `second_name`, `house`, `entreprise`, `untis_id`, `year`) VALUES ({numtut}, '{tut[-1]}', '{tut[-2]}', 1, 1, '{tut[0]}', 2)"
    print(query_tuteur)
    final_query.append(query_tuteur)
    numtut += 1

final_query = []

numstudent = 0

for student in fr:
    student = student.split(";")
    numstudent += 1
    pass
