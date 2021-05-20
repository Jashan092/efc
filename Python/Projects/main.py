# Imports
import random

# GAME VARIABLES
GAME_OVER = False
GAME_RUN = True
def computerIn():
    comp = random.randint(0,100)
    return comp
compin = computerIn()

# Functions 
# this function will take and return user input
def userInput():
    print(compin)
    userin = int(input("Enter Your Guess"))
    return userin



# Dependencies
userin = userInput()

def logic():
    if userin == compin:
        print("You Won")
    elif userin < compin:
        print("Choose larger number")
    elif userin > compin: 
        print("Choose smaller number")
    else:
        print("Error - 305")
logic()




























