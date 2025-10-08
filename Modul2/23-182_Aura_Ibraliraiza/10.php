# Program Kasir Sederhana
print("=== SELAMAT DATANG DI KASIR WARUNG MAHASISWA ===")

# Daftar menu dan harga
menu = {
    "1": ("Nasi Goreng", 15000),
    "2": ("Mie Ayam", 12000),
    "3": ("Ayam Geprek", 18000),
    "4": ("Es Teh", 5000),
    "5": ("Kopi", 7000)
}

total = 0
lanjut = True

while lanjut:
    print("\n=== MENU MAKANAN & MINUMAN ===")
    for kode, (nama, harga) in menu.items():
        print(f"{kode}. {nama} - Rp{harga:,}")

    pilihan = input("\nMasukkan nomor menu yang ingin dibeli: ").strip()

    if pilihan in menu:
        nama_menu, harga_menu = menu[pilihan]
        try:
            jumlah = int(input(f"Berapa porsi {nama_menu}? "))
            if jumlah <= 0:
                print("Jumlah harus lebih dari 0.")
                continue
            subtotal = harga_menu * jumlah
            total += subtotal
            print(f"→ {nama_menu} x{jumlah} = Rp{subtotal:,}")
        except ValueError:
            print("Input jumlah tidak valid. Harus angka.")
    else:
        print("Menu tidak ditemukan. Coba lagi.")

    # Tanya apakah mau tambah item lagi
    ulang = input("Tambah menu lain? (y/n): ").strip().lower()
    if ulang != 'y':
        lanjut = False

# Output total akhir
print("\n===============================")
print(f"Total Belanja Anda = Rp{total:,}")
print("Terima kasih telah berbelanja")
print("===============================")
