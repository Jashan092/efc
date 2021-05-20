var hour = document.getElementById("hour");
var min = document.getElementById("min");
var sec = document.getElementById("sec");

var d = new Date();
var htime = d.getHours();
var mtime = d.getMinutes();
var stime = d.getSeconds();
hrotate = 30 * htime + mtime/2;
mrotate = 6 * mtime;
srotate = 6 * stime;
sec.style.transform = `rotate(${srotate})`;
hour.style.transform = `rotate(${hrotate})`;
min.style.transform = `rotate(${mrotate})`;