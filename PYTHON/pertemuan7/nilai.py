tugas = float(input("Masukan Nilai tugas:"))
uts = float(input("Masukan Nilai UTS:"))
uas = float(input("Masukan NIlai UAS:"))

nilai_akhir=(0.3* tugas)+(0.3* uts)+(0.4* uas)

print ("Nilai Akhir =" ,nilai_akhir)
if nilai_akhir>=60:
    print("Status: LULUS")
else:
    print("Status: TIDAK LULUS")