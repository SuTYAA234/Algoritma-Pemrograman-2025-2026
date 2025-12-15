#include <iostream>
using namespace std;

float bagi(int a, int b){
float hasil = (float)a / (float)b;
return hasil;
}

int main(){
printf("Hasil 5/2: %.2f\n", bagi(5, 2));
printf("Hasil 10/2: %.2f\n", bagi(10, 2));
return 0;
}