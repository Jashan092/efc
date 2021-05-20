from pytube import YouTube
link = YouTube('https://www.youtube.com/watch?v=BPhvbIuq7uM')
video = link.streams.first()
print(video.title)