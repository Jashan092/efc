from tkinter import *
from tkinter.messagebox import showinfo
from tkinter.filedialog import askopenfilename
from tkinter.filedialog import asksaveasfilename
import os

def newFile():
    global file 
    root.title("Untitled - Notepad")
    file = None
    TextArea.delete(1.0,END)   # 1.0 first line 0th charactor
def openFile():
    global file
    file = askopenfilename(defaultextension =".txt",
                           filetypes = [("All Files ", "*.*"),
                                        ("Text Documents",
         "*.txt")])
    file = askopenfilename()

    if file == "":
        file = None
    else:
        root.title(os.path.basename(file) + " - Notepad")
        TextArea.delete(1.0,END)
        f = open(file,"r")
        TextArea.insert(1.0,f.read())
        f.close()

def saveFile():
    global file
    if file == None:
        file = asksaveasfilename(initialfile = 'Unlited.txt',
        defaultextension =".txt",
                           filetypes = [("All Files ", "*.*"),
                                        ("Text Documents",
         "*.txt")])
        if file == "":
            file = None
        else:
            # save as a new file
            f = open(file,"w")
            f.write(TextArea.get(1.0,END))
            f.close()
            root.title(os.path.basename(file) + ' - Notepad')
            print("File saved")
    
    else:
        # save the file
        f = open(file,"w")
        f.write(TextArea.get(1.0,END))
        f.close()
        root.title(os.path.basename(file) + ' - Notepad')
        print("File saved")
        

def quitApp():
    root.destroy()

def cut():
    TextArea.event_generate("<<Cut>>")
def copy():
    TextArea.event_generate("<<Copy>>")
def paste():
    TextArea.event_generate("<<Paste>>")

def about():
    showinfo("Notepad","Notepad by Jashan created in 1997 C all rights reserved apr 18 14:41 2021")

if __name__ == '__main__':
    #basic tkinter setup
    root = Tk()
    root.title('Untitled - Notepad')
    root.geometry('644x788')

    # Add textarea  
    TextArea = Text(root, font='Ariel 13')
    TextArea.pack(fill='both',expand=True)
    scrollbar = Scrollbar(TextArea)
    scrollbar.pack(side=RIGHT,fill=Y)
    scrollbar.config(command=TextArea.yview)
    TextArea.config(yscrollcommand= scrollbar.set)
    # let's create menubar
    Menubar = Menu(root)
    FileMenu = Menu(Menubar, tearoff = OFF)
    # To open a new file 
    FileMenu.add_command(label="New", command=newFile)

    # To open already existing file
    FileMenu.add_command(label='Open',command=openFile)

    # To save the current file
    FileMenu.add_command(label="Save",command=saveFile)
    FileMenu.add_separator()
    FileMenu.add_command(label='Exit',command=quitApp)
    Menubar.add_cascade(label = "File",menu=FileMenu)
    root.config(menu=Menubar)

    EditMenu = Menu(Menubar, tearoff = 0)
    # To give a feature of cut,copy and paste

    EditMenu.add_command(label = 'Cut',command=cut)
    EditMenu.add_command(label = 'Copy',command=cut)
    EditMenu.add_command(label = 'Paste',command=paste)

    Menubar.add_cascade(label = "Edit",menu = EditMenu)

    # Edit menu ends

    # Help menu starts
    HelpMenu =  Menu(Menubar, tearoff = 0)
    HelpMenu.add_command(label = "About Notepad", command = about)
    Menubar.add_cascade(label='Help',menu=HelpMenu)

    root.mainloop()