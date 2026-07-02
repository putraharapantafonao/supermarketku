<p align="center">
    <img src="public/images/logo-supermarketku.png" width="120" alt="SupermarketKu Logo">
</p>

<h1 align="center">SupermarketKu</h1>

<p align="center">
    <strong>Aplikasi Kasir & Manajemen Toko Modern Berbasis Web</strong>
</p>

<p align="center">
    <img src="https://img.shields.io/badge/Laravel-13.x-red?style=for-the-badge&logo=laravel" alt="Laravel Version">
    <img src="https://img.shields.io/badge/PHP-8.5-blue?style=for-the-badge&logo=php" alt="PHP Version">
    <img src="https://img.shields.io/badge/MySQL-Database-orange?style=for-the-badge&logo=mysql" alt="MySQL">
    <img src="https://img.shields.io/badge/Tailwind--CSS-UI-blueviolet?style=for-the-badge&logo=tailwind-css" alt="Tailwind CSS">
</p>

---

## 📌 Tentang SupermarketKu

**SupermarketKu** adalah platform sistem kasir (*Point of Sales*) dan manajemen inventaris toko retail yang dirancang untuk memberikan kemudahan transaksi secara cepat, akurat, dan aman. Aplikasi ini mengintegrasikan pencatatan stok barang, transaksi kasir otomatis, hingga pelaporan omzet dalam satu dasbor terpusat.

---

## 👥 Sistem Hak Akses (Multi-User)

Aplikasi ini dilengkapi dengan pengaman rute berbasis *Custom Middleware* (`CheckRole`) untuk memisahkan wewenang staf toko:

1. **Owner / Pemilik Toko (Role ID: 1)**
   * Mengelola data semua pegawai/staf.
   * Memantau grafik analisis penjualan dan statistik omzet harian/bulanan.
   * Akses penuh ke seluruh menu (Produk, Kategori, Supplier, Pembelian Stok, dll).
   * Bisa membuka halaman transaksi Kasir / POS.

2. **Admin (Role ID: 1)**
   * Memiliki akses operasional yang setara dengan Owner untuk mengelola produk, transaksi, dan stok opname guna membantu jalannya bisnis.

3. **Kasir (Role ID: 2)**
   * Akses langsung dikunci (*auto-redirect*) menuju halaman utama **Kasir / POS**.
   * Melayani *scan* produk, pengelolaan keranjang belanja, cetak struk nota pembayaran, dan kalkulasi uang kembalian.
   * Menu sensitif seperti grafik keuangan dan kelola pegawai disembunyikan dan diproteksi dari akses manual.

---

## 🚀 Fitur Utama

* **Sistem Kasir Terkunci (POS):** Antarmuka transaksi cepat yang responsif bagi kasir untuk mempercepat antrean belanja.
* **Cetak Stuk Thermal:** Desain struk belanja minimalis dengan perataan teks tengah (*center-aligned*) yang optimal untuk printer thermal ukuran 58mm/80mm.
* **Kelola Pegawai Dinamis:** Fitur bagi Owner/Admin untuk mendaftarkan, memperbarui, atau menonaktifkan akun staf baru langsung dari aplikasi.
* **Manajemen Inventaris:** Pemantauan sisa stok, batas minimum stok, pergerakan stok, dan laporan supplier secara real-time.
* **Grafik Penjualan:** Dasbor interaktif visual untuk melacak pergerakan omzet 7 hari terakhir.

---
