#include<stdio.h>

int bs(int arr[],int size, int element){
    int low, high,mid;  
    low = 0;
    high = size - 1;
    while( low <= high ){
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

int main (){
    int arr[] = {23,45,75,23,45,11,12,24,79,87};
    int element;
    printf("Enter the element:");
    scanf("%d",&element);
    int size = sizeof(arr)/sizeof(int);
    int index = bs(arr,size,element);
    printf("The element %d found at %d ",element,index);

    return 0;
}