import os

 

def count_words_in_file(file_path):
    try:
        with open(file_path, 'r') as file:
            return len(file.read().split())
    except:
        pass
 
to_add = []
def count_words_in_directory(directory_path):
    for root, dirs, files in os.walk(directory_path):
        for filename in files:
            if "test purpose file" in filename or "test purpose file" in root:
                pass
            elif "node_modules" in filename or "node_modules" in root:
                pass
            elif ".git" in filename or ".git" in root:
                pass
            else:

                file_path = os.path.join(root, filename)
                print(f"{file_path}: {count_words_in_file(file_path)} words")
                to_add.append(count_words_in_file(file_path))
 

# Replace the path with the directory you want to count the words in
directory_path = "/Users/lousergonne/Documents/GitHub/calendar"

 

count_words_in_directory(directory_path)

cache = 0
for x in to_add:
    try:
        cache = cache + x
    except:
        pass
print()
print(cache)