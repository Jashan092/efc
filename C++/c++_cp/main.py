#include <iostream>
using namespace std;

class interest
{
    int principle , years , interestRate , returnValue;
    public:

    interest(){};
    interest(int p , int y , float r);
    interest(int p , int y , int r );
    void show();
};

interest :: interest(int p , int y , float r)
{
    principle = p;
    years = y;
    interestRate = r;
    returnValue = principle;
    for (int i = 0; i < y; i++)
    {
        returnValue *= ( 1 + r );
    }
}

interest :: interest(int p , int y , int r)
{
    principle = p;
    years = y;
    interestRate = float(r)/100;
    returnValue = principle;
    for (int i = 0; i < y; i++)
    {
        returnValue *= ( 1 + r );
    }
}

void interest :: show()
{
    cout 
        << endl 
        << "Principal amount was " 
        << principle << endl 
        << "Return value after " << years
        << " is " << returnValue << endl;
}
int main()
{
        interest Jashan(100,1,0.1f);
        Jashan.show();
        return 0;
}