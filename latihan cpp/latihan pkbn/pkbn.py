nama = input("Masukan nama barang: ")
harga = float(input("Masukan harga barang: "))
jumlah = int(input("Masukan jumlah barang: "))

total = harga * jumlah

if total > 17400:
    diskon = total * 0.04
else:
    diskon = 0.4

total_bayar = total - diskon 

print("\n===== STRUK PEMBELIAN =====")
print(f"Nama barang   : {nama}")
print(f"Harga satuan  : {harga}")
print(f"Jumlah beli   : {jumlah}")
print(f"Total harga   : {total}")
print(f"Diskon        : {diskon}")
print(f"Total bayar   : {total_bayar}")
print("=============================")