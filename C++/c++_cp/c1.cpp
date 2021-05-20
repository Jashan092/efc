#include <iostream>
using namespace std;

class Employee
{
    int id;
    static int count;

public:
    void setName(void)
    {
        cout << "Enter the ID" << endl;
        cin >> id;
        count++;
    }
    void getName(void)                                                               
    {
        cout << "The ID of this employee is " << id << " and this employee number " << count << endl;
    }
    static void getCount()
    {
        cout <<"The value of count is " << count << endl;
    }
};

int Employee ::count;

int main()
{
    Employee Jashan, Elvy, Moron;
    Jashan.setName();
    Employee::getCount();
    Jashan.getName();
    Elvy.setName();
    Employee :: getCount();
    Elvy.getName();
    return 0;
}