# Rancangan UI/UX & Wireframe SIMPUS-Mini

Dokumen ini berisi rancangan untuk fitur-fitur yang belum diimplementasikan ke dalam kode HTML/CSS, yaitu sistem Login dan Transaksi (Peminjaman/Pengembalian).

## 1. Definisi Aktor
Terdapat 2 jenis pengguna (aktor) yang berinteraksi dengan sistem:
- **Tamu**: Hanya bisa melihat katalog buku (Beranda, Daftar Buku) tanpa login.
- **Petugas**: Harus login untuk mengakses seluruh fitur CRUD (Tambah/Edit/Hapus) dan transaksi peminjaman.

---

## 2. User Flow (Alur Pengguna)

### A. User Flow Peminjaman Buku
```text
[Petugas Login] -> [Dashboard] -> [Pilih menu "Peminjaman Baru"]
        -> [Pilih Anggota] -> [Pilih Buku (stok > 0)]
        -> [Simpan] -> [Stok buku berkurang 1] -> [Kembali ke Dashboard]

[Dashboard] -> [Menu "Pengembalian"] -> [Cari transaksi aktif (anggota/buku)]
        -> [Tandai "Dikembalikan"] -> [Stok buku bertambah 1]
        -> [Kembali ke Dashboard]

+--------------------------------------+
|              SIMPUS-Mini             |
|--------------------------------------|
|                                      |
|        [ Login Petugas ]             |
|                                      |
|   Username : [______________]        |
|   Password : [______________]        |
|                                      |
|          [   Masuk   ]               |
|                                      |
|   Belum punya akun? Daftar di sini   |
+--------------------------------------+

+-----------------------------------------------------+
| SIMPUS-Mini      Beranda | Buku | Anggota | Peminjaman | (Nama Petugas) Logout |
|-------------------------------------------------------|
|  [Total Buku]   [Total Anggota]   [Sedang Dipinjam]    |
|                                                         |
|  Aksi Cepat:                                           |
|  [ + Peminjaman Baru ]   [ + Pengembalian ]            |
|                                                         |
|  Transaksi Terbaru                                     |
|  --------------------------------------------------    |
|  Anggota | Buku | Tgl Pinjam | Status                  |
+-----------------------------------------------------+

+-----------------------------------------------------+
| SIMPUS-Mini      Beranda | Buku | Anggota | Peminjaman | (Nama Petugas) Logout |
|-------------------------------------------------------|
|                                                         |
|  [ Form Peminjaman Buku ]                              |
|                                                         |
|  Pilih Anggota : [ v Pilih Anggota...        ]         |
|  Pilih Buku    : [ v Pilih Buku (Stok > 0).. ]         |
|  Tgl Pinjam    : [ DD/MM/YYYY                ]         |
|                                                         |
|          [   Simpan Peminjaman   ]                     |
+-----------------------------------------------------+

+-----------------------------------------------------+
| SIMPUS-Mini      Beranda | Buku | Anggota | Peminjaman | (Nama Petugas) Logout |
|-------------------------------------------------------|
|                                                         |
|  [ Form Pengembalian Buku ]                            |
|                                                         |
|  Cari Peminjaman Aktif:                                |
|  [______________] [ Cari ]                             |
|                                                         |
|  Detail Transaksi:                                     |
|  - Anggota: Budi Santoso                               |
|  - Buku: Laskar Pelangi                                |
|  - Tgl Pinjam: 01/10/2026                              |
|                                                         |
|          [ Proses Pengembalian ]                       |
+-----------------------------------------------------+

+-----------------------------------------------------+
| SIMPUS-Mini      Beranda | Buku | Anggota | Peminjaman | (Nama Petugas) Logout |
|-------------------------------------------------------|
|                                                         |
|  [ Riwayat Peminjaman & Pengembalian ]                 |
|                                                         |
|  --------------------------------------------------    |
|  No | Anggota | Buku | Tgl Pinjam | Tgl Kembali | Status |
|  --------------------------------------------------    |
|  1  | Budi    | A... | 01/10/2026 | 05/10/2026  | Selesai|
|  2  | Siti    | B... | 02/10/2026 | -           | Pinjam |
+-----------------------------------------------------+
