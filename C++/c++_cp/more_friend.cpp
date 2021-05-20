#include <iostream>
using namespace std;

class Y;

class X
{
    int data;
    friend void exchange(X & , Y &);
    public:
        void setData(int a)
        {
            data = a;
        }
        void getData()
        {
            cout << "The data is "  << data << endl;
        }
};

class Y
{
    int data2;
    friend void exchange(X & , Y &);
    public:
        void setData(int b)
        {
            data2 = b;
        }
        void getData()
        {
            cout << "The data of Y is " << data2 << endl;
        }
};

void exchange(X &x , Y &y)
{
    int temp = x.data;
    x.data = y.data2;
    y.data2 = temp;
}

int main()
{
        X Jashan;
        Y Elvy;
        Jashan.setData(10);
        Elvy.setData(40);
        exchange(Jashan, Elvy);
        Jashan.getData();
        Elvy.getData();

        return 0;
}