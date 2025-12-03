#include <iostream>
#include <string>
#include <iomanip> 

using namespace std;

int main() {
    string nama;
    char benar;

    
    do {
        cout << "Masukkan nama Anda: ";
        getline(cin, nama);

        cout << "Apakah nama sudah benar? (Y/N): ";
        cin >> benar;
        benar = tolower(benar);

        cin.ignore(); 
        if (benar != 'y') {
            cout << "Nama salah. Silakan masukkan nama lagi.\n\n";
        }

    } while (benar != 'y');

    int nim;
    cout << "Masukkan NIM Anda Untuk mengecek saldo: ";
    cin >> nim;
    double saldo = nim;

    cout << "\nHalo, " << nama << "!\n";
    cout << "Saldo Anda adalah: Rp " << saldo << endl;

    cout << "\n===== Menu =====\n"
         << "1. Cek Saldo\n"
         << "2. Tarik Tunai\n"
         << "3. Setor Tunai\n"
         << "4. Transfer\n"
         << "5. Keluar\n\n";

    cout << "Pilih menu (1-5): ";
    int pilihan;
    cin >> pilihan;

    switch (pilihan) {
        case 1:
            cout << nama << ",\n";
            cout << "Saldo Anda adalah: Rp " << saldo << endl;
            break;

        case 2: {
            int tarik;
            cout << "Masukkan jumlah tarik tunai: Rp ";
            cin >> tarik;

            if (tarik > saldo) {
                cout << "Saldo tidak mencukupi untuk tarik tunai sebesar Rp " << tarik << endl;
            } else {
                saldo -= tarik;
                cout << "Tarik tunai sebesar Rp " << tarik << " berhasil.\n";
                cout << "Sisa saldo Anda: Rp " << saldo << endl;
            }
            break;
        }

        case 3: {
            int setor;
            cout << "Masukkan jumlah setor tunai: Rp ";
            cin >> setor;

            saldo += setor;
            cout << "Setor tunai sebesar Rp " << setor << " berhasil.\n";
            cout << "Saldo Anda sekarang: Rp " << saldo << endl;
            break;
        }

        case 4: {
            int transfer;
            cout << "Masukkan jumlah transfer: Rp ";
            cin >> transfer;

            saldo -= transfer;
            cout << "Transfer sebesar Rp " << transfer << " berhasil.\n";
            cout << "Saldo Anda sekarang: Rp " << saldo << endl;
            break;
        }

        case 5:
            cout << "Keluar dari menu. Sampai jumpa lagi!\n";
            break;

        default:
            cout << "Pilihan tidak valid. Silakan pilih menu antara 1-5.\n";
            break;
    }

    cout << "\nTerima kasih telah menggunakan layanan kami!\n";
    cout << "==============\n";

    return 0;
}
