
import os, re, sys, pyautogui
from tkinterdnd2 import *
from tkinter import filedialog, ttk
from tkinter.ttk import *
from datetime import datetime
import tkinter
from tkinter import *


def list_full_paths(directory):
    return [os.path.join(directory, file) for file in os.listdir(directory)]

excluded_files = [
"/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/t.py",
"/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/.DS_Store"
]

# dirs = os.listdir("/Users/lousergonne/Documents/GitHub/calendar/database/queries/sql_new_structure")
dirs = list_full_paths("/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert")

def remove_items(source_list, items_to_remove):
    for item in items_to_remove:
        while item in source_list:
            source_list.remove(item)

remove_items(dirs, excluded_files)

print(dirs)


# ttk.Label(mainframe, text="feet").grid(column=3, row=1, sticky=W)
# ttk.Label(mainframe, text="is equivalent to").grid(column=1, row=2, sticky=E)

def printing():
    print("assa")

num = 0

def get_variations():
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
            # list_combinations = [list(x) for x in list_combinations]
            # print(list_combinations)
            # print()
            # list_combinations = list_combinations.pop(0)
            # print(list_combinations)
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


    # Returns: [(), ('a',), ('b',), ('c',), ('a', 'b'), ('a', 'c'), ('b', 'c'), ('a', 'b', 'c')]

dirss = []
names = []

txt = []
txt2 =  [] 
num = 0
num2y = 0
num2x = 2
num_container = 1
for dir in dirs:
    if os.path.isdir(dir) == True:
        dir_dir = list_full_paths(dir)
        # print(dir_dir)
        for x in dir_dir:
            print(x)
        print()

        for file in dir_dir:
            dirname = file.rsplit("/", 1)[1]
            if dirname.count("_") <= 3:
                dirss.append(file)
                names.append(f"value_{dirname}")
                
                insert1 = f""" 
# global path_{dirname}, value_{dirname}, intvar_{dirname}

path_{dirname} = "{file}"
value_{dirname} = ["FALSE"]

def change_value_{dirname}():
    global path_{dirname}, value_{dirname}#, intvar_{dirname}
    print("{dirname}")
    if value_{dirname}[-1] == "FALSE":
        print("{dirname} -> TRUE")
        print(value_{dirname})
        value_{dirname}.append("TRUE")
        print(value_{dirname})

    elif value_{dirname}[-1] == "TRUE":
        print("{dirname} -> FALSE")
        print(value_{dirname})
        value_{dirname}.append("FALSE")
        print(value_{dirname})

intvar_{dirname} = IntVar()
Checkbutton(root, text="{dirname}", variable=intvar_{dirname}, command=change_value_{dirname}, pady=-1, padx=-1).grid(column={num2x}, row={num2y})

    """
                txt2.append(insert1)
                if num2y == 30:
                    num2x += 1
                    num2y = 0
                else:
                    num2y += 1

    else:

        dirname = dir.rsplit("/", 1)[1]
        
        insert = f""" 
global path_{dirname}, value_{dirname}, intvar_{dirname}

path_{dirname} = "{dir}"
value_{dirname} = ["FALSE"]

def change_value_{dirname}():
    global path_{dirname}, value_{dirname}, intvar_{dirname}
    
    print("{dirname}")
    if value_{dirname}[-1] == "FALSE":
        print("{dirname} -> TRUE")
        print(value_{dirname})
        value_{dirname}.append("TRUE")
        print(value_{dirname})

    elif value_{dirname}[-1] == "TRUE":
        print("{dirname} -> FALSE")
        print(value_{dirname})
        value_{dirname}.append("FALSE")
        print(value_{dirname})


intvar_{dirname} = IntVar()
Checkbutton(root, text="{dirname}", variable=intvar_{dirname}, command=change_value_{dirname}, pady=-1, padx=-1).grid(column=1, row={num})

    """
        txt.append(insert)
        num  += 1

# for txtt in txt:
#     for combi in new_selects:
#         tx = txtt
#         tx = tx.rsplit("FROM", 1)
#         tx = tx + combi
#         txt.append(tx)



lst = []
lst1 = []
for dir in dirs:
    dirname = dir.rsplit("/", 1)[1]
    names.append(f"value_{dirname}")
    dirss.append(dir)

print(names)
print()
print(lst1)

struct_start  = '''
from tkinterdnd2 import *
from tkinter import filedialog, ttk
from tkinter.ttk import *
from datetime import datetime
import tkinter
from tkinter import *

root = TkinterDnD.Tk()
root.title('menu')
root.geometry("1000x300")

'''
struct_end2 = f'''
values = {names}
values_path = {dirss}'''
struct_end = '''

values = [value_entreprise_name, value_entreprise_id_name_year, value_entreprise_name_CEO_year, value_entreprise_name_CEO, value_entreprise_id, value_entreprise_id_CEO, value_entreprise_id_name_CEO, value_entreprise_year, value_entreprise_name_year, value_entreprise_CEO_year, value_entreprise_id_name, value_entreprise_id_CEO_year, value_entreprise_CEO, value_entreprise_id_year, value_tuteur_house_id_year, value_tuteur_house_id, value_tuteur_house_year, value_tuteur_house_house_id, value_tuteur_house_tuteur_id, value_interval_start, value_interval_end, value_interval_id_end, value_interval_id, value_interval_start_end, value_interval_id_start, value_interval_id_start_end, value_class_id_name_year, value_class_id_name, value_class_house_id, value_class_name, value_class_id_year, value_class_id, value_class_year, value_class_house_id_year, value_class_id_house_id, value_class_name_year, value_class_name_house_id, value_timetable_year, value_timetable_day, value_timetable_id_year, value_timetable_interval_day, value_timetable_interval, value_timetable_id_interval, value_timetable_interval_day_year, value_timetable_id_interval_year, value_timetable_interval_year, value_timetable_id, value_timetable_id_day_year, value_timetable_id_interval_day, value_timetable_day_year, value_timetable_id_day, value_house_staff_id, value_house_staff_id_year, value_house_staff_function, value_house_staff_staff_id, value_house_staff_function_year, value_house_staff_year, value_house_staff_house_id, value_house_staff_id_function, value_house_name, value_house_name_house_number, value_house_house_number, value_house_id, value_house_id_name_year, value_house_year, value_house_name_year, value_house_id_name, value_house_id_house_number, value_house_house_number_year, value_house_id_year, value_room_id_name, value_room_id_name_entreprise, value_room_entreprise_year, value_room_id_name_year, value_room_id_year, value_room_name_entreprise_year, value_room_id_entreprise, value_room_entreprise, value_room_id, value_room_year, value_room_name, value_room_name_entreprise, value_room_id_entreprise_year, value_room_name_year, value_year_id, value_year_year_end, value_year_year_start, value_year_id_year_end, value_year_id_year_start, value_days_id_name, value_days_id, value_days_name, value_tuteur_year, value_tuteur_first_name, value_tuteur_entreprise, value_tuteur_first_name_year, value_tuteur_id_house_year, value_tuteur_second_name_entreprise, value_tuteur_first_name_house, value_tuteur_id_entreprise, value_tuteur_house_entreprise_year, value_tuteur_house_year, value_tuteur_first_name_entreprise, value_tuteur_second_name_house, value_tuteur_id_year, value_tuteur_id_first_name, value_tuteur_second_name, value_tuteur_id_house, value_tuteur_house_entreprise, value_tuteur_id_entreprise_year, value_tuteur_id_second_name, value_tuteur_id, value_tuteur_second_name_year, value_tuteur_entreprise_year, value_tuteur_id_house_entreprise, value_tuteur_house, value_entreprise_staff_id, value_entreprise_staff_post_year, value_entreprise_staff_id_year, value_entreprise_staff_post, value_entreprise_staff_id_post, value_entreprise_staff_entreprise_id, value_entreprise_staff_staff_id, value_entreprise_staff_year, value_student_iam_tuteur_id, value_student_iam_year, value_student_tuteur_id, value_student_first_name_iam, value_student_id_tuteur_id, value_student_second_name_year, value_student_id_class_id, value_student_year, value_student_iam, value_student_id_year, value_student_class_id, value_student_id_first_name, value_student_first_name_year, value_student_id, value_student_id_second_name, value_student_id_iam, value_student_second_name, value_student_first_name, value_student_tuteur_id_year, value_student_iam_class_id, value_student_class_id_year, value_student_second_name_iam, value_student_id_iam_year, value_staff_year, value_staff_id_first_name, value_staff_id, value_staff_id_year, value_staff_id_second_name, value_staff_second_name, value_staff_first_name, value_staff_second_name_year, value_staff_first_name_year, value_entreprise, value_room, value_entreprise_staff, value_interval, value_student, value_house_staff, value_student_entreprise, value_year, value_house, value_class, value_days, value_staff, value_tuteur, value_timetable, value_tuteur_house]
values_path = ['/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_name_CEO_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_name_CEO', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_CEO', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_name_CEO', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_CEO_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_CEO_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_CEO', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir/tuteur_house_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir/tuteur_house_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir/tuteur_house_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir/tuteur_house_house_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir/tuteur_house_tuteur_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_start', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_end', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_id_end', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_start_end', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_id_start', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_id_start_end', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_id_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_id_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_house_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_house_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_id_house_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_name_house_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_day', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_interval_day', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_interval', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_interval', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_interval_day_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_interval_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_interval_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_day_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_interval_day', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_day_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_day', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_function', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_staff_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_function_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_house_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_id_function', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_name_house_number', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_house_number', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_id_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_id_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_id_house_number', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_house_number_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_name_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_entreprise_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_name_entreprise_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_name_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_entreprise_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir/year_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir/year_year_end', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir/year_year_start', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir/year_id_year_end', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir/year_id_year_start', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/days_dir/days_id_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/days_dir/days_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/days_dir/days_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_first_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_first_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_house_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_second_name_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_first_name_house', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_house_entreprise_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_house_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_first_name_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_second_name_house', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_first_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_second_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_house', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_house_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_entreprise_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_second_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_second_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_entreprise_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_house_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_house', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_post_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_post', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_id_post', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_entreprise_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_staff_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_iam_tuteur_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_iam_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_tuteur_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_first_name_iam', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_tuteur_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_second_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_class_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_iam', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_class_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_first_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_first_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_second_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_iam', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_second_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_first_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_tuteur_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_iam_class_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_class_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_second_name_iam', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_iam_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_id_first_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_id_second_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_second_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_first_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_second_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_first_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_entreprise','/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/days', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house']


import subprocess

def write_to_clipboard(output):
    process = subprocess.Popen(
        'pbcopy', env={'LANG': 'en_US.UTF-8'}, stdin=subprocess.PIPE)
    process.communicate(output.encode('utf-8'))


def generate():
    result = []
    struct_begin = """<?php

  $db_host = 'sergonnelou.ddns.net';
  $db_user = 'visitor';
  $db_password = 'visitor';
  $db_db = 'schedule';

$mysqli = @new mysqli(
$db_host,
$db_user,
$db_password,
$db_db
);

if ($mysqli->connect_error) {
echo 'Errno: '.$mysqli->connect_errno;
echo '<br>';
echo 'Error: '.$mysqli->connect_error;
exit();
}"""
    struct_end  = """$mysqli->close();
?>
"""
    result_cache = []

    for count, value in enumerate(values):
        # print(value)
        if value[-1] == "TRUE":
            print("values",values_path[count])
            with open(values_path[count]) as f:
                result_cache.append(f.read())
        else:
            pass

    print(result_cache)
    result = struct_begin + " ".join(result_cache) + struct_end
    print(result)
    write_to_clipboard(result)



ttk.Button(root, text="Generate php filler", command=generate).grid(column=1, row=16)

root.mainloop()

'''
struct_end = struct_end2 + struct_end
print(len(txt)+len(txt2))
with open("/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/generate-php.py", "w") as f:
    f.write(struct_start)
    
    for x in txt:
        f.write(x)
    for x2 in txt2:
        f.write(x2)
        # print(x2)

    f.write(struct_end)