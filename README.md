<p align="center">
    <img src="public/images/logo-supermarketku.png" width="120" alt="SupermarketKu Logo">
</p>

<h1 align="center">SupermarketKu</h1>

<p align="center">
    <strong>Aplikasi Kasir & Manajemen Toko Modern Berbasis Web</strong>
</p>

<p align="center">
    <img src="https://img.shields.io/badge/Laravel-12.x-red?style=for-the-badge&logo=laravel" alt="Laravel Version">
    <img src="https://img.shields.io/badge/PHP-8.3%20%2F%208.5-blue?style=for-the-badge&logo=php" alt="PHP Version">
    <img src="https://img.shields.io/badge/MySQL-Database-orange?style=for-the-badge&logo=mysql" alt="MySQL">
    <img src="https://img.shields.io/badge/Tailwind--CSS-UI-blueviolet?style=for-the-badge&logo=tailwind-css" alt="Tailwind CSS">
</p>

---

## 🎓 Informasi Proyek Kuliah

* **Mata Kuliah:** Pemrograman Web Lanjut (Kelas A1)
* **Kelompok:** 6 (Enam)
* **Tugas:** Tugas Besar / Proyek Akhir Sistem Informasi Kasir Modern

### 👥 Anggota Kelompok:

| No | Nama Anggota | NIM |
|:--:|:---|:---:|
| 1 | **Putra Harapan Tafonao** | 240170030 |
| 2 | **Misbah Salsabilah** | 240170156 |
| 3 | **Reva Andrianti** | 240170056 |

---

## 📌 Tentang SupermarketKu

**SupermarketKu** adalah platform sistem kasir (*Point of Sales*) dan manajemen inventaris toko retail yang dirancang untuk memberikan kemudahan transaksi secara cepat, akurat, dan aman. Aplikasi ini mengintegrasikan pencatatan stok barang, transaksi kasir otomatis, hingga pelaporan omzet dalam satu dasbor terpusat.

---

## 👥 Sistem Hak Akses (Multi-User)

Aplikasi ini dilengkapi dengan pengaman rute berbasis *Custom Middleware* (`CheckRole`) untuk memisahkan wewenang operasional staf toko berdasarkan 4 tingkatan hak akses dengan ID yang terstruktur:

1. **Owner / Pemilik Toko (Role ID: 1)**
   * Mengelola data semua pegawai/staf (Tambah, Edit, Hapus akun).
   * Memantau grafik analisis penjualan dan statistik omzet harian/bulanan di Dasbor Utama.
   * Akses penuh ke seluruh menu sistem (Produk, Kategori, Supplier, Pembelian Stok).
   * Hak akses penuh untuk membuka halaman transaksi Kasir / POS.

2. **Admin (Role ID: 2)**
   * Memiliki akses operasional setara Owner untuk mengelola Master Data produk dan inventaris.
   * Membantu pengelolaan akun pegawai di sistem (kecuali membuat atau memodifikasi akun Owner).

3. **Kasir / Petugas Toko (Role ID: 3)**
   * Akses langsung dikunci (*auto-redirect*) menuju halaman utama **Kasir / POS**.
   * Melayani kelola keranjang belanja, *scan* barcode produk, kalkulasi pembayaran, dan cetak struk nota belanja.
   * Menu sensitif seperti grafik keuangan dan manajemen staf disembunyikan dan diproteksi ketat dari akses URL manual.

4. **Gudang / Logistik (Role ID: 4)**
   * Berfokus pada manajemen inventaris, pemantauan batas minimum stok, pergerakan stok (*stock movements*), dan *stock opname*.
   * Menu kasir dan laporan keuangan sensitif ditutup dari hak akses ini untuk menjaga validitas data internal.

---

## 🚀 Fitur Utama

* **Sistem Kasir Terkunci (POS):** Antarmuka transaksi dinamis dan responsif bagi kasir untuk mempercepat antrean belanja.
* **Cetak Struk Thermal:** Desain struk belanja minimalis dengan perataan teks tengah (*center-aligned*) yang dioptimalkan untuk printer thermal ukuran 58mm/80mm.
* **Kelola Pegawai Aman:** Manajemen user yang dilengkapi dengan proteksi *Mass Assignment Protection* (`$fillable`) dan pembatasan wewenang berjenjang.
* **Manajemen Inventaris & Stock Opname:** Pemantauan sisa stok barang dan laporan supplier secara *real-time*.
* **Visualisasi Dasbor Grafik:** Dasbor interaktif untuk melacak pergerakan omzet toko dalam 7 hari terakhir.
