from tkinter import *
root = Tk()
def Jashan(event):
    print('hello')
    print(event.widget.cget('text'))
    text = event.widget.cget('text')
    
    if text == 'C':
        maininput.set("")
    elif text == '=':
        try:
            if maininput.get().isdigit():
                value = int(maininput.get())
            else:
                value = eval(maininput.get())
            maininput.set(value)
        except Exception as e:
            maininput.set("Error")
    else: 
        maininput.set(maininput.get() + text)
# Size
root.geometry('350x465')
root.title("Calculator")

# input
topframe = Frame(root).pack(pady=8, padx=5)
maininput = StringVar()
maininput.set("")
screen = Entry(root,textvariable=maininput,bg='lime',fg='#006600',font="Ariel 13 bold",bd=0).pack(ipadx=0, ipady=5, pady=30)

f1 = Frame(root)
for i in range(7,10):
    widget = Button(f1,text=f"{i}",padx=25, pady=5,borderwidth=10,font="Ariel 12 bold")
    widget.pack(side='right')
    widget.bind('<Button-1>',Jashan)

f1.pack(anchor='w',padx=55,fill='both')

f2 = Frame(root)
for i in range(4,7):
    widget = Button(f2,text=f"{i}",padx=25, pady=5,borderwidth=10,font="Ariel 12 bold")
    widget.pack(side='right')
    widget.bind('<Button-1>',Jashan)
f2.pack(anchor='w',padx=55,fill='both')

f3 = Frame(root)
for i in range(1,4):
    widget = Button(f3,text=f"{i}",padx=25, pady=5,borderwidth=10,font="Ariel 12 bold")
    widget.pack(side='right')
    widget.bind('<Button-1>',Jashan)
f3.pack(anchor='w',padx=55,fill='both')

f4 = Frame(root)
for i in (0,'.',','):
    widget = Button(f4,text=f"{i}",padx=25, pady=5,borderwidth=10,font="Ariel 12 bold")
    widget.pack(side='right')
    widget.bind('<Button-1>',Jashan)
f4.pack(anchor='w',padx=55,fill='both')

f5 = Frame(root)
for i in ('/','=','C'):
    widget = Button(f5,text=f"{i}",padx=25, pady=5,borderwidth=10,font="Ariel 12 bold")
    widget.pack(side='right')
    widget.bind('<Button-1>',Jashan)
f5.pack(anchor='w',padx=55,fill='both')

f6 = Frame(root)
for i in ('+','-','*'):
    widget = Button(f6,text=f"{i}",padx=25, pady=5,borderwidth=10,font="Ariel 12 bold")
    widget.pack(side='right')
    widget.bind('<Button-1>',Jashan)
f6.pack(anchor='w',padx=55,fill='both')









root.configure(bg='black')
root.mainloop()