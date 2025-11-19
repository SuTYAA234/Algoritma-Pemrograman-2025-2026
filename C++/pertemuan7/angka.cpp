#include <iostream>
using namespace std;

int main(){
    int a,b;
    cout<<"Masukan angka pertama:";
    cin>> a;
    cout<<"Masukan angka kedua:";
    cin>> b;

    if(a>b)
     cout<<a<<"lebih besar dari"<<endl;
    else if(a<b)
     cout<<a<<"lebih besar dari"<<endl;
    else
    cout<<"Keduanya sama benar"<<endl;

    cout<<"Apakah keduanya sama?"<<(a==b);

    system("pause");
    return 0;
}