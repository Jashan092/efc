from tkinter import *
Jashan_root = Tk()
# default width height when start 
Jashan_root.geometry("444x244")

# Jashan_root.minsize(width,height)
Jashan_root.minsize(200,100)
Jashan_root.maxsize(800,500)
#This will make label on top center
lab = Label(text="Jashan is Good Boy and this is his gui.")
lab.pack()
Jashan_root.mainloop()