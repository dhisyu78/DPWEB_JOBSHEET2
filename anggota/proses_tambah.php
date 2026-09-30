<?php

session_start();

$no_anggota = trim($_POST['no_anggota'] ?? '');
$nama = trim($_POST['nama'] ?? '');
$alamat = trim($_POST['alamat'] ?? '');
$no_hp = trim($_POST['no_hp'] ?? '');

$errors = [];

if ($no_anggota === '') {

    $errors[] = "No. anggota wajib diisi.";

}

if ($nama === '') {

    $errors[] = "Nama wajib diisi.";

}

if (!empty($errors)) {

    $_SESSION['flash'] = [

        'type' => 'error',

        'pesan' => implode(' ', $errors)

    ];

    header('Location: tambah.php');

    exit;
}

if (!isset($_SESSION['anggota'])) {

    $_SESSION['anggota'] = [];

}

$_SESSION['anggota'][] = [

    'no_anggota' => $no_anggota,

    'nama' => $nama,

    'alamat' => $alamat,

    'no_hp' => $no_hp,

];

$_SESSION['flash'] = [

    'type' => 'success',

    'pesan' => 'Anggota berhasil ditambahkan.'

];

header('Location: list.php');

exit;