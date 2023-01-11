from os import listdir
from os.path import isfile, join

mypath = '/Users/lousergonne/Documents/GitHub/calendar/other stuff/queries/sql test data'
onlyfiles = [f for f in listdir(mypath) if isfile(join(mypath, f))]
print(onlyfiles)

with open("combined.txt", "w") as ff:
    for x in onlyfiles:
        with open(f"{mypath}/{x}", "r") as f:
            cache = f.read()
            ff.write(f"\n{cache}")

            
