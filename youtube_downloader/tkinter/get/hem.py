from pytube import YouTube
import sys
url = 'https://www.youtube.com/watch?v=T62maKYX9tU&list=PLV1bhAAf21cSxHaqUDyG1meQz3hUPi4eO&index=1'


# Display a download progress bar
def show_progress_bar(stream, _chunk, bytes_remaining):
    print('the stream is ',stream)  
    print("The size of the file is ", stream.filesize)   # return data in bytes.
    current = ((stream.filesize - bytes_remaining)/stream.filesize)
    percent = ('{0:.1f}').format(current*100)
    progress = int(50*current)
    status = '█' * progress + '-' * (50 - progress)
    sys.stdout.write(' ↳ |{bar}| {percent}%\r'.format(bar=status, percent=percent))
    sys.stdout.flush()

yt = YouTube(url)
yt.register_on_progress_callback(show_progress_bar)
yt.streams.filter(file_extension='mp4').first().download()


def percent(self, tem, total):
    perc = (float(tem) / float(total)) * float(100)
    return perc