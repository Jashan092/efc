from tkinter import * 
# You have to take this event otherwise this will bump error
def Jashan(event):
    print(f"You clicked on button at x:{event.x} y:{event.x}")
root = Tk()
root.title("Apr 17 15:40")
root.geometry('644x344')
widget = Button(root,text="Click me please")
widget.pack()
# For capturing the events or For binding the events.
widget.bind('<Button-1>',Jashan)
widget.bind('<Double-1>',quit)
# Visit this for more information https://www.python-course.eu/tkinter_events_binds.php
root.mainloop()