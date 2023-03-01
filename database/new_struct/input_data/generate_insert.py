import re, os 
import time 

with open("/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/input_data/output", "r") as f:
    fread = f.read()
    print(fread)
    hours = ["10h10-11h40", "11h40-13h15", "13h15-14h45", "Lundi" , "Mardi", "Mercredi", "Jeudi", "Vendredi"]
    hours_replace = ["DELIMITER\n10h10-11h40\nDELIMITER", "DELIMITER\n11h40-13h15\nDELIMITER", "DELIMITER\n13h15-14h45\nDELIMITER", "DELIMITER\nLundi\nDELIMITER" , "DELIMITER\nMardi\nDELIMITER", "DELIMITER\nMercredi\nDELIMITER", "DELIMITER\nJeudi\nDELIMITER", "DELIMITER\nVendredi\nDELIMITER"]

    for x in range(0, len(hours)):
        fread = fread.replace(hours[x], hours_replace[x])

    fread = fread.replace("\n\n\n", "|")
    fread = fread.replace("\n\n", "|")
    fread = fread.replace("\n", "|")

    fread = fread.replace("|||", "|")
    fread = fread.replace("||", "|")


    fread = fread.split("DELIMITER")

    for things in fread:
        print(things)
    
    print(fread)
    lundi_start = fread.index("|Lundi|")
    mardi_start = fread.index("|Mardi|")
    mercredi_start = fread.index("|Mercredi|")
    jeudi_start = fread.index("|Jeudi|")
    vendredi_start = fread.index("|Vendredi|")
    print(lundi_start, mardi_start, mercredi_start, jeudi_start, vendredi_start)

    lundi = [fread[x] for x in range(lundi_start, mardi_start)]
    mardi = [fread[x] for x in range(mardi_start, mercredi_start)]
    mercredi = [fread[x] for x in range(mercredi_start, jeudi_start)]
    jeudi = [fread[x] for x in range(jeudi_start, vendredi_start)]
    vendredi = [fread[x] for x in range(vendredi_start, len(fread))]
    print(lundi, "\n", mardi, "\n", mercredi, "\n", jeudi, "\n", vendredi)

    days = [lundi, mardi, mercredi, jeudi, vendredi]

    for day in days:
        for x in range(0, len(day)):
            print(day[x])
            # day[x] = day[x].split("\n")

    for day in days:
        for x in range(0, len(day)):
            day[x] = day[x].split("|")

        # for x in range(0, len(day)):
        #     print(day[x])

        #     if "|" in day[x]:
        #         print("yes 1")
        #         day[x] = day[x].split("|")

        #     if "_" in day[x]:
        #         print("yes")
        #         day[x] = day[x].split("|")
        #     print(day[x])
        
        day[0] = day[0][1]

        day[1].pop(0)
        day[1].pop(-1)
        
        day[2] = day[2][1]
        
        day[3].pop(0)
        day[3].pop(-1)

    for day in days:
        for item in range(0, len(day)):
            if isinstance(day[item], list):

                print("OCCURENCE")
                day[item] = [x for x in day[item] if x != '']

                for x in range(0, len(day[item])):
                    print(day[item])
                    print(x)
                    if "_" in day[item][x] and " " in day[item][x]:
                        day[item][x] = day[item][x][:-1]
                        # print(x)
                        # time.sleep(0.5)
                        day[item].insert(
                            day[item].index(
                                day[item][x]),
                                "_"
                                )
            if isinstance(day[item], list):
                if "_" in day[item][-1]:
                    day[item].pop(-1)
                    day[item].append("_")
                if len(day[item]) == 1:
                    pr
                    day[item] = day[item][1]


        



                

    print("\n\n\n\n\n\n\n")

    print(lundi, "\n\n", mardi, "\n\n", mercredi, "\n\n", jeudi, "\n\n", vendredi)

    