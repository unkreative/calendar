from itertools import combinations
import os, re

def list_full_paths(directory):
    return [os.path.join(directory, file) for file in os.listdir(directory)]

excluded_files = [
"/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/t.py",
"/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_entreprise"
]

# dirs = os.listdir("/Users/lousergonne/Documents/GitHub/calendar/database/queries/sql_new_structure")
dirs = list_full_paths("/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/")

def remove_items(source_list, items_to_remove):
    for item in items_to_remove:
        while item in source_list:
            source_list.remove(item)

remove_items(dirs, excluded_files)

for dir in dirs:
    with open(dir, "r") as f:
        fr = f.read()
        table_name = re.search('FROM (.*)";', fr)
        variables = re.search('SELECT(.*) FROM ', fr)
        print(variables)
        print(variables[0])
        print(variables[1])
        variables = variables[1]
        variables = variables.split(", ")
        
        list_combinations = list()

        for n in range(len(variables) + 1):
            list_combinations += list(combinations(variables, n))

        print(list_combinations)
        list_combinations.pop(0)
        # list_combinations = [list(x) for x in list_combinations]
        # print(list_combinations)
        # print()
        # list_combinations = list_combinations.pop(0)
        # print(list_combinations)
        os.mkdir(f"/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/{table_name[1]}_dir")

        new_selects = []
        for combi in list_combinations:
            new_select = f"FROM {table_name[1]} WHERE "
            for item in combi:
                new_select = new_select + item + " = ' . $link_value . ' AND "
                
            print(new_select)

            new_select = new_select.rsplit(" AND ", 1)[0]
            new_select = new_select + ";"
            print(new_select)
            print()
            new_selects.append(new_select)
        
            print(new_selects)
            var1 = re.sub('OM.*?";', '', fr)
            var1 = var1.replace("FR", new_select)
            var1 = var1.replace("  id", " id")
            print(combi)
            new_dirname = [e for e in combi]
            print("new_dirname 1",new_dirname)
            
            for x in new_dirname:
                print("x:",x)
                x.replace(" id", "id")

            # new_dirname = new_dirname.replace("['", "")
            # new_dirname = new_dirname.replace("', '", "_")
            # new_dirname = new_dirname.replace("']", "")
            new_dirname = "_".join(new_dirname)
            print("new_dirname 2",new_dirname)
            new_dirname = new_dirname.replace(" ", "")

            with open(f"/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/{table_name[1]}_dir/{table_name[1]}_{new_dirname}", "w") as f1:
                f1.write(var1)


        print("var1",var1)



# Returns: [(), ('a',), ('b',), ('c',), ('a', 'b'), ('a', 'c'), ('b', 'c'), ('a', 'b', 'c')]