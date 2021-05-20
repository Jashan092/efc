#include <iostream>

using namespace std;

// Call by value
/* void changeValue(int* a, int* b)
{
    int temp = *a;
    *a = *b;
    *b = temp;
}
*/
void changeReference(int a , int b)
{
    int temp = a;
    a = b;
    b = temp;
}


int main()
{
    int a = 1;
    int b = 2;
    changeReference(a,b);
    cout << a << endl;
    cout << b << endl;
}















