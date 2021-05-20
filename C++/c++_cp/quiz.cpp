#include <iostream>
#include <math.h>
using namespace std;

class number;

class number
{
    int x, y;

public:
    friend void diff(number, number);
    number(int a, int b)
    {
        x = a;
        y = b;
    }
    void display()
    {
        cout << "The cordinates are " << x << " " << y << endl;
    }
};

void diff(number o1, number o2)
{
    int temp = o1.x;
    o1.x = o2.y;
    o2.y = temp;
    int x_diff = o2.x - o1.x;
    int y_diff = o2.y - o1.y;
    long double sol = sqrt((x_diff)*(x_diff) + (y_diff)*(y_diff));
    cout << "The Difference is " << sol << endl;
}

int main()
{
    number Jashan(1,2);
    number Elvy(4,3);
    Jashan.display();
    Elvy.display();
    diff(Jashan, Elvy);
    return 0;
}


// parameterized constructors
// #include<iostream>
// #include<math.h>
// using namespace std;
// class point{
// int x;
// int y;
// public :
//     friend void difference(point , point);
//     point(int a, int b){
//     x=a;
//     y=b;
//     }
//     void displaypoint(){
//     cout<<"The point is : ("<<x<<","<<y<<")"<<endl;
//     }

// };
// void difference(point o1, point o2){
// int x_diff=o2.x-o1.x;
// int y_diff=o2.y-o1.y;
// double dist = sqrt((x_diff)*(x_diff) + (y_diff)*(y_diff));
// cout<<"Distance is :"<<dist<<" units";
// }

// int main()
// {
// point p1(1,2),p2(4,3);
// p1.displaypoint();
// p2.displaypoint();
// cout<<endl<<endl;
// difference(p1,p2);

// return 0;
// }