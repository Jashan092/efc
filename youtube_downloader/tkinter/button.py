from tkinter import * 
def hey():
    print("hello")
root = Tk()
root.geometry('655x333')
frame = Frame(root,bg='grey',borderwidth=6)
frame.pack(anchor='n')
button = Button(frame,bg='red', fg='white', text='Spider', command=hey)
button.pack(side=LEFT)
button2 = Button(frame,bg='red', fg='white', text='Spider', command=hey)
button2.pack(side=RIGHT)
button3 = Button(frame,bg='red', fg='white', text='Spider', command=hey)
button3.pack(side=RIGHT)
root.mainloop()