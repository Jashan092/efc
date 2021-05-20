#include <iostream>
using namespace std;

class Complex;
class Calculator
{
public:
    int add(int a, int b)
    {
        return a + b;
    }
    int sumComplex(Complex, Complex);
};
class Complex
{
    int a, b;
    friend int Calculator ::sumComplex(Complex a1, Complex a2);

public:
    void setNumber(int n1, int n2)
    {
        a = n1;
        b = n2;
    }
    void getNumber()
    {
        cout << "Your number is " << a << " + " << b << "i" << endl;
    }
};
int Calculator ::sumComplex(Complex a1, Complex a2)
{
    return ((a1.a + a2.a));
}

int main()
{
    Complex Jashan, Elvy;
    Jashan.setNumber(1, 4);
    Jashan.getNumber();

    Elvy.setNumber(3, 6);
    Elvy.getNumber();
    Calculator calc;
    cout << "The sum of real part of Jashan and Elvy is " << calc.sumComplex(Jashan, Elvy) << endl;
    return 0;
}