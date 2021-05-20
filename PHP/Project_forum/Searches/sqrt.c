#include<stdio.h>

int main(){
    // algorithm for finding square root of a number.
    double guess = 10;
    double s = 16;
    double i = 0;
    double sqrt = (guess + (s/guess))/2;
    printf("The sqrt is %lf\n",sqrt);
    double sqrt2 = (sqrt + (s/sqrt))/2;
    printf("The sqrt is %lf\n",sqrt2);
    printf("The square root of number %f is %lf \n",s,sqrt2);
    return 0;
}