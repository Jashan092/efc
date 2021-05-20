#include<stdio.h>

int binarySearch(int arr[], int size, int element){
    int low,mid,high;
    low = 0;
    high = size - 1;
    while (low <= high){
    mid = (low + high)/2;
    if (arr[mid] == element){
        return mid;
    }
    if (arr[mid] < element){
        low = mid + 1;
    }
    else{
        high = mid - 1;
    }
    }
    return -1;
}

int main(){
    int arr[] = {1,3,4,5,7,10,56,40,20,60,430,30,50};
    int size = sizeof(arr)/sizeof(int);
    int element = 56;
    int searchIndex = binarySearch(arr,size,element);
    printf("The lement %d was found at %d",element,searchIndex);
    return 0;
}