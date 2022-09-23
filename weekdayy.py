import subprocess

inp = """

lundi1
lundi2
lundi3
lundi4
lundi5

"""
word_to_replace = "lundi"
words_to_replace_with = ["mardi", "mercredi", "jeudi", "vendredi"]
lst = []
def change(inp, words_to_replace, words_to_replace_with):
    for x in words_to_replace_with:
        print(x)
        lst.append(inp.replace(word_to_replace, x))
        print(lst)

    string = " ".join([str(item) for item in lst])
    print(string)

change(inp, word_to_replace, words_to_replace_with)