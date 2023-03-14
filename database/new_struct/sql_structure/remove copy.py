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
    if "_" in dir:
        os.remove(dir)