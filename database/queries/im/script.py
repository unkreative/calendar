import sys, os, re

def list_full_paths(directory):
    return [os.path.join(directory, file) for file in os.listdir(directory)]

excluded_files = ['/Users/lousergonne/Documents/GitHub/calendar/database/queries/sql_new_structure/structure', '/Users/lousergonne/Documents/GitHub/calendar/database/queries/sql_new_structure/script.py']
# dirs = os.listdir("/Users/lousergonne/Documents/GitHub/calendar/database/queries/sql_new_structure")
dirs = list_full_paths("/Users/lousergonne/Documents/GitHub/calendar/database/queries/sql_new_structure")

def remove_items(source_list, items_to_remove):
    for item in items_to_remove:
        while item in source_list:
            source_list.remove(item)

remove_items(dirs, excluded_files)

print(dirs)

def file_replace(filepath, items_to_replace, items_to_replace_with):
    with open(filepath, "r+") as f:
        fread = f.read()
        print(type(fread))
        print((fread))
        f.close()

# empty = 0
# for file in dirs:
#     file_replace(file, empty, empty)

# for file in dirs:
#     tmp = file.rstrip(".sql")
#     print(tmp)
#     os.rename(file, tmp)

def organise():
    with open("structure", "w+") as f_structure:
        f_structureread = f_structure.read()
        # print(type(fread))
        # print((fread))

        for file in dirs:
            with open(file, "r+") as f:
                fread = f.read()
                fread = fread.split("VALUES")
                print(fread)
                name = re.findall(r'\`.*?\`', fread[0])[0]
                print(name)

                res1 = re.findall(r'\(.*?\)', fread[0])
                res2 = re.findall(r'\(.*?\)', fread[1])
                res1.append("")
                res2.append("")
                print(res1)
                print(res2)

                query = ["INSERT INTO", name , res1, "VALUES", res2]

                print(query)

                query[-1][1] = query[-1][0].strip("(")
                query[-1][1] = query[-1][1].strip(")")

                query[-1][1] = query[-1][1].split(", ")

                len_inp = len(query[-1][1])


                query[-3][1] = query[-3][0].strip("(")
                query[-3][1] = query[-3][1].strip(")")

                query[-3][1] = query[-3][1].split(", ")

                len_values = len(query[-3][1])

                print(query)
                
                for num in range(0, len(query[-1][1])):
                    query[-1][1][num] = num

                    num += 1
                print(query)
                query[-1].append(", ".join(str(e) for e in query[-1][-1]))
                query[-3].append(", ".join(str(e) for e in query[-3][-1]))

                rebuilt_query = f"{query[0]} {query[1]} ({query[2][-1]}) {query[3]} ({query[4][-1]})"
                print(rebuilt_query)

                open(file, 'w').close()
                f.write(rebuilt_query)

                organised_values_inputs = ""
                for num in range(0, len(query[-1][-2])):
                    organised_values_inputs += "    " 
                    organised_values_inputs += f"{query[-1][-2][num]}"
                    organised_values_inputs += " " 
                    organised_values_inputs += f"{query[-3][-2][num]}"
                    organised_values_inputs += "\n" 

                # f_json
                f_stats_str = f"name of table {query[1]} \n {organised_values_inputs}\n\n"

organise()