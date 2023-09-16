import pyautogui as pg
import time
time.sleep(2)
def m(times_ran):
    y = 1200-(times_ran*80)
    print(y)
    pg.click(2450, y)
    time.sleep(1)
    pg.click(128, 10)
    time.sleep(0.5)
    pg.click(150, 339)
    time.sleep(2)

    pg.typewrite(f"{times_ran}")

    time.sleep(1)
    pg.press("enter")
    time.sleep(13)

times_ran = 13

while True == True:
    m(times_ran)
    times_ran += 1