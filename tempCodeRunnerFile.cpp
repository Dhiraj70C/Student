#include <stdio.h>

// Recursive function to calculate sum of array elements
int sumArray(int arr[], int n) {
    if (n == 0)
        return 0; // Base case: no elements, sum is 0
    return arr[n - 1] + sumArray(arr, n - 1); // Add last element and recurse
}

int main() {
    int n;
    printf("Enter the number of elements: ");
    scanf("%d", &n);

    int arr[n];
    printf("Enter %d elements:\n", n);
    for (int i = 0; i < n; i++) {
        scanf("%d", &arr[i]);
    }

    int sum = sumArray(arr, n); // Call recursive function
    printf("Sum of array elements: %d\n", sum);

    return 0;
}
