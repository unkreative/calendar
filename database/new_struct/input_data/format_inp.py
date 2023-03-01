import os, re, sys, docx2txt, textract


text = textract.process("/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/input_data/221206 plan horaire.docx")
text = text.decode("utf-8")
print(text)
with open("/Users/lousergonne/Documents/GitHub/calendar/database/new_struct/input_data/output", "w") as f:
    f.write(text)