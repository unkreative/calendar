import subprocess

# inp = """
#   mardi_plage1 boolean
#   mardi_plage1_occupation varchar
#   mardi_plage2 boolean
#   mardi_plage2_occupation varchar
#   mardi_plage3 boolean
#   mardi_plage3_occupation varchar
#   mardi_plage4 boolean
#   mardi_plage4_occupation varchar
#   mardi_plage5 boolean
#   mardi_plage5_occupation varchar
#   mardi_plage6 boolean
#   mardi_plage6_occupation varchar

# """
inp = """

                              const plage_1_ = plage_1[0].split("-");
                              const plage_1_day = plage_1_[0];
                              const plage_1_plage = plage_1_[1];
"""
# word_to_replace = "mardi"
word_to_replace = "1"
# words_to_replace_with = ["mardi", "mercredi", "jeudi", "vendredi"]
word_to_replace_with = ["2","3","4","5","6","7","8"]
lst = []
def change(inp, words_to_replace, words_to_replace_with):
    for x in words_to_replace_with:
        print(x)
        lst.append(inp.replace(word_to_replace, x))
        print(lst)

    string = " ".join([str(item) for item in lst])
    print(string)
    subprocess.run("pbcopy", text=True, input=string)

change(inp, word_to_replace, word_to_replace_with)