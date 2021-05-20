from tkinter import * 
root = Tk()
root.geometry('600x300')
var = IntVar()
var.set(1)
def take():
    print(f"The value is {var.get()}")
lab = Label(root,text="Select Hacking Method",font='Ariel 15 bold').pack()
radio = Radiobutton(root,text="Metasploit",padx=3,pady=4,variable=var,value=0).pack(anchor='w')
radio = Radiobutton(root,text="Brute Force",padx=3,pady=4,variable=var,value=1).pack(anchor='w')
radio = Radiobutton(root,text="Social Engennring",padx=3,pady=4,variable=var,value=2).pack(anchor='w')
radio = Radiobutton(root,text="Reverse Engeinnering",padx=3,pady=4,variable=var,value=3).pack(anchor='w')
button = Button(text="Submit",command=take).pack()
root.mainloop()