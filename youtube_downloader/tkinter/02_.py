# How to add image in tkinter.
# from PIL from image,imageTk
# PIL = Python Image Library
from tkinter import * 
Jashan_02_root = Tk()
Jashan_02_root.geometry('455x244')
# for jpg image 
# image = Image.open('Photo.jpg')
# photo = ImageTk.PhotoImage(image)
photo = PhotoImage(file=(f"1.png"))
# we have embed in label
# tkinter only supports .png 
# :) you can  use pillow module 
Jashan_label = Label(image=photo)
Jashan_label.pack()
Jashan_02_root.mainloop()