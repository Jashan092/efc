#include <iostream>
using namespace std;

class Employee
{
    int id;
    int salary;

public:
    void setId(void)
    {
        cout << "Enter ID of Employee: ";
        cin >> id;
    }
    void getId(void)
    {
        salary = 122;
        cout << "The ID of this employee is " << id << endl;
    }
};

int main()
{
    // Employee Jashan , Elvy , Jordan;
    // Jashan.setId();
    // Jashan.getId();
    Employee fb[4];
    for (int i = 0; i < 4; i++)
    {
        fb[i].setId();
        fb[i].getId();
    }
}