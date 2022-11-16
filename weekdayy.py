import subprocess

inp = """
  mardi_plage1 boolean
  mardi_plage1_occupation varchar
  mardi_plage2 boolean
  mardi_plage2_occupation varchar
  mardi_plage3 boolean
  mardi_plage3_occupation varchar
  mardi_plage4 boolean
  mardi_plage4_occupation varchar
  mardi_plage5 boolean
  mardi_plage5_occupation varchar
  mardi_plage6 boolean
  mardi_plage6_occupation varchar

"""
word_to_replace = "mardi"
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