a = int(input("masukan angka pertama:"))
b = int(input("masukan angka kedua:"))

if a > b: 
  print(a,"lebih besar dari",b)
elif a<b:
  print(a,"lebih kecil dari",b)
else:
  print("keduanya sama besar")

print("apakah keduanya sama?",a==b)