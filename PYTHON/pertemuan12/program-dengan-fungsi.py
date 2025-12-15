# Variabel global untuk menyimpan data Buku
buku = []

# fungsi untuk menampilkan semua data
def show_data():
    if len(buku) == 0:
        print("BELUM ADA DATA")
    else:
        for indeks, judul in enumerate(buku):
            print(f"[{indeks}] {judul}")

# fungsi untuk menambah data
def insert_data():
    buku_baru = input("Judul Buku: ")
    buku.append(buku_baru)
    print("Data berhasil ditambahkan")

# fungsi untuk edit data
def edit_data():
    show_data()
    try:
        indeks = int(input("Inputkan ID buku: "))
        if indeks < 0 or indeks >= len(buku):
            print("ID salah")
        else:
            judul_baru = input("Judul baru: ")
            buku[indeks] = judul_baru
            print("Data berhasil diubah")
    except ValueError:
        print("Input harus angka")

# fungsi untuk menghapus data
def delete_data():
    show_data()
    try:
        indeks = int(input("Inputkan ID buku: "))
        if indeks < 0 or indeks >= len(buku):
            print("ID salah")
        else:
            buku.pop(indeks)
            print("Data berhasil dihapus")
    except ValueError:
        print("Input harus angka")

# fungsi untuk menampilkan menu
def show_menu():
    print("\n----------- MENU ----------")
    print("[1] Show Data")
    print("[2] Insert Data")
    print("[3] Edit Data")
    print("[4] Delete Data")
    print("[5] Exit")

    try:
        menu = int(input("PILIH MENU> "))
    except ValueError:
        print("Menu harus angka")
        return

    if menu == 1:
        show_data()
    elif menu == 2:
        insert_data()
    elif menu == 3:
        edit_data()
    elif menu == 4:
        delete_data()
    elif menu == 5:
        print("Keluar dari program")
        exit()
    else:
        print("Salah pilih!")

if __name__ == "__main__":
    while True:
        show_menu()
