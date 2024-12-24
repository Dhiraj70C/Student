#include <stdio.h>
#include <stdlib.h>

// Define a structure for tree nodes
struct Node {
    int data;
    struct Node* left;
    struct Node* right;
};

// Function to create a new node
struct Node* createNode(int data) {
    struct Node* newNode = (struct Node*)malloc(sizeof(struct Node));
    newNode->data = data;
    newNode->left = newNode->right = NULL;
    return newNode;
}

// Insert a node into the binary tree
struct Node* insert(struct Node* root, int data) {
    if (root == NULL) {
        return createNode(data);  // If tree is empty, create the root node
    }

    if (data < root->data) {
        root->left = insert(root->left, data);  // Insert into the left subtree
    } else {
        root->right = insert(root->right, data);  // Insert into the right subtree
    }

return root;
}

// Pre-order traversal of the tree (Root, Left, Right)
void preOrder(struct Node* root) {
    if (root != NULL) {
        printf("%d ", root->data);  // Print the root data
        preOrder(root->left);  // Traverse left subtree
        preOrder(root->right);  // Traverse right subtree
    }
}

int main() {
    struct Node* root = NULL;

    // Inserting nodes into the tree
    root = insert(root, 50);
    insert(root, 30);
    insert(root, 70);
    insert(root, 20);
    insert(root, 40);
    insert(root, 60);
    insert(root, 80);

    // Pre-order traversal of the tree
    printf("Pre-order traversal: ");
    preOrder(root);

    return 0;
}
