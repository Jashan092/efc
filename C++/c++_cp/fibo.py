print("Fibonacci Series")
count = 0
n1 = 0
n2 = 1
num = int(input("ENTER THE FIBONACCI TERM: "))
while count < num:
    nth = n1 + n2
    n1 = n2
    print(n1)
    n2 = nth
    count += 1autonav-endscreen {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -moz-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}