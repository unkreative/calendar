
from tkinterdnd2 import *
from tkinter import filedialog, ttk
from tkinter.ttk import *
from datetime import datetime
import tkinter
from tkinter import *

root = TkinterDnD.Tk()
root.title('menu')
root.geometry("1000x300")

 
global path_entreprise, value_entreprise, intvar_entreprise

path_entreprise = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise"
value_entreprise = ["FALSE"]

def change_value_entreprise():
    global path_entreprise, value_entreprise, intvar_entreprise
    
    print("entreprise")
    if value_entreprise[-1] == "FALSE":
        print("entreprise -> TRUE")
        print(value_entreprise)
        value_entreprise.append("TRUE")
        print(value_entreprise)

    elif value_entreprise[-1] == "TRUE":
        print("entreprise -> FALSE")
        print(value_entreprise)
        value_entreprise.append("FALSE")
        print(value_entreprise)


intvar_entreprise = IntVar()
Checkbutton(root, text="entreprise", variable=intvar_entreprise, command=change_value_entreprise, pady=-1, padx=-1).grid(column=1, row=0)

     
global path_room, value_room, intvar_room

path_room = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room"
value_room = ["FALSE"]

def change_value_room():
    global path_room, value_room, intvar_room
    
    print("room")
    if value_room[-1] == "FALSE":
        print("room -> TRUE")
        print(value_room)
        value_room.append("TRUE")
        print(value_room)

    elif value_room[-1] == "TRUE":
        print("room -> FALSE")
        print(value_room)
        value_room.append("FALSE")
        print(value_room)


intvar_room = IntVar()
Checkbutton(root, text="room", variable=intvar_room, command=change_value_room, pady=-1, padx=-1).grid(column=1, row=1)

     
global path_entreprise_staff, value_entreprise_staff, intvar_entreprise_staff

path_entreprise_staff = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff"
value_entreprise_staff = ["FALSE"]

def change_value_entreprise_staff():
    global path_entreprise_staff, value_entreprise_staff, intvar_entreprise_staff
    
    print("entreprise_staff")
    if value_entreprise_staff[-1] == "FALSE":
        print("entreprise_staff -> TRUE")
        print(value_entreprise_staff)
        value_entreprise_staff.append("TRUE")
        print(value_entreprise_staff)

    elif value_entreprise_staff[-1] == "TRUE":
        print("entreprise_staff -> FALSE")
        print(value_entreprise_staff)
        value_entreprise_staff.append("FALSE")
        print(value_entreprise_staff)


intvar_entreprise_staff = IntVar()
Checkbutton(root, text="entreprise_staff", variable=intvar_entreprise_staff, command=change_value_entreprise_staff, pady=-1, padx=-1).grid(column=1, row=2)

     
global path_interval, value_interval, intvar_interval

path_interval = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval"
value_interval = ["FALSE"]

def change_value_interval():
    global path_interval, value_interval, intvar_interval
    
    print("interval")
    if value_interval[-1] == "FALSE":
        print("interval -> TRUE")
        print(value_interval)
        value_interval.append("TRUE")
        print(value_interval)

    elif value_interval[-1] == "TRUE":
        print("interval -> FALSE")
        print(value_interval)
        value_interval.append("FALSE")
        print(value_interval)


intvar_interval = IntVar()
Checkbutton(root, text="interval", variable=intvar_interval, command=change_value_interval, pady=-1, padx=-1).grid(column=1, row=3)

     
global path_student, value_student, intvar_student

path_student = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student"
value_student = ["FALSE"]

def change_value_student():
    global path_student, value_student, intvar_student
    
    print("student")
    if value_student[-1] == "FALSE":
        print("student -> TRUE")
        print(value_student)
        value_student.append("TRUE")
        print(value_student)

    elif value_student[-1] == "TRUE":
        print("student -> FALSE")
        print(value_student)
        value_student.append("FALSE")
        print(value_student)


intvar_student = IntVar()
Checkbutton(root, text="student", variable=intvar_student, command=change_value_student, pady=-1, padx=-1).grid(column=1, row=4)

     
global path_house_staff, value_house_staff, intvar_house_staff

path_house_staff = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff"
value_house_staff = ["FALSE"]

def change_value_house_staff():
    global path_house_staff, value_house_staff, intvar_house_staff
    
    print("house_staff")
    if value_house_staff[-1] == "FALSE":
        print("house_staff -> TRUE")
        print(value_house_staff)
        value_house_staff.append("TRUE")
        print(value_house_staff)

    elif value_house_staff[-1] == "TRUE":
        print("house_staff -> FALSE")
        print(value_house_staff)
        value_house_staff.append("FALSE")
        print(value_house_staff)


intvar_house_staff = IntVar()
Checkbutton(root, text="house_staff", variable=intvar_house_staff, command=change_value_house_staff, pady=-1, padx=-1).grid(column=1, row=5)

     
global path_student_entreprise, value_student_entreprise, intvar_student_entreprise

path_student_entreprise = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_entreprise"
value_student_entreprise = ["FALSE"]

def change_value_student_entreprise():
    global path_student_entreprise, value_student_entreprise, intvar_student_entreprise
    
    print("student_entreprise")
    if value_student_entreprise[-1] == "FALSE":
        print("student_entreprise -> TRUE")
        print(value_student_entreprise)
        value_student_entreprise.append("TRUE")
        print(value_student_entreprise)

    elif value_student_entreprise[-1] == "TRUE":
        print("student_entreprise -> FALSE")
        print(value_student_entreprise)
        value_student_entreprise.append("FALSE")
        print(value_student_entreprise)


intvar_student_entreprise = IntVar()
Checkbutton(root, text="student_entreprise", variable=intvar_student_entreprise, command=change_value_student_entreprise, pady=-1, padx=-1).grid(column=1, row=6)

     
global path_year, value_year, intvar_year

path_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year"
value_year = ["FALSE"]

def change_value_year():
    global path_year, value_year, intvar_year
    
    print("year")
    if value_year[-1] == "FALSE":
        print("year -> TRUE")
        print(value_year)
        value_year.append("TRUE")
        print(value_year)

    elif value_year[-1] == "TRUE":
        print("year -> FALSE")
        print(value_year)
        value_year.append("FALSE")
        print(value_year)


intvar_year = IntVar()
Checkbutton(root, text="year", variable=intvar_year, command=change_value_year, pady=-1, padx=-1).grid(column=1, row=7)

     
global path_house, value_house, intvar_house

path_house = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house"
value_house = ["FALSE"]

def change_value_house():
    global path_house, value_house, intvar_house
    
    print("house")
    if value_house[-1] == "FALSE":
        print("house -> TRUE")
        print(value_house)
        value_house.append("TRUE")
        print(value_house)

    elif value_house[-1] == "TRUE":
        print("house -> FALSE")
        print(value_house)
        value_house.append("FALSE")
        print(value_house)


intvar_house = IntVar()
Checkbutton(root, text="house", variable=intvar_house, command=change_value_house, pady=-1, padx=-1).grid(column=1, row=8)

     
global path_class, value_class, intvar_class

path_class = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class"
value_class = ["FALSE"]

def change_value_class():
    global path_class, value_class, intvar_class
    
    print("class")
    if value_class[-1] == "FALSE":
        print("class -> TRUE")
        print(value_class)
        value_class.append("TRUE")
        print(value_class)

    elif value_class[-1] == "TRUE":
        print("class -> FALSE")
        print(value_class)
        value_class.append("FALSE")
        print(value_class)


intvar_class = IntVar()
Checkbutton(root, text="class", variable=intvar_class, command=change_value_class, pady=-1, padx=-1).grid(column=1, row=9)

     
global path_days, value_days, intvar_days

path_days = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/days"
value_days = ["FALSE"]

def change_value_days():
    global path_days, value_days, intvar_days
    
    print("days")
    if value_days[-1] == "FALSE":
        print("days -> TRUE")
        print(value_days)
        value_days.append("TRUE")
        print(value_days)

    elif value_days[-1] == "TRUE":
        print("days -> FALSE")
        print(value_days)
        value_days.append("FALSE")
        print(value_days)


intvar_days = IntVar()
Checkbutton(root, text="days", variable=intvar_days, command=change_value_days, pady=-1, padx=-1).grid(column=1, row=10)

     
global path_staff, value_staff, intvar_staff

path_staff = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff"
value_staff = ["FALSE"]

def change_value_staff():
    global path_staff, value_staff, intvar_staff
    
    print("staff")
    if value_staff[-1] == "FALSE":
        print("staff -> TRUE")
        print(value_staff)
        value_staff.append("TRUE")
        print(value_staff)

    elif value_staff[-1] == "TRUE":
        print("staff -> FALSE")
        print(value_staff)
        value_staff.append("FALSE")
        print(value_staff)


intvar_staff = IntVar()
Checkbutton(root, text="staff", variable=intvar_staff, command=change_value_staff, pady=-1, padx=-1).grid(column=1, row=11)

     
global path_tuteur, value_tuteur, intvar_tuteur

path_tuteur = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur"
value_tuteur = ["FALSE"]

def change_value_tuteur():
    global path_tuteur, value_tuteur, intvar_tuteur
    
    print("tuteur")
    if value_tuteur[-1] == "FALSE":
        print("tuteur -> TRUE")
        print(value_tuteur)
        value_tuteur.append("TRUE")
        print(value_tuteur)

    elif value_tuteur[-1] == "TRUE":
        print("tuteur -> FALSE")
        print(value_tuteur)
        value_tuteur.append("FALSE")
        print(value_tuteur)


intvar_tuteur = IntVar()
Checkbutton(root, text="tuteur", variable=intvar_tuteur, command=change_value_tuteur, pady=-1, padx=-1).grid(column=1, row=12)

     
global path_timetable, value_timetable, intvar_timetable

path_timetable = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable"
value_timetable = ["FALSE"]

def change_value_timetable():
    global path_timetable, value_timetable, intvar_timetable
    
    print("timetable")
    if value_timetable[-1] == "FALSE":
        print("timetable -> TRUE")
        print(value_timetable)
        value_timetable.append("TRUE")
        print(value_timetable)

    elif value_timetable[-1] == "TRUE":
        print("timetable -> FALSE")
        print(value_timetable)
        value_timetable.append("FALSE")
        print(value_timetable)


intvar_timetable = IntVar()
Checkbutton(root, text="timetable", variable=intvar_timetable, command=change_value_timetable, pady=-1, padx=-1).grid(column=1, row=13)

     
global path_tuteur_house, value_tuteur_house, intvar_tuteur_house

path_tuteur_house = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house"
value_tuteur_house = ["FALSE"]

def change_value_tuteur_house():
    global path_tuteur_house, value_tuteur_house, intvar_tuteur_house
    
    print("tuteur_house")
    if value_tuteur_house[-1] == "FALSE":
        print("tuteur_house -> TRUE")
        print(value_tuteur_house)
        value_tuteur_house.append("TRUE")
        print(value_tuteur_house)

    elif value_tuteur_house[-1] == "TRUE":
        print("tuteur_house -> FALSE")
        print(value_tuteur_house)
        value_tuteur_house.append("FALSE")
        print(value_tuteur_house)


intvar_tuteur_house = IntVar()
Checkbutton(root, text="tuteur_house", variable=intvar_tuteur_house, command=change_value_tuteur_house, pady=-1, padx=-1).grid(column=1, row=14)

     
# global path_entreprise_name, value_entreprise_name, intvar_entreprise_name

path_entreprise_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_name"
value_entreprise_name = ["FALSE"]

def change_value_entreprise_name():
    global path_entreprise_name, value_entreprise_name#, intvar_entreprise_name
    print("entreprise_name")
    if value_entreprise_name[-1] == "FALSE":
        print("entreprise_name -> TRUE")
        print(value_entreprise_name)
        value_entreprise_name.append("TRUE")
        print(value_entreprise_name)

    elif value_entreprise_name[-1] == "TRUE":
        print("entreprise_name -> FALSE")
        print(value_entreprise_name)
        value_entreprise_name.append("FALSE")
        print(value_entreprise_name)

intvar_entreprise_name = IntVar()
Checkbutton(root, text="entreprise_name", variable=intvar_entreprise_name, command=change_value_entreprise_name, pady=-1, padx=-1).grid(column=2, row=0)

     
# global path_entreprise_id_name_year, value_entreprise_id_name_year, intvar_entreprise_id_name_year

path_entreprise_id_name_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_name_year"
value_entreprise_id_name_year = ["FALSE"]

def change_value_entreprise_id_name_year():
    global path_entreprise_id_name_year, value_entreprise_id_name_year#, intvar_entreprise_id_name_year
    print("entreprise_id_name_year")
    if value_entreprise_id_name_year[-1] == "FALSE":
        print("entreprise_id_name_year -> TRUE")
        print(value_entreprise_id_name_year)
        value_entreprise_id_name_year.append("TRUE")
        print(value_entreprise_id_name_year)

    elif value_entreprise_id_name_year[-1] == "TRUE":
        print("entreprise_id_name_year -> FALSE")
        print(value_entreprise_id_name_year)
        value_entreprise_id_name_year.append("FALSE")
        print(value_entreprise_id_name_year)

intvar_entreprise_id_name_year = IntVar()
Checkbutton(root, text="entreprise_id_name_year", variable=intvar_entreprise_id_name_year, command=change_value_entreprise_id_name_year, pady=-1, padx=-1).grid(column=2, row=1)

     
# global path_entreprise_name_CEO_year, value_entreprise_name_CEO_year, intvar_entreprise_name_CEO_year

path_entreprise_name_CEO_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_name_CEO_year"
value_entreprise_name_CEO_year = ["FALSE"]

def change_value_entreprise_name_CEO_year():
    global path_entreprise_name_CEO_year, value_entreprise_name_CEO_year#, intvar_entreprise_name_CEO_year
    print("entreprise_name_CEO_year")
    if value_entreprise_name_CEO_year[-1] == "FALSE":
        print("entreprise_name_CEO_year -> TRUE")
        print(value_entreprise_name_CEO_year)
        value_entreprise_name_CEO_year.append("TRUE")
        print(value_entreprise_name_CEO_year)

    elif value_entreprise_name_CEO_year[-1] == "TRUE":
        print("entreprise_name_CEO_year -> FALSE")
        print(value_entreprise_name_CEO_year)
        value_entreprise_name_CEO_year.append("FALSE")
        print(value_entreprise_name_CEO_year)

intvar_entreprise_name_CEO_year = IntVar()
Checkbutton(root, text="entreprise_name_CEO_year", variable=intvar_entreprise_name_CEO_year, command=change_value_entreprise_name_CEO_year, pady=-1, padx=-1).grid(column=2, row=2)

     
# global path_entreprise_name_CEO, value_entreprise_name_CEO, intvar_entreprise_name_CEO

path_entreprise_name_CEO = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_name_CEO"
value_entreprise_name_CEO = ["FALSE"]

def change_value_entreprise_name_CEO():
    global path_entreprise_name_CEO, value_entreprise_name_CEO#, intvar_entreprise_name_CEO
    print("entreprise_name_CEO")
    if value_entreprise_name_CEO[-1] == "FALSE":
        print("entreprise_name_CEO -> TRUE")
        print(value_entreprise_name_CEO)
        value_entreprise_name_CEO.append("TRUE")
        print(value_entreprise_name_CEO)

    elif value_entreprise_name_CEO[-1] == "TRUE":
        print("entreprise_name_CEO -> FALSE")
        print(value_entreprise_name_CEO)
        value_entreprise_name_CEO.append("FALSE")
        print(value_entreprise_name_CEO)

intvar_entreprise_name_CEO = IntVar()
Checkbutton(root, text="entreprise_name_CEO", variable=intvar_entreprise_name_CEO, command=change_value_entreprise_name_CEO, pady=-1, padx=-1).grid(column=2, row=3)

     
# global path_entreprise_id, value_entreprise_id, intvar_entreprise_id

path_entreprise_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id"
value_entreprise_id = ["FALSE"]

def change_value_entreprise_id():
    global path_entreprise_id, value_entreprise_id#, intvar_entreprise_id
    print("entreprise_id")
    if value_entreprise_id[-1] == "FALSE":
        print("entreprise_id -> TRUE")
        print(value_entreprise_id)
        value_entreprise_id.append("TRUE")
        print(value_entreprise_id)

    elif value_entreprise_id[-1] == "TRUE":
        print("entreprise_id -> FALSE")
        print(value_entreprise_id)
        value_entreprise_id.append("FALSE")
        print(value_entreprise_id)

intvar_entreprise_id = IntVar()
Checkbutton(root, text="entreprise_id", variable=intvar_entreprise_id, command=change_value_entreprise_id, pady=-1, padx=-1).grid(column=2, row=4)

     
# global path_entreprise_id_CEO, value_entreprise_id_CEO, intvar_entreprise_id_CEO

path_entreprise_id_CEO = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_CEO"
value_entreprise_id_CEO = ["FALSE"]

def change_value_entreprise_id_CEO():
    global path_entreprise_id_CEO, value_entreprise_id_CEO#, intvar_entreprise_id_CEO
    print("entreprise_id_CEO")
    if value_entreprise_id_CEO[-1] == "FALSE":
        print("entreprise_id_CEO -> TRUE")
        print(value_entreprise_id_CEO)
        value_entreprise_id_CEO.append("TRUE")
        print(value_entreprise_id_CEO)

    elif value_entreprise_id_CEO[-1] == "TRUE":
        print("entreprise_id_CEO -> FALSE")
        print(value_entreprise_id_CEO)
        value_entreprise_id_CEO.append("FALSE")
        print(value_entreprise_id_CEO)

intvar_entreprise_id_CEO = IntVar()
Checkbutton(root, text="entreprise_id_CEO", variable=intvar_entreprise_id_CEO, command=change_value_entreprise_id_CEO, pady=-1, padx=-1).grid(column=2, row=5)

     
# global path_entreprise_id_name_CEO, value_entreprise_id_name_CEO, intvar_entreprise_id_name_CEO

path_entreprise_id_name_CEO = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_name_CEO"
value_entreprise_id_name_CEO = ["FALSE"]

def change_value_entreprise_id_name_CEO():
    global path_entreprise_id_name_CEO, value_entreprise_id_name_CEO#, intvar_entreprise_id_name_CEO
    print("entreprise_id_name_CEO")
    if value_entreprise_id_name_CEO[-1] == "FALSE":
        print("entreprise_id_name_CEO -> TRUE")
        print(value_entreprise_id_name_CEO)
        value_entreprise_id_name_CEO.append("TRUE")
        print(value_entreprise_id_name_CEO)

    elif value_entreprise_id_name_CEO[-1] == "TRUE":
        print("entreprise_id_name_CEO -> FALSE")
        print(value_entreprise_id_name_CEO)
        value_entreprise_id_name_CEO.append("FALSE")
        print(value_entreprise_id_name_CEO)

intvar_entreprise_id_name_CEO = IntVar()
Checkbutton(root, text="entreprise_id_name_CEO", variable=intvar_entreprise_id_name_CEO, command=change_value_entreprise_id_name_CEO, pady=-1, padx=-1).grid(column=2, row=6)

     
# global path_entreprise_year, value_entreprise_year, intvar_entreprise_year

path_entreprise_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_year"
value_entreprise_year = ["FALSE"]

def change_value_entreprise_year():
    global path_entreprise_year, value_entreprise_year#, intvar_entreprise_year
    print("entreprise_year")
    if value_entreprise_year[-1] == "FALSE":
        print("entreprise_year -> TRUE")
        print(value_entreprise_year)
        value_entreprise_year.append("TRUE")
        print(value_entreprise_year)

    elif value_entreprise_year[-1] == "TRUE":
        print("entreprise_year -> FALSE")
        print(value_entreprise_year)
        value_entreprise_year.append("FALSE")
        print(value_entreprise_year)

intvar_entreprise_year = IntVar()
Checkbutton(root, text="entreprise_year", variable=intvar_entreprise_year, command=change_value_entreprise_year, pady=-1, padx=-1).grid(column=2, row=7)

     
# global path_entreprise_name_year, value_entreprise_name_year, intvar_entreprise_name_year

path_entreprise_name_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_name_year"
value_entreprise_name_year = ["FALSE"]

def change_value_entreprise_name_year():
    global path_entreprise_name_year, value_entreprise_name_year#, intvar_entreprise_name_year
    print("entreprise_name_year")
    if value_entreprise_name_year[-1] == "FALSE":
        print("entreprise_name_year -> TRUE")
        print(value_entreprise_name_year)
        value_entreprise_name_year.append("TRUE")
        print(value_entreprise_name_year)

    elif value_entreprise_name_year[-1] == "TRUE":
        print("entreprise_name_year -> FALSE")
        print(value_entreprise_name_year)
        value_entreprise_name_year.append("FALSE")
        print(value_entreprise_name_year)

intvar_entreprise_name_year = IntVar()
Checkbutton(root, text="entreprise_name_year", variable=intvar_entreprise_name_year, command=change_value_entreprise_name_year, pady=-1, padx=-1).grid(column=2, row=8)

     
# global path_entreprise_CEO_year, value_entreprise_CEO_year, intvar_entreprise_CEO_year

path_entreprise_CEO_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_CEO_year"
value_entreprise_CEO_year = ["FALSE"]

def change_value_entreprise_CEO_year():
    global path_entreprise_CEO_year, value_entreprise_CEO_year#, intvar_entreprise_CEO_year
    print("entreprise_CEO_year")
    if value_entreprise_CEO_year[-1] == "FALSE":
        print("entreprise_CEO_year -> TRUE")
        print(value_entreprise_CEO_year)
        value_entreprise_CEO_year.append("TRUE")
        print(value_entreprise_CEO_year)

    elif value_entreprise_CEO_year[-1] == "TRUE":
        print("entreprise_CEO_year -> FALSE")
        print(value_entreprise_CEO_year)
        value_entreprise_CEO_year.append("FALSE")
        print(value_entreprise_CEO_year)

intvar_entreprise_CEO_year = IntVar()
Checkbutton(root, text="entreprise_CEO_year", variable=intvar_entreprise_CEO_year, command=change_value_entreprise_CEO_year, pady=-1, padx=-1).grid(column=2, row=9)

     
# global path_entreprise_id_name, value_entreprise_id_name, intvar_entreprise_id_name

path_entreprise_id_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_name"
value_entreprise_id_name = ["FALSE"]

def change_value_entreprise_id_name():
    global path_entreprise_id_name, value_entreprise_id_name#, intvar_entreprise_id_name
    print("entreprise_id_name")
    if value_entreprise_id_name[-1] == "FALSE":
        print("entreprise_id_name -> TRUE")
        print(value_entreprise_id_name)
        value_entreprise_id_name.append("TRUE")
        print(value_entreprise_id_name)

    elif value_entreprise_id_name[-1] == "TRUE":
        print("entreprise_id_name -> FALSE")
        print(value_entreprise_id_name)
        value_entreprise_id_name.append("FALSE")
        print(value_entreprise_id_name)

intvar_entreprise_id_name = IntVar()
Checkbutton(root, text="entreprise_id_name", variable=intvar_entreprise_id_name, command=change_value_entreprise_id_name, pady=-1, padx=-1).grid(column=2, row=10)

     
# global path_entreprise_id_CEO_year, value_entreprise_id_CEO_year, intvar_entreprise_id_CEO_year

path_entreprise_id_CEO_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_CEO_year"
value_entreprise_id_CEO_year = ["FALSE"]

def change_value_entreprise_id_CEO_year():
    global path_entreprise_id_CEO_year, value_entreprise_id_CEO_year#, intvar_entreprise_id_CEO_year
    print("entreprise_id_CEO_year")
    if value_entreprise_id_CEO_year[-1] == "FALSE":
        print("entreprise_id_CEO_year -> TRUE")
        print(value_entreprise_id_CEO_year)
        value_entreprise_id_CEO_year.append("TRUE")
        print(value_entreprise_id_CEO_year)

    elif value_entreprise_id_CEO_year[-1] == "TRUE":
        print("entreprise_id_CEO_year -> FALSE")
        print(value_entreprise_id_CEO_year)
        value_entreprise_id_CEO_year.append("FALSE")
        print(value_entreprise_id_CEO_year)

intvar_entreprise_id_CEO_year = IntVar()
Checkbutton(root, text="entreprise_id_CEO_year", variable=intvar_entreprise_id_CEO_year, command=change_value_entreprise_id_CEO_year, pady=-1, padx=-1).grid(column=2, row=11)

     
# global path_entreprise_CEO, value_entreprise_CEO, intvar_entreprise_CEO

path_entreprise_CEO = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_CEO"
value_entreprise_CEO = ["FALSE"]

def change_value_entreprise_CEO():
    global path_entreprise_CEO, value_entreprise_CEO#, intvar_entreprise_CEO
    print("entreprise_CEO")
    if value_entreprise_CEO[-1] == "FALSE":
        print("entreprise_CEO -> TRUE")
        print(value_entreprise_CEO)
        value_entreprise_CEO.append("TRUE")
        print(value_entreprise_CEO)

    elif value_entreprise_CEO[-1] == "TRUE":
        print("entreprise_CEO -> FALSE")
        print(value_entreprise_CEO)
        value_entreprise_CEO.append("FALSE")
        print(value_entreprise_CEO)

intvar_entreprise_CEO = IntVar()
Checkbutton(root, text="entreprise_CEO", variable=intvar_entreprise_CEO, command=change_value_entreprise_CEO, pady=-1, padx=-1).grid(column=2, row=12)

     
# global path_entreprise_id_year, value_entreprise_id_year, intvar_entreprise_id_year

path_entreprise_id_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_year"
value_entreprise_id_year = ["FALSE"]

def change_value_entreprise_id_year():
    global path_entreprise_id_year, value_entreprise_id_year#, intvar_entreprise_id_year
    print("entreprise_id_year")
    if value_entreprise_id_year[-1] == "FALSE":
        print("entreprise_id_year -> TRUE")
        print(value_entreprise_id_year)
        value_entreprise_id_year.append("TRUE")
        print(value_entreprise_id_year)

    elif value_entreprise_id_year[-1] == "TRUE":
        print("entreprise_id_year -> FALSE")
        print(value_entreprise_id_year)
        value_entreprise_id_year.append("FALSE")
        print(value_entreprise_id_year)

intvar_entreprise_id_year = IntVar()
Checkbutton(root, text="entreprise_id_year", variable=intvar_entreprise_id_year, command=change_value_entreprise_id_year, pady=-1, padx=-1).grid(column=2, row=13)

     
# global path_tuteur_house_id_year, value_tuteur_house_id_year, intvar_tuteur_house_id_year

path_tuteur_house_id_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir/tuteur_house_id_year"
value_tuteur_house_id_year = ["FALSE"]

def change_value_tuteur_house_id_year():
    global path_tuteur_house_id_year, value_tuteur_house_id_year#, intvar_tuteur_house_id_year
    print("tuteur_house_id_year")
    if value_tuteur_house_id_year[-1] == "FALSE":
        print("tuteur_house_id_year -> TRUE")
        print(value_tuteur_house_id_year)
        value_tuteur_house_id_year.append("TRUE")
        print(value_tuteur_house_id_year)

    elif value_tuteur_house_id_year[-1] == "TRUE":
        print("tuteur_house_id_year -> FALSE")
        print(value_tuteur_house_id_year)
        value_tuteur_house_id_year.append("FALSE")
        print(value_tuteur_house_id_year)

intvar_tuteur_house_id_year = IntVar()
Checkbutton(root, text="tuteur_house_id_year", variable=intvar_tuteur_house_id_year, command=change_value_tuteur_house_id_year, pady=-1, padx=-1).grid(column=2, row=14)

     
# global path_tuteur_house_id, value_tuteur_house_id, intvar_tuteur_house_id

path_tuteur_house_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir/tuteur_house_id"
value_tuteur_house_id = ["FALSE"]

def change_value_tuteur_house_id():
    global path_tuteur_house_id, value_tuteur_house_id#, intvar_tuteur_house_id
    print("tuteur_house_id")
    if value_tuteur_house_id[-1] == "FALSE":
        print("tuteur_house_id -> TRUE")
        print(value_tuteur_house_id)
        value_tuteur_house_id.append("TRUE")
        print(value_tuteur_house_id)

    elif value_tuteur_house_id[-1] == "TRUE":
        print("tuteur_house_id -> FALSE")
        print(value_tuteur_house_id)
        value_tuteur_house_id.append("FALSE")
        print(value_tuteur_house_id)

intvar_tuteur_house_id = IntVar()
Checkbutton(root, text="tuteur_house_id", variable=intvar_tuteur_house_id, command=change_value_tuteur_house_id, pady=-1, padx=-1).grid(column=2, row=15)

     
# global path_tuteur_house_year, value_tuteur_house_year, intvar_tuteur_house_year

path_tuteur_house_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir/tuteur_house_year"
value_tuteur_house_year = ["FALSE"]

def change_value_tuteur_house_year():
    global path_tuteur_house_year, value_tuteur_house_year#, intvar_tuteur_house_year
    print("tuteur_house_year")
    if value_tuteur_house_year[-1] == "FALSE":
        print("tuteur_house_year -> TRUE")
        print(value_tuteur_house_year)
        value_tuteur_house_year.append("TRUE")
        print(value_tuteur_house_year)

    elif value_tuteur_house_year[-1] == "TRUE":
        print("tuteur_house_year -> FALSE")
        print(value_tuteur_house_year)
        value_tuteur_house_year.append("FALSE")
        print(value_tuteur_house_year)

intvar_tuteur_house_year = IntVar()
Checkbutton(root, text="tuteur_house_year", variable=intvar_tuteur_house_year, command=change_value_tuteur_house_year, pady=-1, padx=-1).grid(column=2, row=16)

     
# global path_tuteur_house_house_id, value_tuteur_house_house_id, intvar_tuteur_house_house_id

path_tuteur_house_house_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir/tuteur_house_house_id"
value_tuteur_house_house_id = ["FALSE"]

def change_value_tuteur_house_house_id():
    global path_tuteur_house_house_id, value_tuteur_house_house_id#, intvar_tuteur_house_house_id
    print("tuteur_house_house_id")
    if value_tuteur_house_house_id[-1] == "FALSE":
        print("tuteur_house_house_id -> TRUE")
        print(value_tuteur_house_house_id)
        value_tuteur_house_house_id.append("TRUE")
        print(value_tuteur_house_house_id)

    elif value_tuteur_house_house_id[-1] == "TRUE":
        print("tuteur_house_house_id -> FALSE")
        print(value_tuteur_house_house_id)
        value_tuteur_house_house_id.append("FALSE")
        print(value_tuteur_house_house_id)

intvar_tuteur_house_house_id = IntVar()
Checkbutton(root, text="tuteur_house_house_id", variable=intvar_tuteur_house_house_id, command=change_value_tuteur_house_house_id, pady=-1, padx=-1).grid(column=2, row=17)

     
# global path_tuteur_house_tuteur_id, value_tuteur_house_tuteur_id, intvar_tuteur_house_tuteur_id

path_tuteur_house_tuteur_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir/tuteur_house_tuteur_id"
value_tuteur_house_tuteur_id = ["FALSE"]

def change_value_tuteur_house_tuteur_id():
    global path_tuteur_house_tuteur_id, value_tuteur_house_tuteur_id#, intvar_tuteur_house_tuteur_id
    print("tuteur_house_tuteur_id")
    if value_tuteur_house_tuteur_id[-1] == "FALSE":
        print("tuteur_house_tuteur_id -> TRUE")
        print(value_tuteur_house_tuteur_id)
        value_tuteur_house_tuteur_id.append("TRUE")
        print(value_tuteur_house_tuteur_id)

    elif value_tuteur_house_tuteur_id[-1] == "TRUE":
        print("tuteur_house_tuteur_id -> FALSE")
        print(value_tuteur_house_tuteur_id)
        value_tuteur_house_tuteur_id.append("FALSE")
        print(value_tuteur_house_tuteur_id)

intvar_tuteur_house_tuteur_id = IntVar()
Checkbutton(root, text="tuteur_house_tuteur_id", variable=intvar_tuteur_house_tuteur_id, command=change_value_tuteur_house_tuteur_id, pady=-1, padx=-1).grid(column=2, row=18)

     
# global path_interval_start, value_interval_start, intvar_interval_start

path_interval_start = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_start"
value_interval_start = ["FALSE"]

def change_value_interval_start():
    global path_interval_start, value_interval_start#, intvar_interval_start
    print("interval_start")
    if value_interval_start[-1] == "FALSE":
        print("interval_start -> TRUE")
        print(value_interval_start)
        value_interval_start.append("TRUE")
        print(value_interval_start)

    elif value_interval_start[-1] == "TRUE":
        print("interval_start -> FALSE")
        print(value_interval_start)
        value_interval_start.append("FALSE")
        print(value_interval_start)

intvar_interval_start = IntVar()
Checkbutton(root, text="interval_start", variable=intvar_interval_start, command=change_value_interval_start, pady=-1, padx=-1).grid(column=2, row=19)

     
# global path_interval_end, value_interval_end, intvar_interval_end

path_interval_end = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_end"
value_interval_end = ["FALSE"]

def change_value_interval_end():
    global path_interval_end, value_interval_end#, intvar_interval_end
    print("interval_end")
    if value_interval_end[-1] == "FALSE":
        print("interval_end -> TRUE")
        print(value_interval_end)
        value_interval_end.append("TRUE")
        print(value_interval_end)

    elif value_interval_end[-1] == "TRUE":
        print("interval_end -> FALSE")
        print(value_interval_end)
        value_interval_end.append("FALSE")
        print(value_interval_end)

intvar_interval_end = IntVar()
Checkbutton(root, text="interval_end", variable=intvar_interval_end, command=change_value_interval_end, pady=-1, padx=-1).grid(column=2, row=20)

     
# global path_interval_id_end, value_interval_id_end, intvar_interval_id_end

path_interval_id_end = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_id_end"
value_interval_id_end = ["FALSE"]

def change_value_interval_id_end():
    global path_interval_id_end, value_interval_id_end#, intvar_interval_id_end
    print("interval_id_end")
    if value_interval_id_end[-1] == "FALSE":
        print("interval_id_end -> TRUE")
        print(value_interval_id_end)
        value_interval_id_end.append("TRUE")
        print(value_interval_id_end)

    elif value_interval_id_end[-1] == "TRUE":
        print("interval_id_end -> FALSE")
        print(value_interval_id_end)
        value_interval_id_end.append("FALSE")
        print(value_interval_id_end)

intvar_interval_id_end = IntVar()
Checkbutton(root, text="interval_id_end", variable=intvar_interval_id_end, command=change_value_interval_id_end, pady=-1, padx=-1).grid(column=2, row=21)

     
# global path_interval_id, value_interval_id, intvar_interval_id

path_interval_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_id"
value_interval_id = ["FALSE"]

def change_value_interval_id():
    global path_interval_id, value_interval_id#, intvar_interval_id
    print("interval_id")
    if value_interval_id[-1] == "FALSE":
        print("interval_id -> TRUE")
        print(value_interval_id)
        value_interval_id.append("TRUE")
        print(value_interval_id)

    elif value_interval_id[-1] == "TRUE":
        print("interval_id -> FALSE")
        print(value_interval_id)
        value_interval_id.append("FALSE")
        print(value_interval_id)

intvar_interval_id = IntVar()
Checkbutton(root, text="interval_id", variable=intvar_interval_id, command=change_value_interval_id, pady=-1, padx=-1).grid(column=2, row=22)

     
# global path_interval_start_end, value_interval_start_end, intvar_interval_start_end

path_interval_start_end = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_start_end"
value_interval_start_end = ["FALSE"]

def change_value_interval_start_end():
    global path_interval_start_end, value_interval_start_end#, intvar_interval_start_end
    print("interval_start_end")
    if value_interval_start_end[-1] == "FALSE":
        print("interval_start_end -> TRUE")
        print(value_interval_start_end)
        value_interval_start_end.append("TRUE")
        print(value_interval_start_end)

    elif value_interval_start_end[-1] == "TRUE":
        print("interval_start_end -> FALSE")
        print(value_interval_start_end)
        value_interval_start_end.append("FALSE")
        print(value_interval_start_end)

intvar_interval_start_end = IntVar()
Checkbutton(root, text="interval_start_end", variable=intvar_interval_start_end, command=change_value_interval_start_end, pady=-1, padx=-1).grid(column=2, row=23)

     
# global path_interval_id_start, value_interval_id_start, intvar_interval_id_start

path_interval_id_start = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_id_start"
value_interval_id_start = ["FALSE"]

def change_value_interval_id_start():
    global path_interval_id_start, value_interval_id_start#, intvar_interval_id_start
    print("interval_id_start")
    if value_interval_id_start[-1] == "FALSE":
        print("interval_id_start -> TRUE")
        print(value_interval_id_start)
        value_interval_id_start.append("TRUE")
        print(value_interval_id_start)

    elif value_interval_id_start[-1] == "TRUE":
        print("interval_id_start -> FALSE")
        print(value_interval_id_start)
        value_interval_id_start.append("FALSE")
        print(value_interval_id_start)

intvar_interval_id_start = IntVar()
Checkbutton(root, text="interval_id_start", variable=intvar_interval_id_start, command=change_value_interval_id_start, pady=-1, padx=-1).grid(column=2, row=24)

     
# global path_interval_id_start_end, value_interval_id_start_end, intvar_interval_id_start_end

path_interval_id_start_end = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_id_start_end"
value_interval_id_start_end = ["FALSE"]

def change_value_interval_id_start_end():
    global path_interval_id_start_end, value_interval_id_start_end#, intvar_interval_id_start_end
    print("interval_id_start_end")
    if value_interval_id_start_end[-1] == "FALSE":
        print("interval_id_start_end -> TRUE")
        print(value_interval_id_start_end)
        value_interval_id_start_end.append("TRUE")
        print(value_interval_id_start_end)

    elif value_interval_id_start_end[-1] == "TRUE":
        print("interval_id_start_end -> FALSE")
        print(value_interval_id_start_end)
        value_interval_id_start_end.append("FALSE")
        print(value_interval_id_start_end)

intvar_interval_id_start_end = IntVar()
Checkbutton(root, text="interval_id_start_end", variable=intvar_interval_id_start_end, command=change_value_interval_id_start_end, pady=-1, padx=-1).grid(column=2, row=25)

     
# global path_class_id_name_year, value_class_id_name_year, intvar_class_id_name_year

path_class_id_name_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_id_name_year"
value_class_id_name_year = ["FALSE"]

def change_value_class_id_name_year():
    global path_class_id_name_year, value_class_id_name_year#, intvar_class_id_name_year
    print("class_id_name_year")
    if value_class_id_name_year[-1] == "FALSE":
        print("class_id_name_year -> TRUE")
        print(value_class_id_name_year)
        value_class_id_name_year.append("TRUE")
        print(value_class_id_name_year)

    elif value_class_id_name_year[-1] == "TRUE":
        print("class_id_name_year -> FALSE")
        print(value_class_id_name_year)
        value_class_id_name_year.append("FALSE")
        print(value_class_id_name_year)

intvar_class_id_name_year = IntVar()
Checkbutton(root, text="class_id_name_year", variable=intvar_class_id_name_year, command=change_value_class_id_name_year, pady=-1, padx=-1).grid(column=2, row=26)

     
# global path_class_id_name, value_class_id_name, intvar_class_id_name

path_class_id_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_id_name"
value_class_id_name = ["FALSE"]

def change_value_class_id_name():
    global path_class_id_name, value_class_id_name#, intvar_class_id_name
    print("class_id_name")
    if value_class_id_name[-1] == "FALSE":
        print("class_id_name -> TRUE")
        print(value_class_id_name)
        value_class_id_name.append("TRUE")
        print(value_class_id_name)

    elif value_class_id_name[-1] == "TRUE":
        print("class_id_name -> FALSE")
        print(value_class_id_name)
        value_class_id_name.append("FALSE")
        print(value_class_id_name)

intvar_class_id_name = IntVar()
Checkbutton(root, text="class_id_name", variable=intvar_class_id_name, command=change_value_class_id_name, pady=-1, padx=-1).grid(column=2, row=27)

     
# global path_class_house_id, value_class_house_id, intvar_class_house_id

path_class_house_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_house_id"
value_class_house_id = ["FALSE"]

def change_value_class_house_id():
    global path_class_house_id, value_class_house_id#, intvar_class_house_id
    print("class_house_id")
    if value_class_house_id[-1] == "FALSE":
        print("class_house_id -> TRUE")
        print(value_class_house_id)
        value_class_house_id.append("TRUE")
        print(value_class_house_id)

    elif value_class_house_id[-1] == "TRUE":
        print("class_house_id -> FALSE")
        print(value_class_house_id)
        value_class_house_id.append("FALSE")
        print(value_class_house_id)

intvar_class_house_id = IntVar()
Checkbutton(root, text="class_house_id", variable=intvar_class_house_id, command=change_value_class_house_id, pady=-1, padx=-1).grid(column=2, row=28)

     
# global path_class_name, value_class_name, intvar_class_name

path_class_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_name"
value_class_name = ["FALSE"]

def change_value_class_name():
    global path_class_name, value_class_name#, intvar_class_name
    print("class_name")
    if value_class_name[-1] == "FALSE":
        print("class_name -> TRUE")
        print(value_class_name)
        value_class_name.append("TRUE")
        print(value_class_name)

    elif value_class_name[-1] == "TRUE":
        print("class_name -> FALSE")
        print(value_class_name)
        value_class_name.append("FALSE")
        print(value_class_name)

intvar_class_name = IntVar()
Checkbutton(root, text="class_name", variable=intvar_class_name, command=change_value_class_name, pady=-1, padx=-1).grid(column=2, row=29)

     
# global path_class_id_year, value_class_id_year, intvar_class_id_year

path_class_id_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_id_year"
value_class_id_year = ["FALSE"]

def change_value_class_id_year():
    global path_class_id_year, value_class_id_year#, intvar_class_id_year
    print("class_id_year")
    if value_class_id_year[-1] == "FALSE":
        print("class_id_year -> TRUE")
        print(value_class_id_year)
        value_class_id_year.append("TRUE")
        print(value_class_id_year)

    elif value_class_id_year[-1] == "TRUE":
        print("class_id_year -> FALSE")
        print(value_class_id_year)
        value_class_id_year.append("FALSE")
        print(value_class_id_year)

intvar_class_id_year = IntVar()
Checkbutton(root, text="class_id_year", variable=intvar_class_id_year, command=change_value_class_id_year, pady=-1, padx=-1).grid(column=2, row=30)

     
# global path_class_id, value_class_id, intvar_class_id

path_class_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_id"
value_class_id = ["FALSE"]

def change_value_class_id():
    global path_class_id, value_class_id#, intvar_class_id
    print("class_id")
    if value_class_id[-1] == "FALSE":
        print("class_id -> TRUE")
        print(value_class_id)
        value_class_id.append("TRUE")
        print(value_class_id)

    elif value_class_id[-1] == "TRUE":
        print("class_id -> FALSE")
        print(value_class_id)
        value_class_id.append("FALSE")
        print(value_class_id)

intvar_class_id = IntVar()
Checkbutton(root, text="class_id", variable=intvar_class_id, command=change_value_class_id, pady=-1, padx=-1).grid(column=3, row=0)

     
# global path_class_year, value_class_year, intvar_class_year

path_class_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_year"
value_class_year = ["FALSE"]

def change_value_class_year():
    global path_class_year, value_class_year#, intvar_class_year
    print("class_year")
    if value_class_year[-1] == "FALSE":
        print("class_year -> TRUE")
        print(value_class_year)
        value_class_year.append("TRUE")
        print(value_class_year)

    elif value_class_year[-1] == "TRUE":
        print("class_year -> FALSE")
        print(value_class_year)
        value_class_year.append("FALSE")
        print(value_class_year)

intvar_class_year = IntVar()
Checkbutton(root, text="class_year", variable=intvar_class_year, command=change_value_class_year, pady=-1, padx=-1).grid(column=3, row=1)

     
# global path_class_house_id_year, value_class_house_id_year, intvar_class_house_id_year

path_class_house_id_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_house_id_year"
value_class_house_id_year = ["FALSE"]

def change_value_class_house_id_year():
    global path_class_house_id_year, value_class_house_id_year#, intvar_class_house_id_year
    print("class_house_id_year")
    if value_class_house_id_year[-1] == "FALSE":
        print("class_house_id_year -> TRUE")
        print(value_class_house_id_year)
        value_class_house_id_year.append("TRUE")
        print(value_class_house_id_year)

    elif value_class_house_id_year[-1] == "TRUE":
        print("class_house_id_year -> FALSE")
        print(value_class_house_id_year)
        value_class_house_id_year.append("FALSE")
        print(value_class_house_id_year)

intvar_class_house_id_year = IntVar()
Checkbutton(root, text="class_house_id_year", variable=intvar_class_house_id_year, command=change_value_class_house_id_year, pady=-1, padx=-1).grid(column=3, row=2)

     
# global path_class_id_house_id, value_class_id_house_id, intvar_class_id_house_id

path_class_id_house_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_id_house_id"
value_class_id_house_id = ["FALSE"]

def change_value_class_id_house_id():
    global path_class_id_house_id, value_class_id_house_id#, intvar_class_id_house_id
    print("class_id_house_id")
    if value_class_id_house_id[-1] == "FALSE":
        print("class_id_house_id -> TRUE")
        print(value_class_id_house_id)
        value_class_id_house_id.append("TRUE")
        print(value_class_id_house_id)

    elif value_class_id_house_id[-1] == "TRUE":
        print("class_id_house_id -> FALSE")
        print(value_class_id_house_id)
        value_class_id_house_id.append("FALSE")
        print(value_class_id_house_id)

intvar_class_id_house_id = IntVar()
Checkbutton(root, text="class_id_house_id", variable=intvar_class_id_house_id, command=change_value_class_id_house_id, pady=-1, padx=-1).grid(column=3, row=3)

     
# global path_class_name_year, value_class_name_year, intvar_class_name_year

path_class_name_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_name_year"
value_class_name_year = ["FALSE"]

def change_value_class_name_year():
    global path_class_name_year, value_class_name_year#, intvar_class_name_year
    print("class_name_year")
    if value_class_name_year[-1] == "FALSE":
        print("class_name_year -> TRUE")
        print(value_class_name_year)
        value_class_name_year.append("TRUE")
        print(value_class_name_year)

    elif value_class_name_year[-1] == "TRUE":
        print("class_name_year -> FALSE")
        print(value_class_name_year)
        value_class_name_year.append("FALSE")
        print(value_class_name_year)

intvar_class_name_year = IntVar()
Checkbutton(root, text="class_name_year", variable=intvar_class_name_year, command=change_value_class_name_year, pady=-1, padx=-1).grid(column=3, row=4)

     
# global path_class_name_house_id, value_class_name_house_id, intvar_class_name_house_id

path_class_name_house_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_name_house_id"
value_class_name_house_id = ["FALSE"]

def change_value_class_name_house_id():
    global path_class_name_house_id, value_class_name_house_id#, intvar_class_name_house_id
    print("class_name_house_id")
    if value_class_name_house_id[-1] == "FALSE":
        print("class_name_house_id -> TRUE")
        print(value_class_name_house_id)
        value_class_name_house_id.append("TRUE")
        print(value_class_name_house_id)

    elif value_class_name_house_id[-1] == "TRUE":
        print("class_name_house_id -> FALSE")
        print(value_class_name_house_id)
        value_class_name_house_id.append("FALSE")
        print(value_class_name_house_id)

intvar_class_name_house_id = IntVar()
Checkbutton(root, text="class_name_house_id", variable=intvar_class_name_house_id, command=change_value_class_name_house_id, pady=-1, padx=-1).grid(column=3, row=5)

     
# global path_timetable_year, value_timetable_year, intvar_timetable_year

path_timetable_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_year"
value_timetable_year = ["FALSE"]

def change_value_timetable_year():
    global path_timetable_year, value_timetable_year#, intvar_timetable_year
    print("timetable_year")
    if value_timetable_year[-1] == "FALSE":
        print("timetable_year -> TRUE")
        print(value_timetable_year)
        value_timetable_year.append("TRUE")
        print(value_timetable_year)

    elif value_timetable_year[-1] == "TRUE":
        print("timetable_year -> FALSE")
        print(value_timetable_year)
        value_timetable_year.append("FALSE")
        print(value_timetable_year)

intvar_timetable_year = IntVar()
Checkbutton(root, text="timetable_year", variable=intvar_timetable_year, command=change_value_timetable_year, pady=-1, padx=-1).grid(column=3, row=6)

     
# global path_timetable_day, value_timetable_day, intvar_timetable_day

path_timetable_day = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_day"
value_timetable_day = ["FALSE"]

def change_value_timetable_day():
    global path_timetable_day, value_timetable_day#, intvar_timetable_day
    print("timetable_day")
    if value_timetable_day[-1] == "FALSE":
        print("timetable_day -> TRUE")
        print(value_timetable_day)
        value_timetable_day.append("TRUE")
        print(value_timetable_day)

    elif value_timetable_day[-1] == "TRUE":
        print("timetable_day -> FALSE")
        print(value_timetable_day)
        value_timetable_day.append("FALSE")
        print(value_timetable_day)

intvar_timetable_day = IntVar()
Checkbutton(root, text="timetable_day", variable=intvar_timetable_day, command=change_value_timetable_day, pady=-1, padx=-1).grid(column=3, row=7)

     
# global path_timetable_id_year, value_timetable_id_year, intvar_timetable_id_year

path_timetable_id_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_year"
value_timetable_id_year = ["FALSE"]

def change_value_timetable_id_year():
    global path_timetable_id_year, value_timetable_id_year#, intvar_timetable_id_year
    print("timetable_id_year")
    if value_timetable_id_year[-1] == "FALSE":
        print("timetable_id_year -> TRUE")
        print(value_timetable_id_year)
        value_timetable_id_year.append("TRUE")
        print(value_timetable_id_year)

    elif value_timetable_id_year[-1] == "TRUE":
        print("timetable_id_year -> FALSE")
        print(value_timetable_id_year)
        value_timetable_id_year.append("FALSE")
        print(value_timetable_id_year)

intvar_timetable_id_year = IntVar()
Checkbutton(root, text="timetable_id_year", variable=intvar_timetable_id_year, command=change_value_timetable_id_year, pady=-1, padx=-1).grid(column=3, row=8)

     
# global path_timetable_interval_day, value_timetable_interval_day, intvar_timetable_interval_day

path_timetable_interval_day = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_interval_day"
value_timetable_interval_day = ["FALSE"]

def change_value_timetable_interval_day():
    global path_timetable_interval_day, value_timetable_interval_day#, intvar_timetable_interval_day
    print("timetable_interval_day")
    if value_timetable_interval_day[-1] == "FALSE":
        print("timetable_interval_day -> TRUE")
        print(value_timetable_interval_day)
        value_timetable_interval_day.append("TRUE")
        print(value_timetable_interval_day)

    elif value_timetable_interval_day[-1] == "TRUE":
        print("timetable_interval_day -> FALSE")
        print(value_timetable_interval_day)
        value_timetable_interval_day.append("FALSE")
        print(value_timetable_interval_day)

intvar_timetable_interval_day = IntVar()
Checkbutton(root, text="timetable_interval_day", variable=intvar_timetable_interval_day, command=change_value_timetable_interval_day, pady=-1, padx=-1).grid(column=3, row=9)

     
# global path_timetable_interval, value_timetable_interval, intvar_timetable_interval

path_timetable_interval = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_interval"
value_timetable_interval = ["FALSE"]

def change_value_timetable_interval():
    global path_timetable_interval, value_timetable_interval#, intvar_timetable_interval
    print("timetable_interval")
    if value_timetable_interval[-1] == "FALSE":
        print("timetable_interval -> TRUE")
        print(value_timetable_interval)
        value_timetable_interval.append("TRUE")
        print(value_timetable_interval)

    elif value_timetable_interval[-1] == "TRUE":
        print("timetable_interval -> FALSE")
        print(value_timetable_interval)
        value_timetable_interval.append("FALSE")
        print(value_timetable_interval)

intvar_timetable_interval = IntVar()
Checkbutton(root, text="timetable_interval", variable=intvar_timetable_interval, command=change_value_timetable_interval, pady=-1, padx=-1).grid(column=3, row=10)

     
# global path_timetable_id_interval, value_timetable_id_interval, intvar_timetable_id_interval

path_timetable_id_interval = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_interval"
value_timetable_id_interval = ["FALSE"]

def change_value_timetable_id_interval():
    global path_timetable_id_interval, value_timetable_id_interval#, intvar_timetable_id_interval
    print("timetable_id_interval")
    if value_timetable_id_interval[-1] == "FALSE":
        print("timetable_id_interval -> TRUE")
        print(value_timetable_id_interval)
        value_timetable_id_interval.append("TRUE")
        print(value_timetable_id_interval)

    elif value_timetable_id_interval[-1] == "TRUE":
        print("timetable_id_interval -> FALSE")
        print(value_timetable_id_interval)
        value_timetable_id_interval.append("FALSE")
        print(value_timetable_id_interval)

intvar_timetable_id_interval = IntVar()
Checkbutton(root, text="timetable_id_interval", variable=intvar_timetable_id_interval, command=change_value_timetable_id_interval, pady=-1, padx=-1).grid(column=3, row=11)

     
# global path_timetable_interval_day_year, value_timetable_interval_day_year, intvar_timetable_interval_day_year

path_timetable_interval_day_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_interval_day_year"
value_timetable_interval_day_year = ["FALSE"]

def change_value_timetable_interval_day_year():
    global path_timetable_interval_day_year, value_timetable_interval_day_year#, intvar_timetable_interval_day_year
    print("timetable_interval_day_year")
    if value_timetable_interval_day_year[-1] == "FALSE":
        print("timetable_interval_day_year -> TRUE")
        print(value_timetable_interval_day_year)
        value_timetable_interval_day_year.append("TRUE")
        print(value_timetable_interval_day_year)

    elif value_timetable_interval_day_year[-1] == "TRUE":
        print("timetable_interval_day_year -> FALSE")
        print(value_timetable_interval_day_year)
        value_timetable_interval_day_year.append("FALSE")
        print(value_timetable_interval_day_year)

intvar_timetable_interval_day_year = IntVar()
Checkbutton(root, text="timetable_interval_day_year", variable=intvar_timetable_interval_day_year, command=change_value_timetable_interval_day_year, pady=-1, padx=-1).grid(column=3, row=12)

     
# global path_timetable_id_interval_year, value_timetable_id_interval_year, intvar_timetable_id_interval_year

path_timetable_id_interval_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_interval_year"
value_timetable_id_interval_year = ["FALSE"]

def change_value_timetable_id_interval_year():
    global path_timetable_id_interval_year, value_timetable_id_interval_year#, intvar_timetable_id_interval_year
    print("timetable_id_interval_year")
    if value_timetable_id_interval_year[-1] == "FALSE":
        print("timetable_id_interval_year -> TRUE")
        print(value_timetable_id_interval_year)
        value_timetable_id_interval_year.append("TRUE")
        print(value_timetable_id_interval_year)

    elif value_timetable_id_interval_year[-1] == "TRUE":
        print("timetable_id_interval_year -> FALSE")
        print(value_timetable_id_interval_year)
        value_timetable_id_interval_year.append("FALSE")
        print(value_timetable_id_interval_year)

intvar_timetable_id_interval_year = IntVar()
Checkbutton(root, text="timetable_id_interval_year", variable=intvar_timetable_id_interval_year, command=change_value_timetable_id_interval_year, pady=-1, padx=-1).grid(column=3, row=13)

     
# global path_timetable_interval_year, value_timetable_interval_year, intvar_timetable_interval_year

path_timetable_interval_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_interval_year"
value_timetable_interval_year = ["FALSE"]

def change_value_timetable_interval_year():
    global path_timetable_interval_year, value_timetable_interval_year#, intvar_timetable_interval_year
    print("timetable_interval_year")
    if value_timetable_interval_year[-1] == "FALSE":
        print("timetable_interval_year -> TRUE")
        print(value_timetable_interval_year)
        value_timetable_interval_year.append("TRUE")
        print(value_timetable_interval_year)

    elif value_timetable_interval_year[-1] == "TRUE":
        print("timetable_interval_year -> FALSE")
        print(value_timetable_interval_year)
        value_timetable_interval_year.append("FALSE")
        print(value_timetable_interval_year)

intvar_timetable_interval_year = IntVar()
Checkbutton(root, text="timetable_interval_year", variable=intvar_timetable_interval_year, command=change_value_timetable_interval_year, pady=-1, padx=-1).grid(column=3, row=14)

     
# global path_timetable_id, value_timetable_id, intvar_timetable_id

path_timetable_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id"
value_timetable_id = ["FALSE"]

def change_value_timetable_id():
    global path_timetable_id, value_timetable_id#, intvar_timetable_id
    print("timetable_id")
    if value_timetable_id[-1] == "FALSE":
        print("timetable_id -> TRUE")
        print(value_timetable_id)
        value_timetable_id.append("TRUE")
        print(value_timetable_id)

    elif value_timetable_id[-1] == "TRUE":
        print("timetable_id -> FALSE")
        print(value_timetable_id)
        value_timetable_id.append("FALSE")
        print(value_timetable_id)

intvar_timetable_id = IntVar()
Checkbutton(root, text="timetable_id", variable=intvar_timetable_id, command=change_value_timetable_id, pady=-1, padx=-1).grid(column=3, row=15)

     
# global path_timetable_id_day_year, value_timetable_id_day_year, intvar_timetable_id_day_year

path_timetable_id_day_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_day_year"
value_timetable_id_day_year = ["FALSE"]

def change_value_timetable_id_day_year():
    global path_timetable_id_day_year, value_timetable_id_day_year#, intvar_timetable_id_day_year
    print("timetable_id_day_year")
    if value_timetable_id_day_year[-1] == "FALSE":
        print("timetable_id_day_year -> TRUE")
        print(value_timetable_id_day_year)
        value_timetable_id_day_year.append("TRUE")
        print(value_timetable_id_day_year)

    elif value_timetable_id_day_year[-1] == "TRUE":
        print("timetable_id_day_year -> FALSE")
        print(value_timetable_id_day_year)
        value_timetable_id_day_year.append("FALSE")
        print(value_timetable_id_day_year)

intvar_timetable_id_day_year = IntVar()
Checkbutton(root, text="timetable_id_day_year", variable=intvar_timetable_id_day_year, command=change_value_timetable_id_day_year, pady=-1, padx=-1).grid(column=3, row=16)

     
# global path_timetable_id_interval_day, value_timetable_id_interval_day, intvar_timetable_id_interval_day

path_timetable_id_interval_day = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_interval_day"
value_timetable_id_interval_day = ["FALSE"]

def change_value_timetable_id_interval_day():
    global path_timetable_id_interval_day, value_timetable_id_interval_day#, intvar_timetable_id_interval_day
    print("timetable_id_interval_day")
    if value_timetable_id_interval_day[-1] == "FALSE":
        print("timetable_id_interval_day -> TRUE")
        print(value_timetable_id_interval_day)
        value_timetable_id_interval_day.append("TRUE")
        print(value_timetable_id_interval_day)

    elif value_timetable_id_interval_day[-1] == "TRUE":
        print("timetable_id_interval_day -> FALSE")
        print(value_timetable_id_interval_day)
        value_timetable_id_interval_day.append("FALSE")
        print(value_timetable_id_interval_day)

intvar_timetable_id_interval_day = IntVar()
Checkbutton(root, text="timetable_id_interval_day", variable=intvar_timetable_id_interval_day, command=change_value_timetable_id_interval_day, pady=-1, padx=-1).grid(column=3, row=17)

     
# global path_timetable_day_year, value_timetable_day_year, intvar_timetable_day_year

path_timetable_day_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_day_year"
value_timetable_day_year = ["FALSE"]

def change_value_timetable_day_year():
    global path_timetable_day_year, value_timetable_day_year#, intvar_timetable_day_year
    print("timetable_day_year")
    if value_timetable_day_year[-1] == "FALSE":
        print("timetable_day_year -> TRUE")
        print(value_timetable_day_year)
        value_timetable_day_year.append("TRUE")
        print(value_timetable_day_year)

    elif value_timetable_day_year[-1] == "TRUE":
        print("timetable_day_year -> FALSE")
        print(value_timetable_day_year)
        value_timetable_day_year.append("FALSE")
        print(value_timetable_day_year)

intvar_timetable_day_year = IntVar()
Checkbutton(root, text="timetable_day_year", variable=intvar_timetable_day_year, command=change_value_timetable_day_year, pady=-1, padx=-1).grid(column=3, row=18)

     
# global path_timetable_id_day, value_timetable_id_day, intvar_timetable_id_day

path_timetable_id_day = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_day"
value_timetable_id_day = ["FALSE"]

def change_value_timetable_id_day():
    global path_timetable_id_day, value_timetable_id_day#, intvar_timetable_id_day
    print("timetable_id_day")
    if value_timetable_id_day[-1] == "FALSE":
        print("timetable_id_day -> TRUE")
        print(value_timetable_id_day)
        value_timetable_id_day.append("TRUE")
        print(value_timetable_id_day)

    elif value_timetable_id_day[-1] == "TRUE":
        print("timetable_id_day -> FALSE")
        print(value_timetable_id_day)
        value_timetable_id_day.append("FALSE")
        print(value_timetable_id_day)

intvar_timetable_id_day = IntVar()
Checkbutton(root, text="timetable_id_day", variable=intvar_timetable_id_day, command=change_value_timetable_id_day, pady=-1, padx=-1).grid(column=3, row=19)

     
# global path_house_staff_id, value_house_staff_id, intvar_house_staff_id

path_house_staff_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_id"
value_house_staff_id = ["FALSE"]

def change_value_house_staff_id():
    global path_house_staff_id, value_house_staff_id#, intvar_house_staff_id
    print("house_staff_id")
    if value_house_staff_id[-1] == "FALSE":
        print("house_staff_id -> TRUE")
        print(value_house_staff_id)
        value_house_staff_id.append("TRUE")
        print(value_house_staff_id)

    elif value_house_staff_id[-1] == "TRUE":
        print("house_staff_id -> FALSE")
        print(value_house_staff_id)
        value_house_staff_id.append("FALSE")
        print(value_house_staff_id)

intvar_house_staff_id = IntVar()
Checkbutton(root, text="house_staff_id", variable=intvar_house_staff_id, command=change_value_house_staff_id, pady=-1, padx=-1).grid(column=3, row=20)

     
# global path_house_staff_id_year, value_house_staff_id_year, intvar_house_staff_id_year

path_house_staff_id_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_id_year"
value_house_staff_id_year = ["FALSE"]

def change_value_house_staff_id_year():
    global path_house_staff_id_year, value_house_staff_id_year#, intvar_house_staff_id_year
    print("house_staff_id_year")
    if value_house_staff_id_year[-1] == "FALSE":
        print("house_staff_id_year -> TRUE")
        print(value_house_staff_id_year)
        value_house_staff_id_year.append("TRUE")
        print(value_house_staff_id_year)

    elif value_house_staff_id_year[-1] == "TRUE":
        print("house_staff_id_year -> FALSE")
        print(value_house_staff_id_year)
        value_house_staff_id_year.append("FALSE")
        print(value_house_staff_id_year)

intvar_house_staff_id_year = IntVar()
Checkbutton(root, text="house_staff_id_year", variable=intvar_house_staff_id_year, command=change_value_house_staff_id_year, pady=-1, padx=-1).grid(column=3, row=21)

     
# global path_house_staff_function, value_house_staff_function, intvar_house_staff_function

path_house_staff_function = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_function"
value_house_staff_function = ["FALSE"]

def change_value_house_staff_function():
    global path_house_staff_function, value_house_staff_function#, intvar_house_staff_function
    print("house_staff_function")
    if value_house_staff_function[-1] == "FALSE":
        print("house_staff_function -> TRUE")
        print(value_house_staff_function)
        value_house_staff_function.append("TRUE")
        print(value_house_staff_function)

    elif value_house_staff_function[-1] == "TRUE":
        print("house_staff_function -> FALSE")
        print(value_house_staff_function)
        value_house_staff_function.append("FALSE")
        print(value_house_staff_function)

intvar_house_staff_function = IntVar()
Checkbutton(root, text="house_staff_function", variable=intvar_house_staff_function, command=change_value_house_staff_function, pady=-1, padx=-1).grid(column=3, row=22)

     
# global path_house_staff_staff_id, value_house_staff_staff_id, intvar_house_staff_staff_id

path_house_staff_staff_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_staff_id"
value_house_staff_staff_id = ["FALSE"]

def change_value_house_staff_staff_id():
    global path_house_staff_staff_id, value_house_staff_staff_id#, intvar_house_staff_staff_id
    print("house_staff_staff_id")
    if value_house_staff_staff_id[-1] == "FALSE":
        print("house_staff_staff_id -> TRUE")
        print(value_house_staff_staff_id)
        value_house_staff_staff_id.append("TRUE")
        print(value_house_staff_staff_id)

    elif value_house_staff_staff_id[-1] == "TRUE":
        print("house_staff_staff_id -> FALSE")
        print(value_house_staff_staff_id)
        value_house_staff_staff_id.append("FALSE")
        print(value_house_staff_staff_id)

intvar_house_staff_staff_id = IntVar()
Checkbutton(root, text="house_staff_staff_id", variable=intvar_house_staff_staff_id, command=change_value_house_staff_staff_id, pady=-1, padx=-1).grid(column=3, row=23)

     
# global path_house_staff_function_year, value_house_staff_function_year, intvar_house_staff_function_year

path_house_staff_function_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_function_year"
value_house_staff_function_year = ["FALSE"]

def change_value_house_staff_function_year():
    global path_house_staff_function_year, value_house_staff_function_year#, intvar_house_staff_function_year
    print("house_staff_function_year")
    if value_house_staff_function_year[-1] == "FALSE":
        print("house_staff_function_year -> TRUE")
        print(value_house_staff_function_year)
        value_house_staff_function_year.append("TRUE")
        print(value_house_staff_function_year)

    elif value_house_staff_function_year[-1] == "TRUE":
        print("house_staff_function_year -> FALSE")
        print(value_house_staff_function_year)
        value_house_staff_function_year.append("FALSE")
        print(value_house_staff_function_year)

intvar_house_staff_function_year = IntVar()
Checkbutton(root, text="house_staff_function_year", variable=intvar_house_staff_function_year, command=change_value_house_staff_function_year, pady=-1, padx=-1).grid(column=3, row=24)

     
# global path_house_staff_year, value_house_staff_year, intvar_house_staff_year

path_house_staff_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_year"
value_house_staff_year = ["FALSE"]

def change_value_house_staff_year():
    global path_house_staff_year, value_house_staff_year#, intvar_house_staff_year
    print("house_staff_year")
    if value_house_staff_year[-1] == "FALSE":
        print("house_staff_year -> TRUE")
        print(value_house_staff_year)
        value_house_staff_year.append("TRUE")
        print(value_house_staff_year)

    elif value_house_staff_year[-1] == "TRUE":
        print("house_staff_year -> FALSE")
        print(value_house_staff_year)
        value_house_staff_year.append("FALSE")
        print(value_house_staff_year)

intvar_house_staff_year = IntVar()
Checkbutton(root, text="house_staff_year", variable=intvar_house_staff_year, command=change_value_house_staff_year, pady=-1, padx=-1).grid(column=3, row=25)

     
# global path_house_staff_house_id, value_house_staff_house_id, intvar_house_staff_house_id

path_house_staff_house_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_house_id"
value_house_staff_house_id = ["FALSE"]

def change_value_house_staff_house_id():
    global path_house_staff_house_id, value_house_staff_house_id#, intvar_house_staff_house_id
    print("house_staff_house_id")
    if value_house_staff_house_id[-1] == "FALSE":
        print("house_staff_house_id -> TRUE")
        print(value_house_staff_house_id)
        value_house_staff_house_id.append("TRUE")
        print(value_house_staff_house_id)

    elif value_house_staff_house_id[-1] == "TRUE":
        print("house_staff_house_id -> FALSE")
        print(value_house_staff_house_id)
        value_house_staff_house_id.append("FALSE")
        print(value_house_staff_house_id)

intvar_house_staff_house_id = IntVar()
Checkbutton(root, text="house_staff_house_id", variable=intvar_house_staff_house_id, command=change_value_house_staff_house_id, pady=-1, padx=-1).grid(column=3, row=26)

     
# global path_house_staff_id_function, value_house_staff_id_function, intvar_house_staff_id_function

path_house_staff_id_function = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_id_function"
value_house_staff_id_function = ["FALSE"]

def change_value_house_staff_id_function():
    global path_house_staff_id_function, value_house_staff_id_function#, intvar_house_staff_id_function
    print("house_staff_id_function")
    if value_house_staff_id_function[-1] == "FALSE":
        print("house_staff_id_function -> TRUE")
        print(value_house_staff_id_function)
        value_house_staff_id_function.append("TRUE")
        print(value_house_staff_id_function)

    elif value_house_staff_id_function[-1] == "TRUE":
        print("house_staff_id_function -> FALSE")
        print(value_house_staff_id_function)
        value_house_staff_id_function.append("FALSE")
        print(value_house_staff_id_function)

intvar_house_staff_id_function = IntVar()
Checkbutton(root, text="house_staff_id_function", variable=intvar_house_staff_id_function, command=change_value_house_staff_id_function, pady=-1, padx=-1).grid(column=3, row=27)

     
# global path_house_name, value_house_name, intvar_house_name

path_house_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_name"
value_house_name = ["FALSE"]

def change_value_house_name():
    global path_house_name, value_house_name#, intvar_house_name
    print("house_name")
    if value_house_name[-1] == "FALSE":
        print("house_name -> TRUE")
        print(value_house_name)
        value_house_name.append("TRUE")
        print(value_house_name)

    elif value_house_name[-1] == "TRUE":
        print("house_name -> FALSE")
        print(value_house_name)
        value_house_name.append("FALSE")
        print(value_house_name)

intvar_house_name = IntVar()
Checkbutton(root, text="house_name", variable=intvar_house_name, command=change_value_house_name, pady=-1, padx=-1).grid(column=3, row=28)

     
# global path_house_name_house_number, value_house_name_house_number, intvar_house_name_house_number

path_house_name_house_number = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_name_house_number"
value_house_name_house_number = ["FALSE"]

def change_value_house_name_house_number():
    global path_house_name_house_number, value_house_name_house_number#, intvar_house_name_house_number
    print("house_name_house_number")
    if value_house_name_house_number[-1] == "FALSE":
        print("house_name_house_number -> TRUE")
        print(value_house_name_house_number)
        value_house_name_house_number.append("TRUE")
        print(value_house_name_house_number)

    elif value_house_name_house_number[-1] == "TRUE":
        print("house_name_house_number -> FALSE")
        print(value_house_name_house_number)
        value_house_name_house_number.append("FALSE")
        print(value_house_name_house_number)

intvar_house_name_house_number = IntVar()
Checkbutton(root, text="house_name_house_number", variable=intvar_house_name_house_number, command=change_value_house_name_house_number, pady=-1, padx=-1).grid(column=3, row=29)

     
# global path_house_house_number, value_house_house_number, intvar_house_house_number

path_house_house_number = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_house_number"
value_house_house_number = ["FALSE"]

def change_value_house_house_number():
    global path_house_house_number, value_house_house_number#, intvar_house_house_number
    print("house_house_number")
    if value_house_house_number[-1] == "FALSE":
        print("house_house_number -> TRUE")
        print(value_house_house_number)
        value_house_house_number.append("TRUE")
        print(value_house_house_number)

    elif value_house_house_number[-1] == "TRUE":
        print("house_house_number -> FALSE")
        print(value_house_house_number)
        value_house_house_number.append("FALSE")
        print(value_house_house_number)

intvar_house_house_number = IntVar()
Checkbutton(root, text="house_house_number", variable=intvar_house_house_number, command=change_value_house_house_number, pady=-1, padx=-1).grid(column=3, row=30)

     
# global path_house_id, value_house_id, intvar_house_id

path_house_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_id"
value_house_id = ["FALSE"]

def change_value_house_id():
    global path_house_id, value_house_id#, intvar_house_id
    print("house_id")
    if value_house_id[-1] == "FALSE":
        print("house_id -> TRUE")
        print(value_house_id)
        value_house_id.append("TRUE")
        print(value_house_id)

    elif value_house_id[-1] == "TRUE":
        print("house_id -> FALSE")
        print(value_house_id)
        value_house_id.append("FALSE")
        print(value_house_id)

intvar_house_id = IntVar()
Checkbutton(root, text="house_id", variable=intvar_house_id, command=change_value_house_id, pady=-1, padx=-1).grid(column=4, row=0)

     
# global path_house_id_name_year, value_house_id_name_year, intvar_house_id_name_year

path_house_id_name_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_id_name_year"
value_house_id_name_year = ["FALSE"]

def change_value_house_id_name_year():
    global path_house_id_name_year, value_house_id_name_year#, intvar_house_id_name_year
    print("house_id_name_year")
    if value_house_id_name_year[-1] == "FALSE":
        print("house_id_name_year -> TRUE")
        print(value_house_id_name_year)
        value_house_id_name_year.append("TRUE")
        print(value_house_id_name_year)

    elif value_house_id_name_year[-1] == "TRUE":
        print("house_id_name_year -> FALSE")
        print(value_house_id_name_year)
        value_house_id_name_year.append("FALSE")
        print(value_house_id_name_year)

intvar_house_id_name_year = IntVar()
Checkbutton(root, text="house_id_name_year", variable=intvar_house_id_name_year, command=change_value_house_id_name_year, pady=-1, padx=-1).grid(column=4, row=1)

     
# global path_house_year, value_house_year, intvar_house_year

path_house_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_year"
value_house_year = ["FALSE"]

def change_value_house_year():
    global path_house_year, value_house_year#, intvar_house_year
    print("house_year")
    if value_house_year[-1] == "FALSE":
        print("house_year -> TRUE")
        print(value_house_year)
        value_house_year.append("TRUE")
        print(value_house_year)

    elif value_house_year[-1] == "TRUE":
        print("house_year -> FALSE")
        print(value_house_year)
        value_house_year.append("FALSE")
        print(value_house_year)

intvar_house_year = IntVar()
Checkbutton(root, text="house_year", variable=intvar_house_year, command=change_value_house_year, pady=-1, padx=-1).grid(column=4, row=2)

     
# global path_house_name_year, value_house_name_year, intvar_house_name_year

path_house_name_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_name_year"
value_house_name_year = ["FALSE"]

def change_value_house_name_year():
    global path_house_name_year, value_house_name_year#, intvar_house_name_year
    print("house_name_year")
    if value_house_name_year[-1] == "FALSE":
        print("house_name_year -> TRUE")
        print(value_house_name_year)
        value_house_name_year.append("TRUE")
        print(value_house_name_year)

    elif value_house_name_year[-1] == "TRUE":
        print("house_name_year -> FALSE")
        print(value_house_name_year)
        value_house_name_year.append("FALSE")
        print(value_house_name_year)

intvar_house_name_year = IntVar()
Checkbutton(root, text="house_name_year", variable=intvar_house_name_year, command=change_value_house_name_year, pady=-1, padx=-1).grid(column=4, row=3)

     
# global path_house_id_name, value_house_id_name, intvar_house_id_name

path_house_id_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_id_name"
value_house_id_name = ["FALSE"]

def change_value_house_id_name():
    global path_house_id_name, value_house_id_name#, intvar_house_id_name
    print("house_id_name")
    if value_house_id_name[-1] == "FALSE":
        print("house_id_name -> TRUE")
        print(value_house_id_name)
        value_house_id_name.append("TRUE")
        print(value_house_id_name)

    elif value_house_id_name[-1] == "TRUE":
        print("house_id_name -> FALSE")
        print(value_house_id_name)
        value_house_id_name.append("FALSE")
        print(value_house_id_name)

intvar_house_id_name = IntVar()
Checkbutton(root, text="house_id_name", variable=intvar_house_id_name, command=change_value_house_id_name, pady=-1, padx=-1).grid(column=4, row=4)

     
# global path_house_id_house_number, value_house_id_house_number, intvar_house_id_house_number

path_house_id_house_number = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_id_house_number"
value_house_id_house_number = ["FALSE"]

def change_value_house_id_house_number():
    global path_house_id_house_number, value_house_id_house_number#, intvar_house_id_house_number
    print("house_id_house_number")
    if value_house_id_house_number[-1] == "FALSE":
        print("house_id_house_number -> TRUE")
        print(value_house_id_house_number)
        value_house_id_house_number.append("TRUE")
        print(value_house_id_house_number)

    elif value_house_id_house_number[-1] == "TRUE":
        print("house_id_house_number -> FALSE")
        print(value_house_id_house_number)
        value_house_id_house_number.append("FALSE")
        print(value_house_id_house_number)

intvar_house_id_house_number = IntVar()
Checkbutton(root, text="house_id_house_number", variable=intvar_house_id_house_number, command=change_value_house_id_house_number, pady=-1, padx=-1).grid(column=4, row=5)

     
# global path_house_house_number_year, value_house_house_number_year, intvar_house_house_number_year

path_house_house_number_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_house_number_year"
value_house_house_number_year = ["FALSE"]

def change_value_house_house_number_year():
    global path_house_house_number_year, value_house_house_number_year#, intvar_house_house_number_year
    print("house_house_number_year")
    if value_house_house_number_year[-1] == "FALSE":
        print("house_house_number_year -> TRUE")
        print(value_house_house_number_year)
        value_house_house_number_year.append("TRUE")
        print(value_house_house_number_year)

    elif value_house_house_number_year[-1] == "TRUE":
        print("house_house_number_year -> FALSE")
        print(value_house_house_number_year)
        value_house_house_number_year.append("FALSE")
        print(value_house_house_number_year)

intvar_house_house_number_year = IntVar()
Checkbutton(root, text="house_house_number_year", variable=intvar_house_house_number_year, command=change_value_house_house_number_year, pady=-1, padx=-1).grid(column=4, row=6)

     
# global path_house_id_year, value_house_id_year, intvar_house_id_year

path_house_id_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_id_year"
value_house_id_year = ["FALSE"]

def change_value_house_id_year():
    global path_house_id_year, value_house_id_year#, intvar_house_id_year
    print("house_id_year")
    if value_house_id_year[-1] == "FALSE":
        print("house_id_year -> TRUE")
        print(value_house_id_year)
        value_house_id_year.append("TRUE")
        print(value_house_id_year)

    elif value_house_id_year[-1] == "TRUE":
        print("house_id_year -> FALSE")
        print(value_house_id_year)
        value_house_id_year.append("FALSE")
        print(value_house_id_year)

intvar_house_id_year = IntVar()
Checkbutton(root, text="house_id_year", variable=intvar_house_id_year, command=change_value_house_id_year, pady=-1, padx=-1).grid(column=4, row=7)

     
# global path_room_id_name, value_room_id_name, intvar_room_id_name

path_room_id_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_name"
value_room_id_name = ["FALSE"]

def change_value_room_id_name():
    global path_room_id_name, value_room_id_name#, intvar_room_id_name
    print("room_id_name")
    if value_room_id_name[-1] == "FALSE":
        print("room_id_name -> TRUE")
        print(value_room_id_name)
        value_room_id_name.append("TRUE")
        print(value_room_id_name)

    elif value_room_id_name[-1] == "TRUE":
        print("room_id_name -> FALSE")
        print(value_room_id_name)
        value_room_id_name.append("FALSE")
        print(value_room_id_name)

intvar_room_id_name = IntVar()
Checkbutton(root, text="room_id_name", variable=intvar_room_id_name, command=change_value_room_id_name, pady=-1, padx=-1).grid(column=4, row=8)

     
# global path_room_id_name_entreprise, value_room_id_name_entreprise, intvar_room_id_name_entreprise

path_room_id_name_entreprise = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_name_entreprise"
value_room_id_name_entreprise = ["FALSE"]

def change_value_room_id_name_entreprise():
    global path_room_id_name_entreprise, value_room_id_name_entreprise#, intvar_room_id_name_entreprise
    print("room_id_name_entreprise")
    if value_room_id_name_entreprise[-1] == "FALSE":
        print("room_id_name_entreprise -> TRUE")
        print(value_room_id_name_entreprise)
        value_room_id_name_entreprise.append("TRUE")
        print(value_room_id_name_entreprise)

    elif value_room_id_name_entreprise[-1] == "TRUE":
        print("room_id_name_entreprise -> FALSE")
        print(value_room_id_name_entreprise)
        value_room_id_name_entreprise.append("FALSE")
        print(value_room_id_name_entreprise)

intvar_room_id_name_entreprise = IntVar()
Checkbutton(root, text="room_id_name_entreprise", variable=intvar_room_id_name_entreprise, command=change_value_room_id_name_entreprise, pady=-1, padx=-1).grid(column=4, row=9)

     
# global path_room_entreprise_year, value_room_entreprise_year, intvar_room_entreprise_year

path_room_entreprise_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_entreprise_year"
value_room_entreprise_year = ["FALSE"]

def change_value_room_entreprise_year():
    global path_room_entreprise_year, value_room_entreprise_year#, intvar_room_entreprise_year
    print("room_entreprise_year")
    if value_room_entreprise_year[-1] == "FALSE":
        print("room_entreprise_year -> TRUE")
        print(value_room_entreprise_year)
        value_room_entreprise_year.append("TRUE")
        print(value_room_entreprise_year)

    elif value_room_entreprise_year[-1] == "TRUE":
        print("room_entreprise_year -> FALSE")
        print(value_room_entreprise_year)
        value_room_entreprise_year.append("FALSE")
        print(value_room_entreprise_year)

intvar_room_entreprise_year = IntVar()
Checkbutton(root, text="room_entreprise_year", variable=intvar_room_entreprise_year, command=change_value_room_entreprise_year, pady=-1, padx=-1).grid(column=4, row=10)

     
# global path_room_id_name_year, value_room_id_name_year, intvar_room_id_name_year

path_room_id_name_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_name_year"
value_room_id_name_year = ["FALSE"]

def change_value_room_id_name_year():
    global path_room_id_name_year, value_room_id_name_year#, intvar_room_id_name_year
    print("room_id_name_year")
    if value_room_id_name_year[-1] == "FALSE":
        print("room_id_name_year -> TRUE")
        print(value_room_id_name_year)
        value_room_id_name_year.append("TRUE")
        print(value_room_id_name_year)

    elif value_room_id_name_year[-1] == "TRUE":
        print("room_id_name_year -> FALSE")
        print(value_room_id_name_year)
        value_room_id_name_year.append("FALSE")
        print(value_room_id_name_year)

intvar_room_id_name_year = IntVar()
Checkbutton(root, text="room_id_name_year", variable=intvar_room_id_name_year, command=change_value_room_id_name_year, pady=-1, padx=-1).grid(column=4, row=11)

     
# global path_room_id_year, value_room_id_year, intvar_room_id_year

path_room_id_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_year"
value_room_id_year = ["FALSE"]

def change_value_room_id_year():
    global path_room_id_year, value_room_id_year#, intvar_room_id_year
    print("room_id_year")
    if value_room_id_year[-1] == "FALSE":
        print("room_id_year -> TRUE")
        print(value_room_id_year)
        value_room_id_year.append("TRUE")
        print(value_room_id_year)

    elif value_room_id_year[-1] == "TRUE":
        print("room_id_year -> FALSE")
        print(value_room_id_year)
        value_room_id_year.append("FALSE")
        print(value_room_id_year)

intvar_room_id_year = IntVar()
Checkbutton(root, text="room_id_year", variable=intvar_room_id_year, command=change_value_room_id_year, pady=-1, padx=-1).grid(column=4, row=12)

     
# global path_room_name_entreprise_year, value_room_name_entreprise_year, intvar_room_name_entreprise_year

path_room_name_entreprise_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_name_entreprise_year"
value_room_name_entreprise_year = ["FALSE"]

def change_value_room_name_entreprise_year():
    global path_room_name_entreprise_year, value_room_name_entreprise_year#, intvar_room_name_entreprise_year
    print("room_name_entreprise_year")
    if value_room_name_entreprise_year[-1] == "FALSE":
        print("room_name_entreprise_year -> TRUE")
        print(value_room_name_entreprise_year)
        value_room_name_entreprise_year.append("TRUE")
        print(value_room_name_entreprise_year)

    elif value_room_name_entreprise_year[-1] == "TRUE":
        print("room_name_entreprise_year -> FALSE")
        print(value_room_name_entreprise_year)
        value_room_name_entreprise_year.append("FALSE")
        print(value_room_name_entreprise_year)

intvar_room_name_entreprise_year = IntVar()
Checkbutton(root, text="room_name_entreprise_year", variable=intvar_room_name_entreprise_year, command=change_value_room_name_entreprise_year, pady=-1, padx=-1).grid(column=4, row=13)

     
# global path_room_id_entreprise, value_room_id_entreprise, intvar_room_id_entreprise

path_room_id_entreprise = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_entreprise"
value_room_id_entreprise = ["FALSE"]

def change_value_room_id_entreprise():
    global path_room_id_entreprise, value_room_id_entreprise#, intvar_room_id_entreprise
    print("room_id_entreprise")
    if value_room_id_entreprise[-1] == "FALSE":
        print("room_id_entreprise -> TRUE")
        print(value_room_id_entreprise)
        value_room_id_entreprise.append("TRUE")
        print(value_room_id_entreprise)

    elif value_room_id_entreprise[-1] == "TRUE":
        print("room_id_entreprise -> FALSE")
        print(value_room_id_entreprise)
        value_room_id_entreprise.append("FALSE")
        print(value_room_id_entreprise)

intvar_room_id_entreprise = IntVar()
Checkbutton(root, text="room_id_entreprise", variable=intvar_room_id_entreprise, command=change_value_room_id_entreprise, pady=-1, padx=-1).grid(column=4, row=14)

     
# global path_room_entreprise, value_room_entreprise, intvar_room_entreprise

path_room_entreprise = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_entreprise"
value_room_entreprise = ["FALSE"]

def change_value_room_entreprise():
    global path_room_entreprise, value_room_entreprise#, intvar_room_entreprise
    print("room_entreprise")
    if value_room_entreprise[-1] == "FALSE":
        print("room_entreprise -> TRUE")
        print(value_room_entreprise)
        value_room_entreprise.append("TRUE")
        print(value_room_entreprise)

    elif value_room_entreprise[-1] == "TRUE":
        print("room_entreprise -> FALSE")
        print(value_room_entreprise)
        value_room_entreprise.append("FALSE")
        print(value_room_entreprise)

intvar_room_entreprise = IntVar()
Checkbutton(root, text="room_entreprise", variable=intvar_room_entreprise, command=change_value_room_entreprise, pady=-1, padx=-1).grid(column=4, row=15)

     
# global path_room_id, value_room_id, intvar_room_id

path_room_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id"
value_room_id = ["FALSE"]

def change_value_room_id():
    global path_room_id, value_room_id#, intvar_room_id
    print("room_id")
    if value_room_id[-1] == "FALSE":
        print("room_id -> TRUE")
        print(value_room_id)
        value_room_id.append("TRUE")
        print(value_room_id)

    elif value_room_id[-1] == "TRUE":
        print("room_id -> FALSE")
        print(value_room_id)
        value_room_id.append("FALSE")
        print(value_room_id)

intvar_room_id = IntVar()
Checkbutton(root, text="room_id", variable=intvar_room_id, command=change_value_room_id, pady=-1, padx=-1).grid(column=4, row=16)

     
# global path_room_year, value_room_year, intvar_room_year

path_room_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_year"
value_room_year = ["FALSE"]

def change_value_room_year():
    global path_room_year, value_room_year#, intvar_room_year
    print("room_year")
    if value_room_year[-1] == "FALSE":
        print("room_year -> TRUE")
        print(value_room_year)
        value_room_year.append("TRUE")
        print(value_room_year)

    elif value_room_year[-1] == "TRUE":
        print("room_year -> FALSE")
        print(value_room_year)
        value_room_year.append("FALSE")
        print(value_room_year)

intvar_room_year = IntVar()
Checkbutton(root, text="room_year", variable=intvar_room_year, command=change_value_room_year, pady=-1, padx=-1).grid(column=4, row=17)

     
# global path_room_name, value_room_name, intvar_room_name

path_room_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_name"
value_room_name = ["FALSE"]

def change_value_room_name():
    global path_room_name, value_room_name#, intvar_room_name
    print("room_name")
    if value_room_name[-1] == "FALSE":
        print("room_name -> TRUE")
        print(value_room_name)
        value_room_name.append("TRUE")
        print(value_room_name)

    elif value_room_name[-1] == "TRUE":
        print("room_name -> FALSE")
        print(value_room_name)
        value_room_name.append("FALSE")
        print(value_room_name)

intvar_room_name = IntVar()
Checkbutton(root, text="room_name", variable=intvar_room_name, command=change_value_room_name, pady=-1, padx=-1).grid(column=4, row=18)

     
# global path_room_name_entreprise, value_room_name_entreprise, intvar_room_name_entreprise

path_room_name_entreprise = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_name_entreprise"
value_room_name_entreprise = ["FALSE"]

def change_value_room_name_entreprise():
    global path_room_name_entreprise, value_room_name_entreprise#, intvar_room_name_entreprise
    print("room_name_entreprise")
    if value_room_name_entreprise[-1] == "FALSE":
        print("room_name_entreprise -> TRUE")
        print(value_room_name_entreprise)
        value_room_name_entreprise.append("TRUE")
        print(value_room_name_entreprise)

    elif value_room_name_entreprise[-1] == "TRUE":
        print("room_name_entreprise -> FALSE")
        print(value_room_name_entreprise)
        value_room_name_entreprise.append("FALSE")
        print(value_room_name_entreprise)

intvar_room_name_entreprise = IntVar()
Checkbutton(root, text="room_name_entreprise", variable=intvar_room_name_entreprise, command=change_value_room_name_entreprise, pady=-1, padx=-1).grid(column=4, row=19)

     
# global path_room_id_entreprise_year, value_room_id_entreprise_year, intvar_room_id_entreprise_year

path_room_id_entreprise_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_entreprise_year"
value_room_id_entreprise_year = ["FALSE"]

def change_value_room_id_entreprise_year():
    global path_room_id_entreprise_year, value_room_id_entreprise_year#, intvar_room_id_entreprise_year
    print("room_id_entreprise_year")
    if value_room_id_entreprise_year[-1] == "FALSE":
        print("room_id_entreprise_year -> TRUE")
        print(value_room_id_entreprise_year)
        value_room_id_entreprise_year.append("TRUE")
        print(value_room_id_entreprise_year)

    elif value_room_id_entreprise_year[-1] == "TRUE":
        print("room_id_entreprise_year -> FALSE")
        print(value_room_id_entreprise_year)
        value_room_id_entreprise_year.append("FALSE")
        print(value_room_id_entreprise_year)

intvar_room_id_entreprise_year = IntVar()
Checkbutton(root, text="room_id_entreprise_year", variable=intvar_room_id_entreprise_year, command=change_value_room_id_entreprise_year, pady=-1, padx=-1).grid(column=4, row=20)

     
# global path_room_name_year, value_room_name_year, intvar_room_name_year

path_room_name_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_name_year"
value_room_name_year = ["FALSE"]

def change_value_room_name_year():
    global path_room_name_year, value_room_name_year#, intvar_room_name_year
    print("room_name_year")
    if value_room_name_year[-1] == "FALSE":
        print("room_name_year -> TRUE")
        print(value_room_name_year)
        value_room_name_year.append("TRUE")
        print(value_room_name_year)

    elif value_room_name_year[-1] == "TRUE":
        print("room_name_year -> FALSE")
        print(value_room_name_year)
        value_room_name_year.append("FALSE")
        print(value_room_name_year)

intvar_room_name_year = IntVar()
Checkbutton(root, text="room_name_year", variable=intvar_room_name_year, command=change_value_room_name_year, pady=-1, padx=-1).grid(column=4, row=21)

     
# global path_year_id, value_year_id, intvar_year_id

path_year_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir/year_id"
value_year_id = ["FALSE"]

def change_value_year_id():
    global path_year_id, value_year_id#, intvar_year_id
    print("year_id")
    if value_year_id[-1] == "FALSE":
        print("year_id -> TRUE")
        print(value_year_id)
        value_year_id.append("TRUE")
        print(value_year_id)

    elif value_year_id[-1] == "TRUE":
        print("year_id -> FALSE")
        print(value_year_id)
        value_year_id.append("FALSE")
        print(value_year_id)

intvar_year_id = IntVar()
Checkbutton(root, text="year_id", variable=intvar_year_id, command=change_value_year_id, pady=-1, padx=-1).grid(column=4, row=22)

     
# global path_year_year_end, value_year_year_end, intvar_year_year_end

path_year_year_end = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir/year_year_end"
value_year_year_end = ["FALSE"]

def change_value_year_year_end():
    global path_year_year_end, value_year_year_end#, intvar_year_year_end
    print("year_year_end")
    if value_year_year_end[-1] == "FALSE":
        print("year_year_end -> TRUE")
        print(value_year_year_end)
        value_year_year_end.append("TRUE")
        print(value_year_year_end)

    elif value_year_year_end[-1] == "TRUE":
        print("year_year_end -> FALSE")
        print(value_year_year_end)
        value_year_year_end.append("FALSE")
        print(value_year_year_end)

intvar_year_year_end = IntVar()
Checkbutton(root, text="year_year_end", variable=intvar_year_year_end, command=change_value_year_year_end, pady=-1, padx=-1).grid(column=4, row=23)

     
# global path_year_year_start, value_year_year_start, intvar_year_year_start

path_year_year_start = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir/year_year_start"
value_year_year_start = ["FALSE"]

def change_value_year_year_start():
    global path_year_year_start, value_year_year_start#, intvar_year_year_start
    print("year_year_start")
    if value_year_year_start[-1] == "FALSE":
        print("year_year_start -> TRUE")
        print(value_year_year_start)
        value_year_year_start.append("TRUE")
        print(value_year_year_start)

    elif value_year_year_start[-1] == "TRUE":
        print("year_year_start -> FALSE")
        print(value_year_year_start)
        value_year_year_start.append("FALSE")
        print(value_year_year_start)

intvar_year_year_start = IntVar()
Checkbutton(root, text="year_year_start", variable=intvar_year_year_start, command=change_value_year_year_start, pady=-1, padx=-1).grid(column=4, row=24)

     
# global path_year_id_year_end, value_year_id_year_end, intvar_year_id_year_end

path_year_id_year_end = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir/year_id_year_end"
value_year_id_year_end = ["FALSE"]

def change_value_year_id_year_end():
    global path_year_id_year_end, value_year_id_year_end#, intvar_year_id_year_end
    print("year_id_year_end")
    if value_year_id_year_end[-1] == "FALSE":
        print("year_id_year_end -> TRUE")
        print(value_year_id_year_end)
        value_year_id_year_end.append("TRUE")
        print(value_year_id_year_end)

    elif value_year_id_year_end[-1] == "TRUE":
        print("year_id_year_end -> FALSE")
        print(value_year_id_year_end)
        value_year_id_year_end.append("FALSE")
        print(value_year_id_year_end)

intvar_year_id_year_end = IntVar()
Checkbutton(root, text="year_id_year_end", variable=intvar_year_id_year_end, command=change_value_year_id_year_end, pady=-1, padx=-1).grid(column=4, row=25)

     
# global path_year_id_year_start, value_year_id_year_start, intvar_year_id_year_start

path_year_id_year_start = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir/year_id_year_start"
value_year_id_year_start = ["FALSE"]

def change_value_year_id_year_start():
    global path_year_id_year_start, value_year_id_year_start#, intvar_year_id_year_start
    print("year_id_year_start")
    if value_year_id_year_start[-1] == "FALSE":
        print("year_id_year_start -> TRUE")
        print(value_year_id_year_start)
        value_year_id_year_start.append("TRUE")
        print(value_year_id_year_start)

    elif value_year_id_year_start[-1] == "TRUE":
        print("year_id_year_start -> FALSE")
        print(value_year_id_year_start)
        value_year_id_year_start.append("FALSE")
        print(value_year_id_year_start)

intvar_year_id_year_start = IntVar()
Checkbutton(root, text="year_id_year_start", variable=intvar_year_id_year_start, command=change_value_year_id_year_start, pady=-1, padx=-1).grid(column=4, row=26)

     
# global path_days_id_name, value_days_id_name, intvar_days_id_name

path_days_id_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/days_dir/days_id_name"
value_days_id_name = ["FALSE"]

def change_value_days_id_name():
    global path_days_id_name, value_days_id_name#, intvar_days_id_name
    print("days_id_name")
    if value_days_id_name[-1] == "FALSE":
        print("days_id_name -> TRUE")
        print(value_days_id_name)
        value_days_id_name.append("TRUE")
        print(value_days_id_name)

    elif value_days_id_name[-1] == "TRUE":
        print("days_id_name -> FALSE")
        print(value_days_id_name)
        value_days_id_name.append("FALSE")
        print(value_days_id_name)

intvar_days_id_name = IntVar()
Checkbutton(root, text="days_id_name", variable=intvar_days_id_name, command=change_value_days_id_name, pady=-1, padx=-1).grid(column=4, row=27)

     
# global path_days_id, value_days_id, intvar_days_id

path_days_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/days_dir/days_id"
value_days_id = ["FALSE"]

def change_value_days_id():
    global path_days_id, value_days_id#, intvar_days_id
    print("days_id")
    if value_days_id[-1] == "FALSE":
        print("days_id -> TRUE")
        print(value_days_id)
        value_days_id.append("TRUE")
        print(value_days_id)

    elif value_days_id[-1] == "TRUE":
        print("days_id -> FALSE")
        print(value_days_id)
        value_days_id.append("FALSE")
        print(value_days_id)

intvar_days_id = IntVar()
Checkbutton(root, text="days_id", variable=intvar_days_id, command=change_value_days_id, pady=-1, padx=-1).grid(column=4, row=28)

     
# global path_days_name, value_days_name, intvar_days_name

path_days_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/days_dir/days_name"
value_days_name = ["FALSE"]

def change_value_days_name():
    global path_days_name, value_days_name#, intvar_days_name
    print("days_name")
    if value_days_name[-1] == "FALSE":
        print("days_name -> TRUE")
        print(value_days_name)
        value_days_name.append("TRUE")
        print(value_days_name)

    elif value_days_name[-1] == "TRUE":
        print("days_name -> FALSE")
        print(value_days_name)
        value_days_name.append("FALSE")
        print(value_days_name)

intvar_days_name = IntVar()
Checkbutton(root, text="days_name", variable=intvar_days_name, command=change_value_days_name, pady=-1, padx=-1).grid(column=4, row=29)

     
# global path_tuteur_year, value_tuteur_year, intvar_tuteur_year

path_tuteur_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_year"
value_tuteur_year = ["FALSE"]

def change_value_tuteur_year():
    global path_tuteur_year, value_tuteur_year#, intvar_tuteur_year
    print("tuteur_year")
    if value_tuteur_year[-1] == "FALSE":
        print("tuteur_year -> TRUE")
        print(value_tuteur_year)
        value_tuteur_year.append("TRUE")
        print(value_tuteur_year)

    elif value_tuteur_year[-1] == "TRUE":
        print("tuteur_year -> FALSE")
        print(value_tuteur_year)
        value_tuteur_year.append("FALSE")
        print(value_tuteur_year)

intvar_tuteur_year = IntVar()
Checkbutton(root, text="tuteur_year", variable=intvar_tuteur_year, command=change_value_tuteur_year, pady=-1, padx=-1).grid(column=4, row=30)

     
# global path_tuteur_first_name, value_tuteur_first_name, intvar_tuteur_first_name

path_tuteur_first_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_first_name"
value_tuteur_first_name = ["FALSE"]

def change_value_tuteur_first_name():
    global path_tuteur_first_name, value_tuteur_first_name#, intvar_tuteur_first_name
    print("tuteur_first_name")
    if value_tuteur_first_name[-1] == "FALSE":
        print("tuteur_first_name -> TRUE")
        print(value_tuteur_first_name)
        value_tuteur_first_name.append("TRUE")
        print(value_tuteur_first_name)

    elif value_tuteur_first_name[-1] == "TRUE":
        print("tuteur_first_name -> FALSE")
        print(value_tuteur_first_name)
        value_tuteur_first_name.append("FALSE")
        print(value_tuteur_first_name)

intvar_tuteur_first_name = IntVar()
Checkbutton(root, text="tuteur_first_name", variable=intvar_tuteur_first_name, command=change_value_tuteur_first_name, pady=-1, padx=-1).grid(column=5, row=0)

     
# global path_tuteur_entreprise, value_tuteur_entreprise, intvar_tuteur_entreprise

path_tuteur_entreprise = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_entreprise"
value_tuteur_entreprise = ["FALSE"]

def change_value_tuteur_entreprise():
    global path_tuteur_entreprise, value_tuteur_entreprise#, intvar_tuteur_entreprise
    print("tuteur_entreprise")
    if value_tuteur_entreprise[-1] == "FALSE":
        print("tuteur_entreprise -> TRUE")
        print(value_tuteur_entreprise)
        value_tuteur_entreprise.append("TRUE")
        print(value_tuteur_entreprise)

    elif value_tuteur_entreprise[-1] == "TRUE":
        print("tuteur_entreprise -> FALSE")
        print(value_tuteur_entreprise)
        value_tuteur_entreprise.append("FALSE")
        print(value_tuteur_entreprise)

intvar_tuteur_entreprise = IntVar()
Checkbutton(root, text="tuteur_entreprise", variable=intvar_tuteur_entreprise, command=change_value_tuteur_entreprise, pady=-1, padx=-1).grid(column=5, row=1)

     
# global path_tuteur_first_name_year, value_tuteur_first_name_year, intvar_tuteur_first_name_year

path_tuteur_first_name_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_first_name_year"
value_tuteur_first_name_year = ["FALSE"]

def change_value_tuteur_first_name_year():
    global path_tuteur_first_name_year, value_tuteur_first_name_year#, intvar_tuteur_first_name_year
    print("tuteur_first_name_year")
    if value_tuteur_first_name_year[-1] == "FALSE":
        print("tuteur_first_name_year -> TRUE")
        print(value_tuteur_first_name_year)
        value_tuteur_first_name_year.append("TRUE")
        print(value_tuteur_first_name_year)

    elif value_tuteur_first_name_year[-1] == "TRUE":
        print("tuteur_first_name_year -> FALSE")
        print(value_tuteur_first_name_year)
        value_tuteur_first_name_year.append("FALSE")
        print(value_tuteur_first_name_year)

intvar_tuteur_first_name_year = IntVar()
Checkbutton(root, text="tuteur_first_name_year", variable=intvar_tuteur_first_name_year, command=change_value_tuteur_first_name_year, pady=-1, padx=-1).grid(column=5, row=2)

     
# global path_tuteur_id_house_year, value_tuteur_id_house_year, intvar_tuteur_id_house_year

path_tuteur_id_house_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_house_year"
value_tuteur_id_house_year = ["FALSE"]

def change_value_tuteur_id_house_year():
    global path_tuteur_id_house_year, value_tuteur_id_house_year#, intvar_tuteur_id_house_year
    print("tuteur_id_house_year")
    if value_tuteur_id_house_year[-1] == "FALSE":
        print("tuteur_id_house_year -> TRUE")
        print(value_tuteur_id_house_year)
        value_tuteur_id_house_year.append("TRUE")
        print(value_tuteur_id_house_year)

    elif value_tuteur_id_house_year[-1] == "TRUE":
        print("tuteur_id_house_year -> FALSE")
        print(value_tuteur_id_house_year)
        value_tuteur_id_house_year.append("FALSE")
        print(value_tuteur_id_house_year)

intvar_tuteur_id_house_year = IntVar()
Checkbutton(root, text="tuteur_id_house_year", variable=intvar_tuteur_id_house_year, command=change_value_tuteur_id_house_year, pady=-1, padx=-1).grid(column=5, row=3)

     
# global path_tuteur_second_name_entreprise, value_tuteur_second_name_entreprise, intvar_tuteur_second_name_entreprise

path_tuteur_second_name_entreprise = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_second_name_entreprise"
value_tuteur_second_name_entreprise = ["FALSE"]

def change_value_tuteur_second_name_entreprise():
    global path_tuteur_second_name_entreprise, value_tuteur_second_name_entreprise#, intvar_tuteur_second_name_entreprise
    print("tuteur_second_name_entreprise")
    if value_tuteur_second_name_entreprise[-1] == "FALSE":
        print("tuteur_second_name_entreprise -> TRUE")
        print(value_tuteur_second_name_entreprise)
        value_tuteur_second_name_entreprise.append("TRUE")
        print(value_tuteur_second_name_entreprise)

    elif value_tuteur_second_name_entreprise[-1] == "TRUE":
        print("tuteur_second_name_entreprise -> FALSE")
        print(value_tuteur_second_name_entreprise)
        value_tuteur_second_name_entreprise.append("FALSE")
        print(value_tuteur_second_name_entreprise)

intvar_tuteur_second_name_entreprise = IntVar()
Checkbutton(root, text="tuteur_second_name_entreprise", variable=intvar_tuteur_second_name_entreprise, command=change_value_tuteur_second_name_entreprise, pady=-1, padx=-1).grid(column=5, row=4)

     
# global path_tuteur_first_name_house, value_tuteur_first_name_house, intvar_tuteur_first_name_house

path_tuteur_first_name_house = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_first_name_house"
value_tuteur_first_name_house = ["FALSE"]

def change_value_tuteur_first_name_house():
    global path_tuteur_first_name_house, value_tuteur_first_name_house#, intvar_tuteur_first_name_house
    print("tuteur_first_name_house")
    if value_tuteur_first_name_house[-1] == "FALSE":
        print("tuteur_first_name_house -> TRUE")
        print(value_tuteur_first_name_house)
        value_tuteur_first_name_house.append("TRUE")
        print(value_tuteur_first_name_house)

    elif value_tuteur_first_name_house[-1] == "TRUE":
        print("tuteur_first_name_house -> FALSE")
        print(value_tuteur_first_name_house)
        value_tuteur_first_name_house.append("FALSE")
        print(value_tuteur_first_name_house)

intvar_tuteur_first_name_house = IntVar()
Checkbutton(root, text="tuteur_first_name_house", variable=intvar_tuteur_first_name_house, command=change_value_tuteur_first_name_house, pady=-1, padx=-1).grid(column=5, row=5)

     
# global path_tuteur_id_entreprise, value_tuteur_id_entreprise, intvar_tuteur_id_entreprise

path_tuteur_id_entreprise = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_entreprise"
value_tuteur_id_entreprise = ["FALSE"]

def change_value_tuteur_id_entreprise():
    global path_tuteur_id_entreprise, value_tuteur_id_entreprise#, intvar_tuteur_id_entreprise
    print("tuteur_id_entreprise")
    if value_tuteur_id_entreprise[-1] == "FALSE":
        print("tuteur_id_entreprise -> TRUE")
        print(value_tuteur_id_entreprise)
        value_tuteur_id_entreprise.append("TRUE")
        print(value_tuteur_id_entreprise)

    elif value_tuteur_id_entreprise[-1] == "TRUE":
        print("tuteur_id_entreprise -> FALSE")
        print(value_tuteur_id_entreprise)
        value_tuteur_id_entreprise.append("FALSE")
        print(value_tuteur_id_entreprise)

intvar_tuteur_id_entreprise = IntVar()
Checkbutton(root, text="tuteur_id_entreprise", variable=intvar_tuteur_id_entreprise, command=change_value_tuteur_id_entreprise, pady=-1, padx=-1).grid(column=5, row=6)

     
# global path_tuteur_house_entreprise_year, value_tuteur_house_entreprise_year, intvar_tuteur_house_entreprise_year

path_tuteur_house_entreprise_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_house_entreprise_year"
value_tuteur_house_entreprise_year = ["FALSE"]

def change_value_tuteur_house_entreprise_year():
    global path_tuteur_house_entreprise_year, value_tuteur_house_entreprise_year#, intvar_tuteur_house_entreprise_year
    print("tuteur_house_entreprise_year")
    if value_tuteur_house_entreprise_year[-1] == "FALSE":
        print("tuteur_house_entreprise_year -> TRUE")
        print(value_tuteur_house_entreprise_year)
        value_tuteur_house_entreprise_year.append("TRUE")
        print(value_tuteur_house_entreprise_year)

    elif value_tuteur_house_entreprise_year[-1] == "TRUE":
        print("tuteur_house_entreprise_year -> FALSE")
        print(value_tuteur_house_entreprise_year)
        value_tuteur_house_entreprise_year.append("FALSE")
        print(value_tuteur_house_entreprise_year)

intvar_tuteur_house_entreprise_year = IntVar()
Checkbutton(root, text="tuteur_house_entreprise_year", variable=intvar_tuteur_house_entreprise_year, command=change_value_tuteur_house_entreprise_year, pady=-1, padx=-1).grid(column=5, row=7)

     
# global path_tuteur_house_year, value_tuteur_house_year, intvar_tuteur_house_year

path_tuteur_house_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_house_year"
value_tuteur_house_year = ["FALSE"]

def change_value_tuteur_house_year():
    global path_tuteur_house_year, value_tuteur_house_year#, intvar_tuteur_house_year
    print("tuteur_house_year")
    if value_tuteur_house_year[-1] == "FALSE":
        print("tuteur_house_year -> TRUE")
        print(value_tuteur_house_year)
        value_tuteur_house_year.append("TRUE")
        print(value_tuteur_house_year)

    elif value_tuteur_house_year[-1] == "TRUE":
        print("tuteur_house_year -> FALSE")
        print(value_tuteur_house_year)
        value_tuteur_house_year.append("FALSE")
        print(value_tuteur_house_year)

intvar_tuteur_house_year = IntVar()
Checkbutton(root, text="tuteur_house_year", variable=intvar_tuteur_house_year, command=change_value_tuteur_house_year, pady=-1, padx=-1).grid(column=5, row=8)

     
# global path_tuteur_first_name_entreprise, value_tuteur_first_name_entreprise, intvar_tuteur_first_name_entreprise

path_tuteur_first_name_entreprise = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_first_name_entreprise"
value_tuteur_first_name_entreprise = ["FALSE"]

def change_value_tuteur_first_name_entreprise():
    global path_tuteur_first_name_entreprise, value_tuteur_first_name_entreprise#, intvar_tuteur_first_name_entreprise
    print("tuteur_first_name_entreprise")
    if value_tuteur_first_name_entreprise[-1] == "FALSE":
        print("tuteur_first_name_entreprise -> TRUE")
        print(value_tuteur_first_name_entreprise)
        value_tuteur_first_name_entreprise.append("TRUE")
        print(value_tuteur_first_name_entreprise)

    elif value_tuteur_first_name_entreprise[-1] == "TRUE":
        print("tuteur_first_name_entreprise -> FALSE")
        print(value_tuteur_first_name_entreprise)
        value_tuteur_first_name_entreprise.append("FALSE")
        print(value_tuteur_first_name_entreprise)

intvar_tuteur_first_name_entreprise = IntVar()
Checkbutton(root, text="tuteur_first_name_entreprise", variable=intvar_tuteur_first_name_entreprise, command=change_value_tuteur_first_name_entreprise, pady=-1, padx=-1).grid(column=5, row=9)

     
# global path_tuteur_second_name_house, value_tuteur_second_name_house, intvar_tuteur_second_name_house

path_tuteur_second_name_house = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_second_name_house"
value_tuteur_second_name_house = ["FALSE"]

def change_value_tuteur_second_name_house():
    global path_tuteur_second_name_house, value_tuteur_second_name_house#, intvar_tuteur_second_name_house
    print("tuteur_second_name_house")
    if value_tuteur_second_name_house[-1] == "FALSE":
        print("tuteur_second_name_house -> TRUE")
        print(value_tuteur_second_name_house)
        value_tuteur_second_name_house.append("TRUE")
        print(value_tuteur_second_name_house)

    elif value_tuteur_second_name_house[-1] == "TRUE":
        print("tuteur_second_name_house -> FALSE")
        print(value_tuteur_second_name_house)
        value_tuteur_second_name_house.append("FALSE")
        print(value_tuteur_second_name_house)

intvar_tuteur_second_name_house = IntVar()
Checkbutton(root, text="tuteur_second_name_house", variable=intvar_tuteur_second_name_house, command=change_value_tuteur_second_name_house, pady=-1, padx=-1).grid(column=5, row=10)

     
# global path_tuteur_id_year, value_tuteur_id_year, intvar_tuteur_id_year

path_tuteur_id_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_year"
value_tuteur_id_year = ["FALSE"]

def change_value_tuteur_id_year():
    global path_tuteur_id_year, value_tuteur_id_year#, intvar_tuteur_id_year
    print("tuteur_id_year")
    if value_tuteur_id_year[-1] == "FALSE":
        print("tuteur_id_year -> TRUE")
        print(value_tuteur_id_year)
        value_tuteur_id_year.append("TRUE")
        print(value_tuteur_id_year)

    elif value_tuteur_id_year[-1] == "TRUE":
        print("tuteur_id_year -> FALSE")
        print(value_tuteur_id_year)
        value_tuteur_id_year.append("FALSE")
        print(value_tuteur_id_year)

intvar_tuteur_id_year = IntVar()
Checkbutton(root, text="tuteur_id_year", variable=intvar_tuteur_id_year, command=change_value_tuteur_id_year, pady=-1, padx=-1).grid(column=5, row=11)

     
# global path_tuteur_id_first_name, value_tuteur_id_first_name, intvar_tuteur_id_first_name

path_tuteur_id_first_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_first_name"
value_tuteur_id_first_name = ["FALSE"]

def change_value_tuteur_id_first_name():
    global path_tuteur_id_first_name, value_tuteur_id_first_name#, intvar_tuteur_id_first_name
    print("tuteur_id_first_name")
    if value_tuteur_id_first_name[-1] == "FALSE":
        print("tuteur_id_first_name -> TRUE")
        print(value_tuteur_id_first_name)
        value_tuteur_id_first_name.append("TRUE")
        print(value_tuteur_id_first_name)

    elif value_tuteur_id_first_name[-1] == "TRUE":
        print("tuteur_id_first_name -> FALSE")
        print(value_tuteur_id_first_name)
        value_tuteur_id_first_name.append("FALSE")
        print(value_tuteur_id_first_name)

intvar_tuteur_id_first_name = IntVar()
Checkbutton(root, text="tuteur_id_first_name", variable=intvar_tuteur_id_first_name, command=change_value_tuteur_id_first_name, pady=-1, padx=-1).grid(column=5, row=12)

     
# global path_tuteur_second_name, value_tuteur_second_name, intvar_tuteur_second_name

path_tuteur_second_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_second_name"
value_tuteur_second_name = ["FALSE"]

def change_value_tuteur_second_name():
    global path_tuteur_second_name, value_tuteur_second_name#, intvar_tuteur_second_name
    print("tuteur_second_name")
    if value_tuteur_second_name[-1] == "FALSE":
        print("tuteur_second_name -> TRUE")
        print(value_tuteur_second_name)
        value_tuteur_second_name.append("TRUE")
        print(value_tuteur_second_name)

    elif value_tuteur_second_name[-1] == "TRUE":
        print("tuteur_second_name -> FALSE")
        print(value_tuteur_second_name)
        value_tuteur_second_name.append("FALSE")
        print(value_tuteur_second_name)

intvar_tuteur_second_name = IntVar()
Checkbutton(root, text="tuteur_second_name", variable=intvar_tuteur_second_name, command=change_value_tuteur_second_name, pady=-1, padx=-1).grid(column=5, row=13)

     
# global path_tuteur_id_house, value_tuteur_id_house, intvar_tuteur_id_house

path_tuteur_id_house = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_house"
value_tuteur_id_house = ["FALSE"]

def change_value_tuteur_id_house():
    global path_tuteur_id_house, value_tuteur_id_house#, intvar_tuteur_id_house
    print("tuteur_id_house")
    if value_tuteur_id_house[-1] == "FALSE":
        print("tuteur_id_house -> TRUE")
        print(value_tuteur_id_house)
        value_tuteur_id_house.append("TRUE")
        print(value_tuteur_id_house)

    elif value_tuteur_id_house[-1] == "TRUE":
        print("tuteur_id_house -> FALSE")
        print(value_tuteur_id_house)
        value_tuteur_id_house.append("FALSE")
        print(value_tuteur_id_house)

intvar_tuteur_id_house = IntVar()
Checkbutton(root, text="tuteur_id_house", variable=intvar_tuteur_id_house, command=change_value_tuteur_id_house, pady=-1, padx=-1).grid(column=5, row=14)

     
# global path_tuteur_house_entreprise, value_tuteur_house_entreprise, intvar_tuteur_house_entreprise

path_tuteur_house_entreprise = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_house_entreprise"
value_tuteur_house_entreprise = ["FALSE"]

def change_value_tuteur_house_entreprise():
    global path_tuteur_house_entreprise, value_tuteur_house_entreprise#, intvar_tuteur_house_entreprise
    print("tuteur_house_entreprise")
    if value_tuteur_house_entreprise[-1] == "FALSE":
        print("tuteur_house_entreprise -> TRUE")
        print(value_tuteur_house_entreprise)
        value_tuteur_house_entreprise.append("TRUE")
        print(value_tuteur_house_entreprise)

    elif value_tuteur_house_entreprise[-1] == "TRUE":
        print("tuteur_house_entreprise -> FALSE")
        print(value_tuteur_house_entreprise)
        value_tuteur_house_entreprise.append("FALSE")
        print(value_tuteur_house_entreprise)

intvar_tuteur_house_entreprise = IntVar()
Checkbutton(root, text="tuteur_house_entreprise", variable=intvar_tuteur_house_entreprise, command=change_value_tuteur_house_entreprise, pady=-1, padx=-1).grid(column=5, row=15)

     
# global path_tuteur_id_entreprise_year, value_tuteur_id_entreprise_year, intvar_tuteur_id_entreprise_year

path_tuteur_id_entreprise_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_entreprise_year"
value_tuteur_id_entreprise_year = ["FALSE"]

def change_value_tuteur_id_entreprise_year():
    global path_tuteur_id_entreprise_year, value_tuteur_id_entreprise_year#, intvar_tuteur_id_entreprise_year
    print("tuteur_id_entreprise_year")
    if value_tuteur_id_entreprise_year[-1] == "FALSE":
        print("tuteur_id_entreprise_year -> TRUE")
        print(value_tuteur_id_entreprise_year)
        value_tuteur_id_entreprise_year.append("TRUE")
        print(value_tuteur_id_entreprise_year)

    elif value_tuteur_id_entreprise_year[-1] == "TRUE":
        print("tuteur_id_entreprise_year -> FALSE")
        print(value_tuteur_id_entreprise_year)
        value_tuteur_id_entreprise_year.append("FALSE")
        print(value_tuteur_id_entreprise_year)

intvar_tuteur_id_entreprise_year = IntVar()
Checkbutton(root, text="tuteur_id_entreprise_year", variable=intvar_tuteur_id_entreprise_year, command=change_value_tuteur_id_entreprise_year, pady=-1, padx=-1).grid(column=5, row=16)

     
# global path_tuteur_id_second_name, value_tuteur_id_second_name, intvar_tuteur_id_second_name

path_tuteur_id_second_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_second_name"
value_tuteur_id_second_name = ["FALSE"]

def change_value_tuteur_id_second_name():
    global path_tuteur_id_second_name, value_tuteur_id_second_name#, intvar_tuteur_id_second_name
    print("tuteur_id_second_name")
    if value_tuteur_id_second_name[-1] == "FALSE":
        print("tuteur_id_second_name -> TRUE")
        print(value_tuteur_id_second_name)
        value_tuteur_id_second_name.append("TRUE")
        print(value_tuteur_id_second_name)

    elif value_tuteur_id_second_name[-1] == "TRUE":
        print("tuteur_id_second_name -> FALSE")
        print(value_tuteur_id_second_name)
        value_tuteur_id_second_name.append("FALSE")
        print(value_tuteur_id_second_name)

intvar_tuteur_id_second_name = IntVar()
Checkbutton(root, text="tuteur_id_second_name", variable=intvar_tuteur_id_second_name, command=change_value_tuteur_id_second_name, pady=-1, padx=-1).grid(column=5, row=17)

     
# global path_tuteur_id, value_tuteur_id, intvar_tuteur_id

path_tuteur_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id"
value_tuteur_id = ["FALSE"]

def change_value_tuteur_id():
    global path_tuteur_id, value_tuteur_id#, intvar_tuteur_id
    print("tuteur_id")
    if value_tuteur_id[-1] == "FALSE":
        print("tuteur_id -> TRUE")
        print(value_tuteur_id)
        value_tuteur_id.append("TRUE")
        print(value_tuteur_id)

    elif value_tuteur_id[-1] == "TRUE":
        print("tuteur_id -> FALSE")
        print(value_tuteur_id)
        value_tuteur_id.append("FALSE")
        print(value_tuteur_id)

intvar_tuteur_id = IntVar()
Checkbutton(root, text="tuteur_id", variable=intvar_tuteur_id, command=change_value_tuteur_id, pady=-1, padx=-1).grid(column=5, row=18)

     
# global path_tuteur_second_name_year, value_tuteur_second_name_year, intvar_tuteur_second_name_year

path_tuteur_second_name_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_second_name_year"
value_tuteur_second_name_year = ["FALSE"]

def change_value_tuteur_second_name_year():
    global path_tuteur_second_name_year, value_tuteur_second_name_year#, intvar_tuteur_second_name_year
    print("tuteur_second_name_year")
    if value_tuteur_second_name_year[-1] == "FALSE":
        print("tuteur_second_name_year -> TRUE")
        print(value_tuteur_second_name_year)
        value_tuteur_second_name_year.append("TRUE")
        print(value_tuteur_second_name_year)

    elif value_tuteur_second_name_year[-1] == "TRUE":
        print("tuteur_second_name_year -> FALSE")
        print(value_tuteur_second_name_year)
        value_tuteur_second_name_year.append("FALSE")
        print(value_tuteur_second_name_year)

intvar_tuteur_second_name_year = IntVar()
Checkbutton(root, text="tuteur_second_name_year", variable=intvar_tuteur_second_name_year, command=change_value_tuteur_second_name_year, pady=-1, padx=-1).grid(column=5, row=19)

     
# global path_tuteur_entreprise_year, value_tuteur_entreprise_year, intvar_tuteur_entreprise_year

path_tuteur_entreprise_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_entreprise_year"
value_tuteur_entreprise_year = ["FALSE"]

def change_value_tuteur_entreprise_year():
    global path_tuteur_entreprise_year, value_tuteur_entreprise_year#, intvar_tuteur_entreprise_year
    print("tuteur_entreprise_year")
    if value_tuteur_entreprise_year[-1] == "FALSE":
        print("tuteur_entreprise_year -> TRUE")
        print(value_tuteur_entreprise_year)
        value_tuteur_entreprise_year.append("TRUE")
        print(value_tuteur_entreprise_year)

    elif value_tuteur_entreprise_year[-1] == "TRUE":
        print("tuteur_entreprise_year -> FALSE")
        print(value_tuteur_entreprise_year)
        value_tuteur_entreprise_year.append("FALSE")
        print(value_tuteur_entreprise_year)

intvar_tuteur_entreprise_year = IntVar()
Checkbutton(root, text="tuteur_entreprise_year", variable=intvar_tuteur_entreprise_year, command=change_value_tuteur_entreprise_year, pady=-1, padx=-1).grid(column=5, row=20)

     
# global path_tuteur_id_house_entreprise, value_tuteur_id_house_entreprise, intvar_tuteur_id_house_entreprise

path_tuteur_id_house_entreprise = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_house_entreprise"
value_tuteur_id_house_entreprise = ["FALSE"]

def change_value_tuteur_id_house_entreprise():
    global path_tuteur_id_house_entreprise, value_tuteur_id_house_entreprise#, intvar_tuteur_id_house_entreprise
    print("tuteur_id_house_entreprise")
    if value_tuteur_id_house_entreprise[-1] == "FALSE":
        print("tuteur_id_house_entreprise -> TRUE")
        print(value_tuteur_id_house_entreprise)
        value_tuteur_id_house_entreprise.append("TRUE")
        print(value_tuteur_id_house_entreprise)

    elif value_tuteur_id_house_entreprise[-1] == "TRUE":
        print("tuteur_id_house_entreprise -> FALSE")
        print(value_tuteur_id_house_entreprise)
        value_tuteur_id_house_entreprise.append("FALSE")
        print(value_tuteur_id_house_entreprise)

intvar_tuteur_id_house_entreprise = IntVar()
Checkbutton(root, text="tuteur_id_house_entreprise", variable=intvar_tuteur_id_house_entreprise, command=change_value_tuteur_id_house_entreprise, pady=-1, padx=-1).grid(column=5, row=21)

     
# global path_tuteur_house, value_tuteur_house, intvar_tuteur_house

path_tuteur_house = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_house"
value_tuteur_house = ["FALSE"]

def change_value_tuteur_house():
    global path_tuteur_house, value_tuteur_house#, intvar_tuteur_house
    print("tuteur_house")
    if value_tuteur_house[-1] == "FALSE":
        print("tuteur_house -> TRUE")
        print(value_tuteur_house)
        value_tuteur_house.append("TRUE")
        print(value_tuteur_house)

    elif value_tuteur_house[-1] == "TRUE":
        print("tuteur_house -> FALSE")
        print(value_tuteur_house)
        value_tuteur_house.append("FALSE")
        print(value_tuteur_house)

intvar_tuteur_house = IntVar()
Checkbutton(root, text="tuteur_house", variable=intvar_tuteur_house, command=change_value_tuteur_house, pady=-1, padx=-1).grid(column=5, row=22)

     
# global path_entreprise_staff_id, value_entreprise_staff_id, intvar_entreprise_staff_id

path_entreprise_staff_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_id"
value_entreprise_staff_id = ["FALSE"]

def change_value_entreprise_staff_id():
    global path_entreprise_staff_id, value_entreprise_staff_id#, intvar_entreprise_staff_id
    print("entreprise_staff_id")
    if value_entreprise_staff_id[-1] == "FALSE":
        print("entreprise_staff_id -> TRUE")
        print(value_entreprise_staff_id)
        value_entreprise_staff_id.append("TRUE")
        print(value_entreprise_staff_id)

    elif value_entreprise_staff_id[-1] == "TRUE":
        print("entreprise_staff_id -> FALSE")
        print(value_entreprise_staff_id)
        value_entreprise_staff_id.append("FALSE")
        print(value_entreprise_staff_id)

intvar_entreprise_staff_id = IntVar()
Checkbutton(root, text="entreprise_staff_id", variable=intvar_entreprise_staff_id, command=change_value_entreprise_staff_id, pady=-1, padx=-1).grid(column=5, row=23)

     
# global path_entreprise_staff_post_year, value_entreprise_staff_post_year, intvar_entreprise_staff_post_year

path_entreprise_staff_post_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_post_year"
value_entreprise_staff_post_year = ["FALSE"]

def change_value_entreprise_staff_post_year():
    global path_entreprise_staff_post_year, value_entreprise_staff_post_year#, intvar_entreprise_staff_post_year
    print("entreprise_staff_post_year")
    if value_entreprise_staff_post_year[-1] == "FALSE":
        print("entreprise_staff_post_year -> TRUE")
        print(value_entreprise_staff_post_year)
        value_entreprise_staff_post_year.append("TRUE")
        print(value_entreprise_staff_post_year)

    elif value_entreprise_staff_post_year[-1] == "TRUE":
        print("entreprise_staff_post_year -> FALSE")
        print(value_entreprise_staff_post_year)
        value_entreprise_staff_post_year.append("FALSE")
        print(value_entreprise_staff_post_year)

intvar_entreprise_staff_post_year = IntVar()
Checkbutton(root, text="entreprise_staff_post_year", variable=intvar_entreprise_staff_post_year, command=change_value_entreprise_staff_post_year, pady=-1, padx=-1).grid(column=5, row=24)

     
# global path_entreprise_staff_id_year, value_entreprise_staff_id_year, intvar_entreprise_staff_id_year

path_entreprise_staff_id_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_id_year"
value_entreprise_staff_id_year = ["FALSE"]

def change_value_entreprise_staff_id_year():
    global path_entreprise_staff_id_year, value_entreprise_staff_id_year#, intvar_entreprise_staff_id_year
    print("entreprise_staff_id_year")
    if value_entreprise_staff_id_year[-1] == "FALSE":
        print("entreprise_staff_id_year -> TRUE")
        print(value_entreprise_staff_id_year)
        value_entreprise_staff_id_year.append("TRUE")
        print(value_entreprise_staff_id_year)

    elif value_entreprise_staff_id_year[-1] == "TRUE":
        print("entreprise_staff_id_year -> FALSE")
        print(value_entreprise_staff_id_year)
        value_entreprise_staff_id_year.append("FALSE")
        print(value_entreprise_staff_id_year)

intvar_entreprise_staff_id_year = IntVar()
Checkbutton(root, text="entreprise_staff_id_year", variable=intvar_entreprise_staff_id_year, command=change_value_entreprise_staff_id_year, pady=-1, padx=-1).grid(column=5, row=25)

     
# global path_entreprise_staff_post, value_entreprise_staff_post, intvar_entreprise_staff_post

path_entreprise_staff_post = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_post"
value_entreprise_staff_post = ["FALSE"]

def change_value_entreprise_staff_post():
    global path_entreprise_staff_post, value_entreprise_staff_post#, intvar_entreprise_staff_post
    print("entreprise_staff_post")
    if value_entreprise_staff_post[-1] == "FALSE":
        print("entreprise_staff_post -> TRUE")
        print(value_entreprise_staff_post)
        value_entreprise_staff_post.append("TRUE")
        print(value_entreprise_staff_post)

    elif value_entreprise_staff_post[-1] == "TRUE":
        print("entreprise_staff_post -> FALSE")
        print(value_entreprise_staff_post)
        value_entreprise_staff_post.append("FALSE")
        print(value_entreprise_staff_post)

intvar_entreprise_staff_post = IntVar()
Checkbutton(root, text="entreprise_staff_post", variable=intvar_entreprise_staff_post, command=change_value_entreprise_staff_post, pady=-1, padx=-1).grid(column=5, row=26)

     
# global path_entreprise_staff_id_post, value_entreprise_staff_id_post, intvar_entreprise_staff_id_post

path_entreprise_staff_id_post = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_id_post"
value_entreprise_staff_id_post = ["FALSE"]

def change_value_entreprise_staff_id_post():
    global path_entreprise_staff_id_post, value_entreprise_staff_id_post#, intvar_entreprise_staff_id_post
    print("entreprise_staff_id_post")
    if value_entreprise_staff_id_post[-1] == "FALSE":
        print("entreprise_staff_id_post -> TRUE")
        print(value_entreprise_staff_id_post)
        value_entreprise_staff_id_post.append("TRUE")
        print(value_entreprise_staff_id_post)

    elif value_entreprise_staff_id_post[-1] == "TRUE":
        print("entreprise_staff_id_post -> FALSE")
        print(value_entreprise_staff_id_post)
        value_entreprise_staff_id_post.append("FALSE")
        print(value_entreprise_staff_id_post)

intvar_entreprise_staff_id_post = IntVar()
Checkbutton(root, text="entreprise_staff_id_post", variable=intvar_entreprise_staff_id_post, command=change_value_entreprise_staff_id_post, pady=-1, padx=-1).grid(column=5, row=27)

     
# global path_entreprise_staff_entreprise_id, value_entreprise_staff_entreprise_id, intvar_entreprise_staff_entreprise_id

path_entreprise_staff_entreprise_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_entreprise_id"
value_entreprise_staff_entreprise_id = ["FALSE"]

def change_value_entreprise_staff_entreprise_id():
    global path_entreprise_staff_entreprise_id, value_entreprise_staff_entreprise_id#, intvar_entreprise_staff_entreprise_id
    print("entreprise_staff_entreprise_id")
    if value_entreprise_staff_entreprise_id[-1] == "FALSE":
        print("entreprise_staff_entreprise_id -> TRUE")
        print(value_entreprise_staff_entreprise_id)
        value_entreprise_staff_entreprise_id.append("TRUE")
        print(value_entreprise_staff_entreprise_id)

    elif value_entreprise_staff_entreprise_id[-1] == "TRUE":
        print("entreprise_staff_entreprise_id -> FALSE")
        print(value_entreprise_staff_entreprise_id)
        value_entreprise_staff_entreprise_id.append("FALSE")
        print(value_entreprise_staff_entreprise_id)

intvar_entreprise_staff_entreprise_id = IntVar()
Checkbutton(root, text="entreprise_staff_entreprise_id", variable=intvar_entreprise_staff_entreprise_id, command=change_value_entreprise_staff_entreprise_id, pady=-1, padx=-1).grid(column=5, row=28)

     
# global path_entreprise_staff_staff_id, value_entreprise_staff_staff_id, intvar_entreprise_staff_staff_id

path_entreprise_staff_staff_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_staff_id"
value_entreprise_staff_staff_id = ["FALSE"]

def change_value_entreprise_staff_staff_id():
    global path_entreprise_staff_staff_id, value_entreprise_staff_staff_id#, intvar_entreprise_staff_staff_id
    print("entreprise_staff_staff_id")
    if value_entreprise_staff_staff_id[-1] == "FALSE":
        print("entreprise_staff_staff_id -> TRUE")
        print(value_entreprise_staff_staff_id)
        value_entreprise_staff_staff_id.append("TRUE")
        print(value_entreprise_staff_staff_id)

    elif value_entreprise_staff_staff_id[-1] == "TRUE":
        print("entreprise_staff_staff_id -> FALSE")
        print(value_entreprise_staff_staff_id)
        value_entreprise_staff_staff_id.append("FALSE")
        print(value_entreprise_staff_staff_id)

intvar_entreprise_staff_staff_id = IntVar()
Checkbutton(root, text="entreprise_staff_staff_id", variable=intvar_entreprise_staff_staff_id, command=change_value_entreprise_staff_staff_id, pady=-1, padx=-1).grid(column=5, row=29)

     
# global path_entreprise_staff_year, value_entreprise_staff_year, intvar_entreprise_staff_year

path_entreprise_staff_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_year"
value_entreprise_staff_year = ["FALSE"]

def change_value_entreprise_staff_year():
    global path_entreprise_staff_year, value_entreprise_staff_year#, intvar_entreprise_staff_year
    print("entreprise_staff_year")
    if value_entreprise_staff_year[-1] == "FALSE":
        print("entreprise_staff_year -> TRUE")
        print(value_entreprise_staff_year)
        value_entreprise_staff_year.append("TRUE")
        print(value_entreprise_staff_year)

    elif value_entreprise_staff_year[-1] == "TRUE":
        print("entreprise_staff_year -> FALSE")
        print(value_entreprise_staff_year)
        value_entreprise_staff_year.append("FALSE")
        print(value_entreprise_staff_year)

intvar_entreprise_staff_year = IntVar()
Checkbutton(root, text="entreprise_staff_year", variable=intvar_entreprise_staff_year, command=change_value_entreprise_staff_year, pady=-1, padx=-1).grid(column=5, row=30)

     
# global path_student_iam_tuteur_id, value_student_iam_tuteur_id, intvar_student_iam_tuteur_id

path_student_iam_tuteur_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_iam_tuteur_id"
value_student_iam_tuteur_id = ["FALSE"]

def change_value_student_iam_tuteur_id():
    global path_student_iam_tuteur_id, value_student_iam_tuteur_id#, intvar_student_iam_tuteur_id
    print("student_iam_tuteur_id")
    if value_student_iam_tuteur_id[-1] == "FALSE":
        print("student_iam_tuteur_id -> TRUE")
        print(value_student_iam_tuteur_id)
        value_student_iam_tuteur_id.append("TRUE")
        print(value_student_iam_tuteur_id)

    elif value_student_iam_tuteur_id[-1] == "TRUE":
        print("student_iam_tuteur_id -> FALSE")
        print(value_student_iam_tuteur_id)
        value_student_iam_tuteur_id.append("FALSE")
        print(value_student_iam_tuteur_id)

intvar_student_iam_tuteur_id = IntVar()
Checkbutton(root, text="student_iam_tuteur_id", variable=intvar_student_iam_tuteur_id, command=change_value_student_iam_tuteur_id, pady=-1, padx=-1).grid(column=6, row=0)

     
# global path_student_iam_year, value_student_iam_year, intvar_student_iam_year

path_student_iam_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_iam_year"
value_student_iam_year = ["FALSE"]

def change_value_student_iam_year():
    global path_student_iam_year, value_student_iam_year#, intvar_student_iam_year
    print("student_iam_year")
    if value_student_iam_year[-1] == "FALSE":
        print("student_iam_year -> TRUE")
        print(value_student_iam_year)
        value_student_iam_year.append("TRUE")
        print(value_student_iam_year)

    elif value_student_iam_year[-1] == "TRUE":
        print("student_iam_year -> FALSE")
        print(value_student_iam_year)
        value_student_iam_year.append("FALSE")
        print(value_student_iam_year)

intvar_student_iam_year = IntVar()
Checkbutton(root, text="student_iam_year", variable=intvar_student_iam_year, command=change_value_student_iam_year, pady=-1, padx=-1).grid(column=6, row=1)

     
# global path_student_tuteur_id, value_student_tuteur_id, intvar_student_tuteur_id

path_student_tuteur_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_tuteur_id"
value_student_tuteur_id = ["FALSE"]

def change_value_student_tuteur_id():
    global path_student_tuteur_id, value_student_tuteur_id#, intvar_student_tuteur_id
    print("student_tuteur_id")
    if value_student_tuteur_id[-1] == "FALSE":
        print("student_tuteur_id -> TRUE")
        print(value_student_tuteur_id)
        value_student_tuteur_id.append("TRUE")
        print(value_student_tuteur_id)

    elif value_student_tuteur_id[-1] == "TRUE":
        print("student_tuteur_id -> FALSE")
        print(value_student_tuteur_id)
        value_student_tuteur_id.append("FALSE")
        print(value_student_tuteur_id)

intvar_student_tuteur_id = IntVar()
Checkbutton(root, text="student_tuteur_id", variable=intvar_student_tuteur_id, command=change_value_student_tuteur_id, pady=-1, padx=-1).grid(column=6, row=2)

     
# global path_student_first_name_iam, value_student_first_name_iam, intvar_student_first_name_iam

path_student_first_name_iam = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_first_name_iam"
value_student_first_name_iam = ["FALSE"]

def change_value_student_first_name_iam():
    global path_student_first_name_iam, value_student_first_name_iam#, intvar_student_first_name_iam
    print("student_first_name_iam")
    if value_student_first_name_iam[-1] == "FALSE":
        print("student_first_name_iam -> TRUE")
        print(value_student_first_name_iam)
        value_student_first_name_iam.append("TRUE")
        print(value_student_first_name_iam)

    elif value_student_first_name_iam[-1] == "TRUE":
        print("student_first_name_iam -> FALSE")
        print(value_student_first_name_iam)
        value_student_first_name_iam.append("FALSE")
        print(value_student_first_name_iam)

intvar_student_first_name_iam = IntVar()
Checkbutton(root, text="student_first_name_iam", variable=intvar_student_first_name_iam, command=change_value_student_first_name_iam, pady=-1, padx=-1).grid(column=6, row=3)

     
# global path_student_id_tuteur_id, value_student_id_tuteur_id, intvar_student_id_tuteur_id

path_student_id_tuteur_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_tuteur_id"
value_student_id_tuteur_id = ["FALSE"]

def change_value_student_id_tuteur_id():
    global path_student_id_tuteur_id, value_student_id_tuteur_id#, intvar_student_id_tuteur_id
    print("student_id_tuteur_id")
    if value_student_id_tuteur_id[-1] == "FALSE":
        print("student_id_tuteur_id -> TRUE")
        print(value_student_id_tuteur_id)
        value_student_id_tuteur_id.append("TRUE")
        print(value_student_id_tuteur_id)

    elif value_student_id_tuteur_id[-1] == "TRUE":
        print("student_id_tuteur_id -> FALSE")
        print(value_student_id_tuteur_id)
        value_student_id_tuteur_id.append("FALSE")
        print(value_student_id_tuteur_id)

intvar_student_id_tuteur_id = IntVar()
Checkbutton(root, text="student_id_tuteur_id", variable=intvar_student_id_tuteur_id, command=change_value_student_id_tuteur_id, pady=-1, padx=-1).grid(column=6, row=4)

     
# global path_student_second_name_year, value_student_second_name_year, intvar_student_second_name_year

path_student_second_name_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_second_name_year"
value_student_second_name_year = ["FALSE"]

def change_value_student_second_name_year():
    global path_student_second_name_year, value_student_second_name_year#, intvar_student_second_name_year
    print("student_second_name_year")
    if value_student_second_name_year[-1] == "FALSE":
        print("student_second_name_year -> TRUE")
        print(value_student_second_name_year)
        value_student_second_name_year.append("TRUE")
        print(value_student_second_name_year)

    elif value_student_second_name_year[-1] == "TRUE":
        print("student_second_name_year -> FALSE")
        print(value_student_second_name_year)
        value_student_second_name_year.append("FALSE")
        print(value_student_second_name_year)

intvar_student_second_name_year = IntVar()
Checkbutton(root, text="student_second_name_year", variable=intvar_student_second_name_year, command=change_value_student_second_name_year, pady=-1, padx=-1).grid(column=6, row=5)

     
# global path_student_id_class_id, value_student_id_class_id, intvar_student_id_class_id

path_student_id_class_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_class_id"
value_student_id_class_id = ["FALSE"]

def change_value_student_id_class_id():
    global path_student_id_class_id, value_student_id_class_id#, intvar_student_id_class_id
    print("student_id_class_id")
    if value_student_id_class_id[-1] == "FALSE":
        print("student_id_class_id -> TRUE")
        print(value_student_id_class_id)
        value_student_id_class_id.append("TRUE")
        print(value_student_id_class_id)

    elif value_student_id_class_id[-1] == "TRUE":
        print("student_id_class_id -> FALSE")
        print(value_student_id_class_id)
        value_student_id_class_id.append("FALSE")
        print(value_student_id_class_id)

intvar_student_id_class_id = IntVar()
Checkbutton(root, text="student_id_class_id", variable=intvar_student_id_class_id, command=change_value_student_id_class_id, pady=-1, padx=-1).grid(column=6, row=6)

     
# global path_student_year, value_student_year, intvar_student_year

path_student_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_year"
value_student_year = ["FALSE"]

def change_value_student_year():
    global path_student_year, value_student_year#, intvar_student_year
    print("student_year")
    if value_student_year[-1] == "FALSE":
        print("student_year -> TRUE")
        print(value_student_year)
        value_student_year.append("TRUE")
        print(value_student_year)

    elif value_student_year[-1] == "TRUE":
        print("student_year -> FALSE")
        print(value_student_year)
        value_student_year.append("FALSE")
        print(value_student_year)

intvar_student_year = IntVar()
Checkbutton(root, text="student_year", variable=intvar_student_year, command=change_value_student_year, pady=-1, padx=-1).grid(column=6, row=7)

     
# global path_student_iam, value_student_iam, intvar_student_iam

path_student_iam = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_iam"
value_student_iam = ["FALSE"]

def change_value_student_iam():
    global path_student_iam, value_student_iam#, intvar_student_iam
    print("student_iam")
    if value_student_iam[-1] == "FALSE":
        print("student_iam -> TRUE")
        print(value_student_iam)
        value_student_iam.append("TRUE")
        print(value_student_iam)

    elif value_student_iam[-1] == "TRUE":
        print("student_iam -> FALSE")
        print(value_student_iam)
        value_student_iam.append("FALSE")
        print(value_student_iam)

intvar_student_iam = IntVar()
Checkbutton(root, text="student_iam", variable=intvar_student_iam, command=change_value_student_iam, pady=-1, padx=-1).grid(column=6, row=8)

     
# global path_student_id_year, value_student_id_year, intvar_student_id_year

path_student_id_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_year"
value_student_id_year = ["FALSE"]

def change_value_student_id_year():
    global path_student_id_year, value_student_id_year#, intvar_student_id_year
    print("student_id_year")
    if value_student_id_year[-1] == "FALSE":
        print("student_id_year -> TRUE")
        print(value_student_id_year)
        value_student_id_year.append("TRUE")
        print(value_student_id_year)

    elif value_student_id_year[-1] == "TRUE":
        print("student_id_year -> FALSE")
        print(value_student_id_year)
        value_student_id_year.append("FALSE")
        print(value_student_id_year)

intvar_student_id_year = IntVar()
Checkbutton(root, text="student_id_year", variable=intvar_student_id_year, command=change_value_student_id_year, pady=-1, padx=-1).grid(column=6, row=9)

     
# global path_student_class_id, value_student_class_id, intvar_student_class_id

path_student_class_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_class_id"
value_student_class_id = ["FALSE"]

def change_value_student_class_id():
    global path_student_class_id, value_student_class_id#, intvar_student_class_id
    print("student_class_id")
    if value_student_class_id[-1] == "FALSE":
        print("student_class_id -> TRUE")
        print(value_student_class_id)
        value_student_class_id.append("TRUE")
        print(value_student_class_id)

    elif value_student_class_id[-1] == "TRUE":
        print("student_class_id -> FALSE")
        print(value_student_class_id)
        value_student_class_id.append("FALSE")
        print(value_student_class_id)

intvar_student_class_id = IntVar()
Checkbutton(root, text="student_class_id", variable=intvar_student_class_id, command=change_value_student_class_id, pady=-1, padx=-1).grid(column=6, row=10)

     
# global path_student_id_first_name, value_student_id_first_name, intvar_student_id_first_name

path_student_id_first_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_first_name"
value_student_id_first_name = ["FALSE"]

def change_value_student_id_first_name():
    global path_student_id_first_name, value_student_id_first_name#, intvar_student_id_first_name
    print("student_id_first_name")
    if value_student_id_first_name[-1] == "FALSE":
        print("student_id_first_name -> TRUE")
        print(value_student_id_first_name)
        value_student_id_first_name.append("TRUE")
        print(value_student_id_first_name)

    elif value_student_id_first_name[-1] == "TRUE":
        print("student_id_first_name -> FALSE")
        print(value_student_id_first_name)
        value_student_id_first_name.append("FALSE")
        print(value_student_id_first_name)

intvar_student_id_first_name = IntVar()
Checkbutton(root, text="student_id_first_name", variable=intvar_student_id_first_name, command=change_value_student_id_first_name, pady=-1, padx=-1).grid(column=6, row=11)

     
# global path_student_first_name_year, value_student_first_name_year, intvar_student_first_name_year

path_student_first_name_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_first_name_year"
value_student_first_name_year = ["FALSE"]

def change_value_student_first_name_year():
    global path_student_first_name_year, value_student_first_name_year#, intvar_student_first_name_year
    print("student_first_name_year")
    if value_student_first_name_year[-1] == "FALSE":
        print("student_first_name_year -> TRUE")
        print(value_student_first_name_year)
        value_student_first_name_year.append("TRUE")
        print(value_student_first_name_year)

    elif value_student_first_name_year[-1] == "TRUE":
        print("student_first_name_year -> FALSE")
        print(value_student_first_name_year)
        value_student_first_name_year.append("FALSE")
        print(value_student_first_name_year)

intvar_student_first_name_year = IntVar()
Checkbutton(root, text="student_first_name_year", variable=intvar_student_first_name_year, command=change_value_student_first_name_year, pady=-1, padx=-1).grid(column=6, row=12)

     
# global path_student_id, value_student_id, intvar_student_id

path_student_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id"
value_student_id = ["FALSE"]

def change_value_student_id():
    global path_student_id, value_student_id#, intvar_student_id
    print("student_id")
    if value_student_id[-1] == "FALSE":
        print("student_id -> TRUE")
        print(value_student_id)
        value_student_id.append("TRUE")
        print(value_student_id)

    elif value_student_id[-1] == "TRUE":
        print("student_id -> FALSE")
        print(value_student_id)
        value_student_id.append("FALSE")
        print(value_student_id)

intvar_student_id = IntVar()
Checkbutton(root, text="student_id", variable=intvar_student_id, command=change_value_student_id, pady=-1, padx=-1).grid(column=6, row=13)

     
# global path_student_id_second_name, value_student_id_second_name, intvar_student_id_second_name

path_student_id_second_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_second_name"
value_student_id_second_name = ["FALSE"]

def change_value_student_id_second_name():
    global path_student_id_second_name, value_student_id_second_name#, intvar_student_id_second_name
    print("student_id_second_name")
    if value_student_id_second_name[-1] == "FALSE":
        print("student_id_second_name -> TRUE")
        print(value_student_id_second_name)
        value_student_id_second_name.append("TRUE")
        print(value_student_id_second_name)

    elif value_student_id_second_name[-1] == "TRUE":
        print("student_id_second_name -> FALSE")
        print(value_student_id_second_name)
        value_student_id_second_name.append("FALSE")
        print(value_student_id_second_name)

intvar_student_id_second_name = IntVar()
Checkbutton(root, text="student_id_second_name", variable=intvar_student_id_second_name, command=change_value_student_id_second_name, pady=-1, padx=-1).grid(column=6, row=14)

     
# global path_student_id_iam, value_student_id_iam, intvar_student_id_iam

path_student_id_iam = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_iam"
value_student_id_iam = ["FALSE"]

def change_value_student_id_iam():
    global path_student_id_iam, value_student_id_iam#, intvar_student_id_iam
    print("student_id_iam")
    if value_student_id_iam[-1] == "FALSE":
        print("student_id_iam -> TRUE")
        print(value_student_id_iam)
        value_student_id_iam.append("TRUE")
        print(value_student_id_iam)

    elif value_student_id_iam[-1] == "TRUE":
        print("student_id_iam -> FALSE")
        print(value_student_id_iam)
        value_student_id_iam.append("FALSE")
        print(value_student_id_iam)

intvar_student_id_iam = IntVar()
Checkbutton(root, text="student_id_iam", variable=intvar_student_id_iam, command=change_value_student_id_iam, pady=-1, padx=-1).grid(column=6, row=15)

     
# global path_student_second_name, value_student_second_name, intvar_student_second_name

path_student_second_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_second_name"
value_student_second_name = ["FALSE"]

def change_value_student_second_name():
    global path_student_second_name, value_student_second_name#, intvar_student_second_name
    print("student_second_name")
    if value_student_second_name[-1] == "FALSE":
        print("student_second_name -> TRUE")
        print(value_student_second_name)
        value_student_second_name.append("TRUE")
        print(value_student_second_name)

    elif value_student_second_name[-1] == "TRUE":
        print("student_second_name -> FALSE")
        print(value_student_second_name)
        value_student_second_name.append("FALSE")
        print(value_student_second_name)

intvar_student_second_name = IntVar()
Checkbutton(root, text="student_second_name", variable=intvar_student_second_name, command=change_value_student_second_name, pady=-1, padx=-1).grid(column=6, row=16)

     
# global path_student_first_name, value_student_first_name, intvar_student_first_name

path_student_first_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_first_name"
value_student_first_name = ["FALSE"]

def change_value_student_first_name():
    global path_student_first_name, value_student_first_name#, intvar_student_first_name
    print("student_first_name")
    if value_student_first_name[-1] == "FALSE":
        print("student_first_name -> TRUE")
        print(value_student_first_name)
        value_student_first_name.append("TRUE")
        print(value_student_first_name)

    elif value_student_first_name[-1] == "TRUE":
        print("student_first_name -> FALSE")
        print(value_student_first_name)
        value_student_first_name.append("FALSE")
        print(value_student_first_name)

intvar_student_first_name = IntVar()
Checkbutton(root, text="student_first_name", variable=intvar_student_first_name, command=change_value_student_first_name, pady=-1, padx=-1).grid(column=6, row=17)

     
# global path_student_tuteur_id_year, value_student_tuteur_id_year, intvar_student_tuteur_id_year

path_student_tuteur_id_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_tuteur_id_year"
value_student_tuteur_id_year = ["FALSE"]

def change_value_student_tuteur_id_year():
    global path_student_tuteur_id_year, value_student_tuteur_id_year#, intvar_student_tuteur_id_year
    print("student_tuteur_id_year")
    if value_student_tuteur_id_year[-1] == "FALSE":
        print("student_tuteur_id_year -> TRUE")
        print(value_student_tuteur_id_year)
        value_student_tuteur_id_year.append("TRUE")
        print(value_student_tuteur_id_year)

    elif value_student_tuteur_id_year[-1] == "TRUE":
        print("student_tuteur_id_year -> FALSE")
        print(value_student_tuteur_id_year)
        value_student_tuteur_id_year.append("FALSE")
        print(value_student_tuteur_id_year)

intvar_student_tuteur_id_year = IntVar()
Checkbutton(root, text="student_tuteur_id_year", variable=intvar_student_tuteur_id_year, command=change_value_student_tuteur_id_year, pady=-1, padx=-1).grid(column=6, row=18)

     
# global path_student_iam_class_id, value_student_iam_class_id, intvar_student_iam_class_id

path_student_iam_class_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_iam_class_id"
value_student_iam_class_id = ["FALSE"]

def change_value_student_iam_class_id():
    global path_student_iam_class_id, value_student_iam_class_id#, intvar_student_iam_class_id
    print("student_iam_class_id")
    if value_student_iam_class_id[-1] == "FALSE":
        print("student_iam_class_id -> TRUE")
        print(value_student_iam_class_id)
        value_student_iam_class_id.append("TRUE")
        print(value_student_iam_class_id)

    elif value_student_iam_class_id[-1] == "TRUE":
        print("student_iam_class_id -> FALSE")
        print(value_student_iam_class_id)
        value_student_iam_class_id.append("FALSE")
        print(value_student_iam_class_id)

intvar_student_iam_class_id = IntVar()
Checkbutton(root, text="student_iam_class_id", variable=intvar_student_iam_class_id, command=change_value_student_iam_class_id, pady=-1, padx=-1).grid(column=6, row=19)

     
# global path_student_class_id_year, value_student_class_id_year, intvar_student_class_id_year

path_student_class_id_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_class_id_year"
value_student_class_id_year = ["FALSE"]

def change_value_student_class_id_year():
    global path_student_class_id_year, value_student_class_id_year#, intvar_student_class_id_year
    print("student_class_id_year")
    if value_student_class_id_year[-1] == "FALSE":
        print("student_class_id_year -> TRUE")
        print(value_student_class_id_year)
        value_student_class_id_year.append("TRUE")
        print(value_student_class_id_year)

    elif value_student_class_id_year[-1] == "TRUE":
        print("student_class_id_year -> FALSE")
        print(value_student_class_id_year)
        value_student_class_id_year.append("FALSE")
        print(value_student_class_id_year)

intvar_student_class_id_year = IntVar()
Checkbutton(root, text="student_class_id_year", variable=intvar_student_class_id_year, command=change_value_student_class_id_year, pady=-1, padx=-1).grid(column=6, row=20)

     
# global path_student_second_name_iam, value_student_second_name_iam, intvar_student_second_name_iam

path_student_second_name_iam = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_second_name_iam"
value_student_second_name_iam = ["FALSE"]

def change_value_student_second_name_iam():
    global path_student_second_name_iam, value_student_second_name_iam#, intvar_student_second_name_iam
    print("student_second_name_iam")
    if value_student_second_name_iam[-1] == "FALSE":
        print("student_second_name_iam -> TRUE")
        print(value_student_second_name_iam)
        value_student_second_name_iam.append("TRUE")
        print(value_student_second_name_iam)

    elif value_student_second_name_iam[-1] == "TRUE":
        print("student_second_name_iam -> FALSE")
        print(value_student_second_name_iam)
        value_student_second_name_iam.append("FALSE")
        print(value_student_second_name_iam)

intvar_student_second_name_iam = IntVar()
Checkbutton(root, text="student_second_name_iam", variable=intvar_student_second_name_iam, command=change_value_student_second_name_iam, pady=-1, padx=-1).grid(column=6, row=21)

     
# global path_student_id_iam_year, value_student_id_iam_year, intvar_student_id_iam_year

path_student_id_iam_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_iam_year"
value_student_id_iam_year = ["FALSE"]

def change_value_student_id_iam_year():
    global path_student_id_iam_year, value_student_id_iam_year#, intvar_student_id_iam_year
    print("student_id_iam_year")
    if value_student_id_iam_year[-1] == "FALSE":
        print("student_id_iam_year -> TRUE")
        print(value_student_id_iam_year)
        value_student_id_iam_year.append("TRUE")
        print(value_student_id_iam_year)

    elif value_student_id_iam_year[-1] == "TRUE":
        print("student_id_iam_year -> FALSE")
        print(value_student_id_iam_year)
        value_student_id_iam_year.append("FALSE")
        print(value_student_id_iam_year)

intvar_student_id_iam_year = IntVar()
Checkbutton(root, text="student_id_iam_year", variable=intvar_student_id_iam_year, command=change_value_student_id_iam_year, pady=-1, padx=-1).grid(column=6, row=22)

     
# global path_staff_year, value_staff_year, intvar_staff_year

path_staff_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_year"
value_staff_year = ["FALSE"]

def change_value_staff_year():
    global path_staff_year, value_staff_year#, intvar_staff_year
    print("staff_year")
    if value_staff_year[-1] == "FALSE":
        print("staff_year -> TRUE")
        print(value_staff_year)
        value_staff_year.append("TRUE")
        print(value_staff_year)

    elif value_staff_year[-1] == "TRUE":
        print("staff_year -> FALSE")
        print(value_staff_year)
        value_staff_year.append("FALSE")
        print(value_staff_year)

intvar_staff_year = IntVar()
Checkbutton(root, text="staff_year", variable=intvar_staff_year, command=change_value_staff_year, pady=-1, padx=-1).grid(column=6, row=23)

     
# global path_staff_id_first_name, value_staff_id_first_name, intvar_staff_id_first_name

path_staff_id_first_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_id_first_name"
value_staff_id_first_name = ["FALSE"]

def change_value_staff_id_first_name():
    global path_staff_id_first_name, value_staff_id_first_name#, intvar_staff_id_first_name
    print("staff_id_first_name")
    if value_staff_id_first_name[-1] == "FALSE":
        print("staff_id_first_name -> TRUE")
        print(value_staff_id_first_name)
        value_staff_id_first_name.append("TRUE")
        print(value_staff_id_first_name)

    elif value_staff_id_first_name[-1] == "TRUE":
        print("staff_id_first_name -> FALSE")
        print(value_staff_id_first_name)
        value_staff_id_first_name.append("FALSE")
        print(value_staff_id_first_name)

intvar_staff_id_first_name = IntVar()
Checkbutton(root, text="staff_id_first_name", variable=intvar_staff_id_first_name, command=change_value_staff_id_first_name, pady=-1, padx=-1).grid(column=6, row=24)

     
# global path_staff_id, value_staff_id, intvar_staff_id

path_staff_id = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_id"
value_staff_id = ["FALSE"]

def change_value_staff_id():
    global path_staff_id, value_staff_id#, intvar_staff_id
    print("staff_id")
    if value_staff_id[-1] == "FALSE":
        print("staff_id -> TRUE")
        print(value_staff_id)
        value_staff_id.append("TRUE")
        print(value_staff_id)

    elif value_staff_id[-1] == "TRUE":
        print("staff_id -> FALSE")
        print(value_staff_id)
        value_staff_id.append("FALSE")
        print(value_staff_id)

intvar_staff_id = IntVar()
Checkbutton(root, text="staff_id", variable=intvar_staff_id, command=change_value_staff_id, pady=-1, padx=-1).grid(column=6, row=25)

     
# global path_staff_id_year, value_staff_id_year, intvar_staff_id_year

path_staff_id_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_id_year"
value_staff_id_year = ["FALSE"]

def change_value_staff_id_year():
    global path_staff_id_year, value_staff_id_year#, intvar_staff_id_year
    print("staff_id_year")
    if value_staff_id_year[-1] == "FALSE":
        print("staff_id_year -> TRUE")
        print(value_staff_id_year)
        value_staff_id_year.append("TRUE")
        print(value_staff_id_year)

    elif value_staff_id_year[-1] == "TRUE":
        print("staff_id_year -> FALSE")
        print(value_staff_id_year)
        value_staff_id_year.append("FALSE")
        print(value_staff_id_year)

intvar_staff_id_year = IntVar()
Checkbutton(root, text="staff_id_year", variable=intvar_staff_id_year, command=change_value_staff_id_year, pady=-1, padx=-1).grid(column=6, row=26)

     
# global path_staff_id_second_name, value_staff_id_second_name, intvar_staff_id_second_name

path_staff_id_second_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_id_second_name"
value_staff_id_second_name = ["FALSE"]

def change_value_staff_id_second_name():
    global path_staff_id_second_name, value_staff_id_second_name#, intvar_staff_id_second_name
    print("staff_id_second_name")
    if value_staff_id_second_name[-1] == "FALSE":
        print("staff_id_second_name -> TRUE")
        print(value_staff_id_second_name)
        value_staff_id_second_name.append("TRUE")
        print(value_staff_id_second_name)

    elif value_staff_id_second_name[-1] == "TRUE":
        print("staff_id_second_name -> FALSE")
        print(value_staff_id_second_name)
        value_staff_id_second_name.append("FALSE")
        print(value_staff_id_second_name)

intvar_staff_id_second_name = IntVar()
Checkbutton(root, text="staff_id_second_name", variable=intvar_staff_id_second_name, command=change_value_staff_id_second_name, pady=-1, padx=-1).grid(column=6, row=27)

     
# global path_staff_second_name, value_staff_second_name, intvar_staff_second_name

path_staff_second_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_second_name"
value_staff_second_name = ["FALSE"]

def change_value_staff_second_name():
    global path_staff_second_name, value_staff_second_name#, intvar_staff_second_name
    print("staff_second_name")
    if value_staff_second_name[-1] == "FALSE":
        print("staff_second_name -> TRUE")
        print(value_staff_second_name)
        value_staff_second_name.append("TRUE")
        print(value_staff_second_name)

    elif value_staff_second_name[-1] == "TRUE":
        print("staff_second_name -> FALSE")
        print(value_staff_second_name)
        value_staff_second_name.append("FALSE")
        print(value_staff_second_name)

intvar_staff_second_name = IntVar()
Checkbutton(root, text="staff_second_name", variable=intvar_staff_second_name, command=change_value_staff_second_name, pady=-1, padx=-1).grid(column=6, row=28)

     
# global path_staff_first_name, value_staff_first_name, intvar_staff_first_name

path_staff_first_name = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_first_name"
value_staff_first_name = ["FALSE"]

def change_value_staff_first_name():
    global path_staff_first_name, value_staff_first_name#, intvar_staff_first_name
    print("staff_first_name")
    if value_staff_first_name[-1] == "FALSE":
        print("staff_first_name -> TRUE")
        print(value_staff_first_name)
        value_staff_first_name.append("TRUE")
        print(value_staff_first_name)

    elif value_staff_first_name[-1] == "TRUE":
        print("staff_first_name -> FALSE")
        print(value_staff_first_name)
        value_staff_first_name.append("FALSE")
        print(value_staff_first_name)

intvar_staff_first_name = IntVar()
Checkbutton(root, text="staff_first_name", variable=intvar_staff_first_name, command=change_value_staff_first_name, pady=-1, padx=-1).grid(column=6, row=29)

     
# global path_staff_second_name_year, value_staff_second_name_year, intvar_staff_second_name_year

path_staff_second_name_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_second_name_year"
value_staff_second_name_year = ["FALSE"]

def change_value_staff_second_name_year():
    global path_staff_second_name_year, value_staff_second_name_year#, intvar_staff_second_name_year
    print("staff_second_name_year")
    if value_staff_second_name_year[-1] == "FALSE":
        print("staff_second_name_year -> TRUE")
        print(value_staff_second_name_year)
        value_staff_second_name_year.append("TRUE")
        print(value_staff_second_name_year)

    elif value_staff_second_name_year[-1] == "TRUE":
        print("staff_second_name_year -> FALSE")
        print(value_staff_second_name_year)
        value_staff_second_name_year.append("FALSE")
        print(value_staff_second_name_year)

intvar_staff_second_name_year = IntVar()
Checkbutton(root, text="staff_second_name_year", variable=intvar_staff_second_name_year, command=change_value_staff_second_name_year, pady=-1, padx=-1).grid(column=6, row=30)

     
# global path_staff_first_name_year, value_staff_first_name_year, intvar_staff_first_name_year

path_staff_first_name_year = "/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_first_name_year"
value_staff_first_name_year = ["FALSE"]

def change_value_staff_first_name_year():
    global path_staff_first_name_year, value_staff_first_name_year#, intvar_staff_first_name_year
    print("staff_first_name_year")
    if value_staff_first_name_year[-1] == "FALSE":
        print("staff_first_name_year -> TRUE")
        print(value_staff_first_name_year)
        value_staff_first_name_year.append("TRUE")
        print(value_staff_first_name_year)

    elif value_staff_first_name_year[-1] == "TRUE":
        print("staff_first_name_year -> FALSE")
        print(value_staff_first_name_year)
        value_staff_first_name_year.append("FALSE")
        print(value_staff_first_name_year)

intvar_staff_first_name_year = IntVar()
Checkbutton(root, text="staff_first_name_year", variable=intvar_staff_first_name_year, command=change_value_staff_first_name_year, pady=-1, padx=-1).grid(column=7, row=0)

    
values = ['value_entreprise_name', 'value_entreprise_id_name_year', 'value_entreprise_name_CEO_year', 'value_entreprise_name_CEO', 'value_entreprise_id', 'value_entreprise_id_CEO', 'value_entreprise_id_name_CEO', 'value_entreprise_year', 'value_entreprise_name_year', 'value_entreprise_CEO_year', 'value_entreprise_id_name', 'value_entreprise_id_CEO_year', 'value_entreprise_CEO', 'value_entreprise_id_year', 'value_tuteur_house_id_year', 'value_tuteur_house_id', 'value_tuteur_house_year', 'value_tuteur_house_house_id', 'value_tuteur_house_tuteur_id', 'value_interval_start', 'value_interval_end', 'value_interval_id_end', 'value_interval_id', 'value_interval_start_end', 'value_interval_id_start', 'value_interval_id_start_end', 'value_class_id_name_year', 'value_class_id_name', 'value_class_house_id', 'value_class_name', 'value_class_id_year', 'value_class_id', 'value_class_year', 'value_class_house_id_year', 'value_class_id_house_id', 'value_class_name_year', 'value_class_name_house_id', 'value_timetable_year', 'value_timetable_day', 'value_timetable_id_year', 'value_timetable_interval_day', 'value_timetable_interval', 'value_timetable_id_interval', 'value_timetable_interval_day_year', 'value_timetable_id_interval_year', 'value_timetable_interval_year', 'value_timetable_id', 'value_timetable_id_day_year', 'value_timetable_id_interval_day', 'value_timetable_day_year', 'value_timetable_id_day', 'value_house_staff_id', 'value_house_staff_id_year', 'value_house_staff_function', 'value_house_staff_staff_id', 'value_house_staff_function_year', 'value_house_staff_year', 'value_house_staff_house_id', 'value_house_staff_id_function', 'value_house_name', 'value_house_name_house_number', 'value_house_house_number', 'value_house_id', 'value_house_id_name_year', 'value_house_year', 'value_house_name_year', 'value_house_id_name', 'value_house_id_house_number', 'value_house_house_number_year', 'value_house_id_year', 'value_room_id_name', 'value_room_id_name_entreprise', 'value_room_entreprise_year', 'value_room_id_name_year', 'value_room_id_year', 'value_room_name_entreprise_year', 'value_room_id_entreprise', 'value_room_entreprise', 'value_room_id', 'value_room_year', 'value_room_name', 'value_room_name_entreprise', 'value_room_id_entreprise_year', 'value_room_name_year', 'value_year_id', 'value_year_year_end', 'value_year_year_start', 'value_year_id_year_end', 'value_year_id_year_start', 'value_days_id_name', 'value_days_id', 'value_days_name', 'value_tuteur_year', 'value_tuteur_first_name', 'value_tuteur_entreprise', 'value_tuteur_first_name_year', 'value_tuteur_id_house_year', 'value_tuteur_second_name_entreprise', 'value_tuteur_first_name_house', 'value_tuteur_id_entreprise', 'value_tuteur_house_entreprise_year', 'value_tuteur_house_year', 'value_tuteur_first_name_entreprise', 'value_tuteur_second_name_house', 'value_tuteur_id_year', 'value_tuteur_id_first_name', 'value_tuteur_second_name', 'value_tuteur_id_house', 'value_tuteur_house_entreprise', 'value_tuteur_id_entreprise_year', 'value_tuteur_id_second_name', 'value_tuteur_id', 'value_tuteur_second_name_year', 'value_tuteur_entreprise_year', 'value_tuteur_id_house_entreprise', 'value_tuteur_house', 'value_entreprise_staff_id', 'value_entreprise_staff_post_year', 'value_entreprise_staff_id_year', 'value_entreprise_staff_post', 'value_entreprise_staff_id_post', 'value_entreprise_staff_entreprise_id', 'value_entreprise_staff_staff_id', 'value_entreprise_staff_year', 'value_student_iam_tuteur_id', 'value_student_iam_year', 'value_student_tuteur_id', 'value_student_first_name_iam', 'value_student_id_tuteur_id', 'value_student_second_name_year', 'value_student_id_class_id', 'value_student_year', 'value_student_iam', 'value_student_id_year', 'value_student_class_id', 'value_student_id_first_name', 'value_student_first_name_year', 'value_student_id', 'value_student_id_second_name', 'value_student_id_iam', 'value_student_second_name', 'value_student_first_name', 'value_student_tuteur_id_year', 'value_student_iam_class_id', 'value_student_class_id_year', 'value_student_second_name_iam', 'value_student_id_iam_year', 'value_staff_year', 'value_staff_id_first_name', 'value_staff_id', 'value_staff_id_year', 'value_staff_id_second_name', 'value_staff_second_name', 'value_staff_first_name', 'value_staff_second_name_year', 'value_staff_first_name_year', 'value_entreprise_dir', 'value_entreprise', 'value_tuteur_house_dir', 'value_interval_dir', 'value_room', 'value_entreprise_staff', 'value_class_dir', 'value_interval', 'value_timetable_dir', 'value_house_staff_dir', 'value_house_dir', 'value_student', 'value_house_staff', 'value_room_dir', 'value_year_dir', 'value_student_entreprise', 'value_days_dir', 'value_tuteur_dir', 'value_year', 'value_entreprise_staff_dir', 'value_student_dir', 'value_house', 'value_class', 'value_days', 'value_staff', 'value_tuteur', 'value_staff_dir', 'value_timetable', 'value_tuteur_house']
values_path = ['/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_name_CEO_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_name_CEO', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_CEO', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_name_CEO', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_CEO_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_CEO_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_CEO', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir/entreprise_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir/tuteur_house_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir/tuteur_house_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir/tuteur_house_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir/tuteur_house_house_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir/tuteur_house_tuteur_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_start', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_end', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_id_end', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_start_end', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_id_start', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir/interval_id_start_end', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_id_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_id_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_house_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_house_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_id_house_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir/class_name_house_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_day', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_interval_day', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_interval', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_interval', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_interval_day_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_interval_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_interval_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_day_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_interval_day', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_day_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir/timetable_id_day', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_function', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_staff_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_function_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_house_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir/house_staff_id_function', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_name_house_number', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_house_number', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_id_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_id_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_id_house_number', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_house_number_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir/house_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_name_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_entreprise_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_name_entreprise_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_name_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_id_entreprise_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir/room_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir/year_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir/year_year_end', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir/year_year_start', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir/year_id_year_end', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir/year_id_year_start', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/days_dir/days_id_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/days_dir/days_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/days_dir/days_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_first_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_first_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_house_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_second_name_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_first_name_house', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_house_entreprise_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_house_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_first_name_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_second_name_house', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_first_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_second_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_house', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_house_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_entreprise_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_second_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_second_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_entreprise_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_id_house_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir/tuteur_house', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_post_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_post', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_id_post', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_entreprise_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_staff_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir/entreprise_staff_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_iam_tuteur_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_iam_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_tuteur_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_first_name_iam', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_tuteur_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_second_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_class_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_iam', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_class_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_first_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_first_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_second_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_iam', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_second_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_first_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_tuteur_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_iam_class_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_class_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_second_name_iam', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir/student_id_iam_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_id_first_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_id', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_id_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_id_second_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_second_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_first_name', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_second_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir/staff_first_name_year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_dir', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house_dir', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval_dir', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class_dir', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/interval', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable_dir', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff_dir', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_dir', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house_staff', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/room_dir', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year_dir', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_entreprise', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/days_dir', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_dir', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/year', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/entreprise_staff_dir', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/student_dir', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/house', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/class', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/days', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/staff_dir', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/timetable', '/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/sql_structure/php_insert/tuteur_house']

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

