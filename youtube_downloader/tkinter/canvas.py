from tkinter import *
root = Tk()
canvas_height = 400
canvas_width = 800
root.geometry(f"{canvas_width}x{canvas_height}")
can_widget = Canvas(root,width=canvas_width,height=canvas_height)
can_widget.pack()
# can_widget.create_line(x1,y1,x2,y2)
# can_widget.create_line(0,0,800,400,fill="red")
# can_widget.create_line(0,400,800,0,fill="red")
# can_widget.create_line(400,400,400,0,fill="blue")
# can_widget.create_line(0,200,800,200,fill="purple")
# drawing rectangle
# we need one digonal 
# top left corner and bottom right corner
can_widget.create_rectangle(350,150,450,200, fill="green")
can_widget.create_text(400,210,text="Elon Musk")    
# See This Image for knowing about creating ovalhttps://www.python-course.eu/images/canvas_oval.png
# our oval will inside the rectangle
can_widget.create_oval(350,150,450,200, fill="red")
can_widget.create_arc
can_widget.create_window
root.mainloop()