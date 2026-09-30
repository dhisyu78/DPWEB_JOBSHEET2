<?php
session_start();
require __DIR__ . '/../includes/koneksi.php';

$no_anggota = trim($_POST['no_anggota'] ?? '');
$nama = trim($_POST['nama'] ?? '');
$alamat = trim($_POST['alamat'] ?? '');
$no_hp = trim($_POST['no_hp'] ?? '');

$errors = [];
if ($no_anggota === '') $errors[] = "Nomor Anggota wajib diisi.";
if ($nama === '') $errors[] = "Nama wajib diisi.";
if ($alamat === '') $errors[] = "Alamat wajib diisi.";
if ($no_hp === '') $errors[] = "Nomor HP wajib diisi.";

if (!empty($errors)) {
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)];
    header('Location: tambah.php');
    exit;
}

$stmt = $pdo->prepare(
    "INSERT INTO anggota (no_anggota, nama, alamat, no_hp)
     VALUES (:no_anggota, :nama, :alamat, :no_hp)
     RETURNING id"
);
$stmt->execute([
    'no_anggota' => $no_anggota,
    'nama' => $nama,
    'alamat' => $alamat,
    'no_hp' => $no_hp,
]);

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Anggota berhasil ditambahkan.'];
header('Location: list.php');
exit;