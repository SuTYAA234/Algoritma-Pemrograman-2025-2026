nim = input("Masukkan NIM: ")
# ubah sring menjadi array 
digit = [int(c) for c in nim]

#total
total = 0
for d in digit:
    total += d

#max
maks = digit[0]
for d in digit:
    if d > maks:
        maks = d

#min
minim = digit[0]
for d in digit:
    if d < minim:
        minim = d

#rata
rata = total / len(digit)

#reverse array
rev = []
for i in range(len(digit)-1, -1, -1):
    rev.append(digit[i])

print("digit:", digit)
print("total:", total)
print("maks:", maks)
print("minim:", minim)
print("rata-rata=", rata)
print("reverse:", rev)