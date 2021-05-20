intable = int(input("Enter the number: "))
for i in range(1,intable+1):
    for j in range(1,10+1):
        print(f"{i}X{j}={i*j}")
        if(j==10):
            print('\n')