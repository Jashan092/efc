from tkinter import *
def dvtsb():
    var1 = para1.get()
    var2 = para2.get()
    var3 = para3.get()
    var4 = para4.get()
    var5 = para5.get()
    if (vcb6.get() == 1):
        var6 = 'Yes'
    else:
        var6 = "NO"
    with open('travel_form_data_.txt',"a") as f:
        f.write(f"Name Is {var1}\n P.no is {var2}\n Gender is {var3}\n Emergency {var4}\n Paymnet {var5}\n Meal {var6}\n")
 

root = Tk()
root.geometry('655x333')
lb0 = Label(root,text="Devine Travel",padx=130,font="Ariel 20 bold")
lb0.grid(row=0,column=3)
lb1 = Label(root,text="name",padx=50)
lb1.grid(row=1);
lb2 = Label(root,text="phone")
lb2.grid(row=2);
lb3 = Label(root,text="gender")
lb3.grid(row=3);
lb4 = Label(root,text="emergency")
lb4.grid(row=4);
lb5 = Label(root,text="payment")
lb5.grid(row=5);
vpara1 = StringVar()
vpara2 = StringVar()
vpara3 = StringVar()
vpara4 = StringVar()
vpara5 = StringVar()
vcb6 = IntVar()
para1 = Entry(root,textvariable=vpara1)
para1.grid(row=1,column=2)
para2 = Entry(root,textvariable=vpara2)
para2.grid(row=2,column=2)
para3 = Entry(root,textvariable=vpara3)
para3.grid(row=3,column=2)
para4 = Entry(root,textvariable=vpara4)
para4.grid(row=4,column=2)
para5 = Entry(root,textvariable=vpara5)
para5.grid(row=5,column=2)
cb6 = Checkbutton(text="Want to prebook you meal",variable=vcb6,onvalue=1,offvalue=0)
cb6.grid(row=6,column=2)
btn = Button(text="Submit to Devine Travel", command=dvtsb)
btn.grid(row=7,column=2)
root.mainloop()