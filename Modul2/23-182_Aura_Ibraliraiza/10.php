# Inisialisasi variabel
total_harga = 0
beli_lagi = "ya"

# Daftar menu dan harga
daftar_menu = {
    "1": {"nama": "Nasi Goreng", "harga": 15000},
    "2": {"nama": "Mie Ayam", "harga": 12000},
    "3": {"nama": "Soto Ayam", "harga": 10000},
    "4": {"nama": "Es Teh", "harga": 5000},
    "5": {"nama": "Es Jeruk", "harga": 7000}
}

print("--- Selamat Datang di Warung Makan Sederhana ---")
print("------------------ Daftar Menu ------------------")
for kode, menu in daftar_menu.items():
    print(f"{kode}. {menu['nama']} \t(Rp {menu['harga']:,})")
print("-------------------------------------------------")

# Perulangan untuk memesan menu
while beli_lagi.lower() == "ya":
    pilihan = input("Masukkan kode menu yang ingin dibeli: ")

    if pilihan in daftar_menu:
        menu_terpilih = daftar_menu[pilihan]
        harga_item = menu_terpilih["harga"]
        nama_item = menu_terpilih["nama"]

        # Hitung subtotal
        total_harga += harga_item
        print(f"Anda memesan {nama_item}. Harga: Rp {harga_item:,}")
        
    else:
        print("Kode menu tidak valid. Silakan pilih kode yang benar.")

    # Tanyakan apakah ingin membeli lagi
    beli_lagi = input("Apakah ada item lain yang ingin dibeli? (ya/tidak): ")
    print("-------------------------------------------------")

# Menampilkan total pembayaran
print("\n--- Rincian Pembayaran ---")
print(f"Total yang harus dibayar: Rp {total_harga:,}")
print("Terima kasih atas kunjungan Anda!")
