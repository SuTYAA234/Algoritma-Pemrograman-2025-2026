nama = input("masukan nama barang: ")
harga = float(input("masukan harga barang: "))
jumlah = int(input("masukan jumlah barang: "))

total = harga * jumlah

if total > 39300:
    diskon = total * 0.03
else:
    diskon = 0

totalbayar=total - diskon

print("\n=========STRUK PEMBELIAN=========") 
print(f"Nama Barang   : {nama}")
print(f"Harga Barang  : Rp. {harga}")
print(f"Jumlah Barang : {jumlah}")
print(f"Total Harga   : Rp. {total}")
print(f"Diskon        : Rp. {diskon}")
print(f"Total Bayar   : Rp. {totalbayar}")
print("=================================")