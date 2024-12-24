// #include <iostream>

// using namespace std;

// int binarySearchRecursive(int arr[], int l, int r, int x)
// {
//     if (r >= l)
//     {
//         int mid = l + (r - l) / 2;


//         if (arr[mid] == x)
//             return mid;

//         // If element is smaller than mid, then it can only
//         // be present in left sub array
//         if (arr[mid] > x)
//             return binarySearchRecursive(arr, l, mid - 1, x);

//         // Else the element can only be present in right sub array
//         return binarySearchRecursive(arr, mid + 1, r, x);
//     }

//     // We reach here when element is not present in array
//     return -1;
// }

// int main(void)
// {
//     int arr[] = {2, 3, 4, 10, 40};
//     int x = 10;
//     int n = sizeof(arr) / sizeof(arr[0]);
//     int result = binarySearchRecursive(arr, 0, n - 1, x);
//     (result == -1) ? cout << "Element is not present in array"
//                    : cout << "Element is present at index " << result;
//      return 0;
// }
#include<iostream>
#include<stack>
using namespace std;
int main(){
stack<int> stk;
stk.push(10);
stk.push(20);
stk.push(30);
stk.push(40);
cout<<"original stack"<<endl;
stack<int> newstk = stk;
while(!newstk.empty()){
    cout<<newstk.top()<<" ";
    newstk.pop();
}
cout<<endl;
return 0;
}