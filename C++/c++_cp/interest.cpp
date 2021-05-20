#include <iostream>
using namespace std;

class interest
{
	int principle, rate, time , amount;

	public:
			interest(){}
			interest(int p , int r , int t);
			interest(int p , float r , int t);
			void show();
};	

interest :: interest(int p, int r, int t)
{
	principle = p;
	time = t;
	rate= float(r) / 100;
	amount = principle;
	for (int i = 0; i < time; i++)
	{
		amount = amount * (1 + rate);
	}
}
interest :: interest(int p, float r, int t)
{
	principle = p;
	time = t;
	rate = r;
	amount = principle;
	for (int i = 0; i < time; i++)
	{
		amount = amount * (1 + rate);
	}
	void show();
}

void interest :: show()
{
	cout << "The value of principle was " << principle << " and the time was " << time << " and the interest is " << amount << endl;
}

int main()
{
	interest Jashan(100,1,1);
	Jashan.show();
	return 0;
}
