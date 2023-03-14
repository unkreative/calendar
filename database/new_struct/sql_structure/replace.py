import os

import sys, os, re

def list_full_paths(directory):
    return [os.path.join(directory, file) for file in os.listdir(directory)]

excluded_files = ['/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/replace.py'] 
# dirs = os.listdir("/Users/lousergonne/Documents/GitHub/calendar/database/queries/sql_new_structure")
dirs = list_full_paths("/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert")

def remove_items(source_list, items_to_remove):
    for item in items_to_remove:
        while item in source_list:
            source_list.remove(item)

remove_items(dirs, excluded_files)

to_rep = "        "

for dir in dirs:
    with open(dir, "r") as f:
        fr = f.read()
        fr = fr.replace(to_rep, "")
        with open(dir, "w") as f1:
            f1.write(fr)

