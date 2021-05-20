from tkinter import *
def add():
    global i 
    lbx.insert(ACTIVE,f"{i}")
    i += 1

i = 0
root = Tk()
root.geometry('600x400')
root.title("Listbox visits")
lbx = Listbox(root)
lbx.pack()
lbx.insert(END,"First Item of a listbox")
button = Button(root,text="Addd Item",command=add).pack()
root.mainloop()