# Attributes in label and geometry
from tkinter import *
root = Tk()
root.title("Jashan With Harry")
# Important Label Options
# 1. text ---> adds a text
# 2. bg ---> background
# 3. fg ---> foreground
# 4. font ---> sets the font
# 5. padx ---> x padding
# 6. pady ---> y padding
# 7. relief ---> bordestyleing = SUNKEN,RAISED,GROOVE,RIDGE
Title_label = Label(text='''\nElon Reeve Musk FRS (/ˈiːlɒn/ EE-lon; born June 28, 1971) is a business \nmagnate, industrial designer, and engineer.[3] He is the founder, CEO, CTO, and chief designer of SpaceX; \nearly stage investor,[b] CEO, and product architect of Tesla, Inc.; founder of The Boring Company; \nco-founder of Neuralink; and co-founder and initial co-chairman of OpenAI. A centibillionaire, Musk is one \nof the richest people in the world.''',
bg="red",fg = "white",padx=100 , pady=100 , font=("monospace",5,"bold")
, borderwidth=10,relief='SUNKEN')  # relief styles will help you to make 3d effect buttons
# or 
# bg="red",fg = "white",padx=100 , pady=100 , font=("monospace",15,"bold")
# )

# important pack options
# anchor = north,west,east,south,center
# side = top,bottom,left,right
# fill 
# padx
# pady
# Title_label.pack()
# Title_label.pack(anchor="center")
Title_label.pack(anchor="se") # it will not come down you have to set the side
# Title_label.pack(anchor='se',side='bottom',fill='x') # it will make it strchable
# Title_label.pack(anchor='center',fill='y') # it will make it strchable
# Title_label.pack(anchor='center',fill='x',pady=10 ,padx=10) # it will make it strchable
Title_label.pack(anchor='center',fill='y',pady=10 ,padx=10) # it will make it strchable
root.mainloop()