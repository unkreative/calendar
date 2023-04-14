from pbwrap import Pastebin
import subprocess

def write_to_clipboard(output):
    process = subprocess.Popen(
        'pbcopy', env={'LANG': 'en_US.UTF-8'}, stdin=subprocess.PIPE)
    process.communicate(output.encode('utf-8'))
def get_clipboard_data():
    p = subprocess.Popen(["pbpaste"], stdout=subprocess.PIPE)
    retcode = p.wait()
    data = p.stdout.read()
    return data
pb = Pastebin('fAh0mhKTjvWxkwdKbkbBzAiSoQIPN2rU')
pb.authenticate("wellidkk", "paste2006binlou")

def create():
    paste_name = input("input name: ")

    pastebin_input = f"{get_clipboard_data()}"
    print(pastebin_input)

    api_paste_expire_date_input = "N"
    paste_format = "python"

    xx = pb.create_paste(
        pastebin_input,
        api_paste_private=0,
        api_paste_name=paste_name, 
        api_paste_expire_date=api_paste_expire_date_input, 
        api_paste_format=paste_format)
    write_to_clipboard(xx)
    print(xx)

def archive():
    dct = pb.get_user_pastes()
    for x in dct:
        print(x)


# archive()
create()