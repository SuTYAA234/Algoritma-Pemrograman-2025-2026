#include <iostream>
#include <vector>
using namespace std;

int main() {
    string nim;
    cout << "Masukkan NIM: ";
    cin >> nim;

    // Ubah string ke array digit
    vector<int> digit(nim.length());
    for (int i = 0; i < nim.length(); i++) {
        digit[i] = nim[i] - '0';
    }

    // Total
    int total = 0;
    for (int d : digit) {
        total += d;
    }

    // Maks & Minim
    int maks = digit[0];
    int minim = digit[0];
    for (int d : digit) {
        if (d > maks) maks = d;
        if (d < minim) minim = d;
    }

    // Rata-rata
    double rata = (double) total / digit.size();

    // Reverse array
    vector<int> rev(digit.size());
    for (int i = 0; i < digit.size(); i++) {
        rev[i] = digit[digit.size() - 1 - i];
    }

    // Output menyamping
    cout << "Digit        : ";
    for (int d : digit) {
        cout << d << " ";
    }
    cout << endl;

    cout << "Total        : " << total << endl;
    cout << "Maks         : " << maks << endl;
    cout << "Minim        : " << minim << endl;
    cout << "Rata-rata    : " << rata << endl;

    cout << "Reverse      : ";
    for (int r : rev) {
        cout << r << " ";
    }
    cout << endl;

    return 0;
}
