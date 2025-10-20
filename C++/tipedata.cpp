#include <stdio.h>
#include <iostream>
#include <conio.h>
using namespace std;

main()
{
    char a[30] = "---BELAJAR TIPE DATA---";
    short b;
    int c;
    long d;
    float e;
    double f;
    int g = 1;
    int h = 2;

    b = 10000;
    c = 1000000;
    d = 1000000000;
    e = 3.12;
    f = 3.12345;

    cout << a << endl;
    cout << "Tipe data short b = " << b << endl;
    cout << "Tipe data int c = " << c << endl;
    cout << "Tipe data long d = " << d << endl;
    cout << "Tipe data float e = " << e << endl;
    cout << "Tipe data double f = " << f << endl;
    cout << endl;

    cout << "Berikut hasil boolean " << endl;
    cout << (g < h);
    cout << endl;
    cout << (g > h);
    cout << endl;
    cout << (g == h); 
    cout << endl;
    cout << (g != h); 
    cout << endl;

    system("pause");
    return 0;

}