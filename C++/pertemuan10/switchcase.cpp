#include <iostream>
#include <string>
#include <iomanip> 

using namespace std;

int main() {
    string nama = "muhammad rivan surya";
    string input;

    bool valid = false;

    while (!valid) {
        cout << "Masukkan nama: ";
        getline(cin, input);

        if (input == nama) {
            cout << "Nama sesuai!\n";
            valid = true;
        } else {
            cout << "Nama salah, coba lagi!\n";
        }
    }

    int asli = 2510393;
    double saldo = 2510393;

    cout << "====== MENU ======\n";
    cout << "1. Cek saldo\n";
    cout << "2. Transfer\n";
    cout << "3. Tarik tunai\n";
    cout << "4. Setor tunai\n";
    cout << "5. Keluar\n";

    cout << "\n=============HASIL TRANSAKSI==============\n";
    cout << "Halo " << nama << endl;

    int pilihan;
    cout << "Masukkan pilihan menu: ";
    cin >> pilihan;

    switch (pilihan) {
    case 1: {
        cout << "Masukkan NIM anda: ";
        string nim;
        cin >> nim;

        if (nim == to_string(asli)) {
            cout << "Sisa saldo di rekening Anda Rp. "
                 << fixed << setprecision(0) << saldo << endl; // <-- tidak scientific
        } else {
            cout << "NIM salah! Tidak dapat menampilkan saldo.\n";
        }
        break;
    }

    case 2:
        cout << "Fitur sedang dalam pengembangan\n";
        break;

    case 3:
        cout << "Fitur sedang dalam pengembangan\n";
        break;

    case 4:
        cout << "Fitur sedang dalam pengembangan\n";
        break;

    case 5:
        cout << "Keluar dari menu. Sampai jumpa lagi!\n";
        break;

    default:
        cout << "Pilihan tidak ada, silakan pilih antara 1-5\n";
        break;
    }

    cout << "\nTerimakasih telah menggunakan layanan kami.\n";
    cout << "==========================================\n";

    return 0;
}
