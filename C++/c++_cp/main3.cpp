#include <iostream>

using namespace std;

int sum(int a,int b)
{
    static int c = 0;
    c = c + 1;
    return a+b + c;
}

int main()
{
    cout <<"This is C++"<< endl;
    cout << "The sum is " << sum(2,2) << endl;
    cout << "The sum is " << sum(2,2) << endl;
    cout << "The sum is " << sum(2,2) << endl;
    cout << "The sum is " << sum(2,2) << endl;
    cout << "The sum is " << sum(2,2) << endl;
    cout << "The sum is " << sum(2,2) << endl;
    cout << "The sum is " << sum(2,2) << endl;
}