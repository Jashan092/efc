# import tkinter as tk
# this is by my own notepad.
# class Application(tk.Frame):
#     def __init__(self, master=None):
#         super().__init__(master)
#         self.master = master
#         self.pack()
#         self.create_widgets()

#     def create_widgets(self):
#         self.hi_there = tk.Button(self)
#         self.hi_there["text"] = "Hello World\n(click me)"
#         self.hi_there["command"] = self.say_hi
#         self.hi_there.pack(side="top")

#         self.quit = tk.Button(self, text="QUIT", fg="red",
#                               command=self.master.destroy)
#         self.quit.pack(side="bottom")

#     def say_hi(self):
#         print("hi there, everyone!")

# root = tk.Tk()
# app = Application(master=root)
# app.mainloop()

class rectangle:
    var1 = 'This is rectangle class'
    def __init__(self,width,height):
        self.width = width 
        self.height = height
    
    def area(self):
        return self.width * self.height

    def perimeter(self):
        return 2 * (self.width + self.height)

class cb:
    var1 = "I am from class cb"
    def __init__(self):
        self.name = "jashan"
        self.fame = "fame"

class square(cb):
    a = "I am from rectangle"
    def __init__(self,game,paid):
        super().__init__()
        self.game = game
        self.paid = paid

c = cb()
a = rectangle(4,4)
print(a.area())
a = rectangle(4,5)
b = square("pubg","No")
print(b.var1)
print(b.game)
print(b.name)
# first it will find from his own space and then it will try to find in inherted class and if not find give error


