from tkinter import * 
def func1():
    print("This is function number 1")
def help():
    tmsg.showinfo("911","WE NEED TO TALK")

def warning():
    tmsg.showwarning("Code red","You are not allowed to see this")

def ask():
    tmsg.askquestion("Authentication","You are not humnan")

def okcan():
    tmsg.askokcancel("Oath","We are riching upto you")
def yesno():
    tmsg.askyesno("Preserving","Can we kill you?")
import tkinter.messagebox as tmsg
root = Tk()
root.geometry('1000x500')
mainmenu = Menu(root)
m1 = Menu(mainmenu,tearoff=0)
m1.add_command(label="New project",command=func1)
m1.add_command(label="Save",command=func1)
mainmenu.add_cascade(label="File",menu=m1)
root.config(menu=mainmenu)
m2 = Menu(mainmenu)
m2.add_command(label="cut")
m2.add_command(label="copy")
m2.add_command(label="Delete")
m2.add_command(label="Breachs")
mainmenu.add_cascade(label="Sys",menu=m2)
m3 = Menu(mainmenu,tearoff=0)
m3.add_command(label="Help", command=help)
m3.add_command(label="Warning",command=warning)
m3.add_command(label="Question",command=ask)
m3.add_command(label="OK/Cancel",command=okcan)
m3.add_command(label="yes/no",command=yesno)
mainmenu.add_cascade(label='Personal',menu=m3)
root.mainloop()