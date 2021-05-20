from tkinter import *
def enter():
    num = 0
    uu = username.get()
    up = password.get()
    with open('1.txt',"a") as f:
        num += 1
        f.write(f"{num} Username is {uu} password is {up}")
        uservar = ''
        passvar = ''
root = Tk()
root.geometry('655x333')
lf = Label(root,text="Dance Club",font="monospace 20 bold",padx=100)
lf.grid(row=0,column=3)
user = Label(root,text="Enter you name: ",)
user.grid(row=1,column=0)
passw = Label(root,text="Enter your password: ")
passw.grid(row=2,column=0)
button = Button(root,text="submit",command=enter)
button.grid()
uservar = StringVar()
passvar = StringVar()
username = Entry(root,textvariable=uservar)
username.grid(row=1,column=2)
password = Entry(root,textvariable=passvar)
password.grid(row=2,column=2)
root.mainloop()