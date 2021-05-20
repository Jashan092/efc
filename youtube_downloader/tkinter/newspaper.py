from tkinter import *
from PIL import  ImageTk, Image
root = Tk()

def every_100(text):
    final_text = ""
    for i in range(0, len(text)):
        final_text +=text[i]
        if i%100==0 and i!=0:
            final_text += "\n"
    return final_text

texts = []
images = []
for i in range(1,4):
    with open(f"np/t{i}.txt") as fi:
        text = fi.read()
        texts.append(every_100(text))

    image = Image.open(f'np/p{i}.png')
    image = image.resize((200,200), Image.ANTIALIAS)
    images.append(ImageTk.PhotoImage(image))

root.geometry('1000x600')
lb1 = Label(text="The New York Times",fg='black',font="monospace 20 bold")
lb1.pack()
f0 = Frame(root,bg='grey')
f0.pack()

f1 = Frame(root,bg='grey',width=900,height=200)
lf1 = Label(f1,text=texts[0]).pack(side="left")
# Label(f1, image=images[0],anchor='ne').pack(side=RIGHT)
f1.pack(anchor='w')
f2 = Frame(root,bg='grey')
lf2 = Label(f1,text=texts[1]).pack(side='left')
# Label(f1, image=images[1], anchor="e").pack()
f2.pack(anchor='w')
f3 = Frame(root,bg='grey')
lf3 = Label(f1,text=texts[2]).pack(side='left')
# Label(f1, image=images[2], anchor="e").pack()
f3.pack(anchor='w')

root.mainloop()