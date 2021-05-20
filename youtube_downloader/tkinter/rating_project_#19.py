from tkinter import *
import tkinter.messagebox as msg
def rate():
    msg.showinfo("Rated","!Thanks for rating us")
    with open("rate.txt","a") as f:
        f.write(f"Rating is {slider.get()}\n")


def norate():
    msg.showwarning('No rated',"Please Feedback us about problem we are very sorry for unconvinience")
root = Tk()
root.geometry('600x300')
frame = Frame(root,bg='grey').pack(pady='5')
l1 = Label(frame,text="Please rate your service",font="monospace 15 bold").pack()
slider = Scale(frame,from_=1,to=10,orient=HORIZONTAL,tickinterval=2.5)
slider.set(10)
slider.pack(pady=20) 
button = Button(frame,text="Rate",command=rate).pack()
frame2 = Frame(frame)
button2 = Button(frame2,text='No,Thanks',command=norate).pack()
frame2.pack(pady=10)
root.mainloop()