#include <iostream>

class Shop
{
    int itemId[100];
    int itemPrice[100];
    int counter;

public:
    void initCounter(void) { counter = 0; }
    void setPrice(void);
    void displayPrice(void);
};

void Shop :: setPrice(void)
{
    std::cout << "Enter ID of your item number " << counter + 1 << std::endl;
    std::cin >> itemId[counter];
    std::cout << "Enter Price of your item" << std::endl;
    std::cin >> itemPrice[counter];
    counter++;
}

void Shop :: displayPrice(void)
{
    for (int i = 0; i < counter; i++)
    {
        std::cout << "The Price of item with ID " << itemId[i] << " is " << itemPrice[i] << std::endl;
    }
}

int main()
{
    Shop dukaan;
    dukaan.initCounter();
    dukaan.setPrice();
    dukaan.setPrice();
    dukaan.setPrice();
    dukaan.displayPrice();
}