import sys, os, re
os.mkdir("/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/")
with open("/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/query", "r") as f:
    fr = f.read()
    fr = fr.split("\n")
    for insert_statement in fr:
        insert_statement = insert_statement.replace("INSERT INTO `", "")

        name = insert_statement.split('`', 1)[0]
        print(name)

        parenthesis = re.search('(`(.*)`)', insert_statement)
        value_names = parenthesis[0]
        value_index = parenthesis[1]

        print("value_names",value_names)
        print("value_index",value_index)

        values = value_names.replace("`", "")
        values = values.replace("(", "")
        values = values.replace(" id", "id")

        # values = values.split(", ")
        print("values",values)
        values1 = values.split(", ")
        defining_values_lst = []
        ending_statement_lst = []
        field_name_array_lst = []

        num = 0
        for value in values1:
            if value == " id":
                value = "id"
            defining_values_lst.append(f"${name}_{value} = array();")
            ending_statement_lst.append(f"${name}_{value} = $result_{name}[{num}][1];")

            field_name_array_lst.append(f"""  array("{value}", ${name}_{value}),""")

            num += 1

        defining_values = "\n".join(defining_values_lst)
        field_name_array = "\n".join(field_name_array_lst)
        ending_statement = "\n".join(ending_statement_lst)

        query = f"""
// import {name}

{defining_values}

$arr_{name} = array(
{field_name_array}
);

$sql_{name} = "SELECT {values} FROM {name}";

$result_{name} = import_arr($sql_{name}, $arr_{name});

{ending_statement}
"""
        print(query)
        with open(f"/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/{name}",  "w") as f:
            f.write(query)



# name = ""
# defining_values = f" = array();"
# field_name_array = ""
# index = ""
# ending_statement = f"${name} = $result_{name}[{index}][1])"
