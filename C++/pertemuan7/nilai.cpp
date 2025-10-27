#include <iostream>
using namespace std;

int main()
{
    float tugas,uts,uas,nilaiakhir;

    cout<<"masukan nilai Tugas";
    cin>>tugas;
    cout<<"masukan nilai UTS";
    cin>>uts;
    cout<<"masukan nilai UAS";
    cin>>uas;

    nilaiakhir=(0.3*tugas)+(0.3*uts)+(0.4*uas);

    cout<<"nilai akhir:"<<nilaiakhir<<endl;
    if(nilaiakhir>=60)
        cout<<"status:LULUS";
    else
    {
        cout<<"status: TIDAK LULUS";
    }
    system("pause");

return 0;
}