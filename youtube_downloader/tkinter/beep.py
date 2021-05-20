#!/usr/bin/env python3
from tkinter import *
from tkinter.filedialog import askdirectory
from tkinter import ttk
from pytube import YouTube

# creating window 
window = Tk()
def show_progress_bar(stream, _chunk, bytes_remaining):
    print("The size of the file is ", stream.filesize)   # return data in bytes.
    current = ((stream.filesize - bytes_remaining)/stream.filesize)
    percent = ('{0:.1f}').format(current*100)
    progress = int(50*current)
    status = '█' * progress + '-' * (50 - progress)
    sys.stdout.write(' ↳ |{bar}| {percent}%\r'.format(bar=status, percent=percent))
    sys.stdout.flush()

def percent(self, tem, total):
    perc = (float(tem) / float(total)) * float(100)
    return perc

def main():
    # link 
    if (len(url.get()) > 1):
        lxf1.config(text="",font="Ariel 10 bold",fg='red')
        try:
            link = YouTube(url.get())
            link.register_on_progress_callback(show_progress_bar)
            format = reso.get()
            if format !='mp3':
                myfile = link.streams.filter(res=format,progressive=True).first()
                print(myfile)
            else:
                myfile = link.streams.filter(only_audio=True,progressive=True).first()
                print(myfile)

            print(locn)
            try:
                print("Downloading\n")
                myfile.download(locn)
                print("downloaded")
            except Exception as e:
                print("Download Failed")
        except Exception as e:
            lxf1.config(text=f"Invalid link or File Format Not available",font="Ariel 10 bold",fg='red')
    else:
        lxf1.config(text="File Format Not Available",font="Ariel 10 bold",fg='red')
def fun():
    # print(url.get())
    global locn
    locn = str(askdirectory())
    bb.config(text=locn,font="Ariel 7 bold",fg= 'green')

window.geometry('400x300')
# window.maxsize(400,300)
# window.minsize(400,300)
window.title("YouTube Video Downloader")
frame1 = Frame(window)
Label(frame1,text="YouTube Video Downloader",font= ('ariel 10 bold')).pack()
frame1.pack()
frame2 = Frame(window)
url = StringVar()
Label(frame2,text="Video URL").pack()
Entry(frame2,textvariable=url).pack()
lxf1 = Label(frame2,text="")
lxf1.pack()
frame2.pack(pady=0)
frame3 = Frame(window)
location = Label(frame3,text="Location").pack()
btn = Button(frame3,padx=5,text="Select",font= "Ariel 8 ",command=fun).pack(padx=2,side=LEFT)
bb = Label(frame3,text="")
bb.pack(padx=20,pady=9)
frame3.pack()
frame4 = Frame(window)
Label(frame4,text="Resolution").pack(pady=10)
reso = StringVar()
formats = ttk.Combobox(frame4,textvariable=reso,state="readonly",width=5)
formats['value'] = (
    '144p',
    '240p',
    '360p',
    '480p',
    '720p',
    '1080p',
    'mp3'
)
formats.pack()
frame4.pack()
frame5 = Frame(window)
Button(text="Download",command=main).pack(pady=10)
frame5.pack()
Label(window,text="",fg='green').pack()
window.mainloop()
