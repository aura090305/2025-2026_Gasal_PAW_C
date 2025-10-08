# 1. INPUT
# Menerima input nilai dari pengguna
# Menggunakan float() agar bisa menerima nilai desimal (contoh: 85.5)
try:
    nilai = float(input("Masukkan nilai angka mahasiswa (0-100): "))
except ValueError:
    print("Input tidak valid. Harap masukkan angka.")
    exit() # Keluar dari program jika input bukan angka

# 2. PROSES PERCABANGAN (Logika Penentuan Grade)
if nilai < 0 or nilai > 100:
    grade = "Nilai Tidak Valid"
    keterangan = "Nilai harus di antara 0 sampai 100."
elif nilai >= 90:
    grade = "A"
    keterangan = "Sangat Baik. Lulus dengan Pujian!"
elif nilai >= 80:
    grade = "B"
    keterangan = "Baik. Lulus."
elif nilai >= 70:
    grade = "C"
    keterangan = "Cukup. Lulus."
elif nilai >= 60:
    grade = "D"
    keterangan = "Kurang. Perlu Perbaikan."
else:
    # Nilai di bawah 60
    grade = "E"
    keterangan = "Gagal. Mengulang mata kuliah."

# 3. OUTPUT
print("\n--- Hasil Penilaian ---")
print(f"Nilai Angka Anda: {nilai}")
print(f"Grade Huruf: {grade}")
print(f"Keterangan: {keterangan}")
print("-----------------------")
