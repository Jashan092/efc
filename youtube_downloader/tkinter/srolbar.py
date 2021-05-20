from tkinter import * 
root = Tk()
#TODO : scrollbar = Scrikkvar(path).pack()
#TODO : yscrollcommand = scrollbar.set
#TODO : scrollbar.config(command=<variable_where_you_want_scrollbar>.yview)

root.geometry('600x400')
root.title("Scrollbar")
label = Label(text="The F.B.I most wanted",font="Ariel 15 bold").pack()
frame = Frame(root,bg='cyan').pack(padx=20, pady=20)
scrol = Scrollbar(frame)
scrol.pack(side=RIGHT,fill='both')
lbx = Listbox(frame,yscrollcommand = scrol.set)
lbx.insert(END,'first item')
for i in range(100):
    lbx.insert(ACTIVE,f"THe fed is {i}")
lbx.pack()
scrol.config(command=lbx.yview)
root.mainloop()