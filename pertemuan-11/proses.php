<?php
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('index.php?contact');
}

$nama  = bersihkan($_POST['txtNama'] ?? '');
$email = bersihkan($_POST['txtEmail'] ?? '');
$pesan = bersihkan($_POST['txtPesan'] ?? '');

#Validasi sederhana
$errors = []; // Ini array untuk menampung semua error yang ada

if ($nama === '') {
    $errors[] = 'Nama wajib diisi.';
} 
// >>> TAMBAHAN: VALIDASI PANJANG MINIMAL NAMA (3 KARAKTER) <<<
elseif (strlen($nama) < 3) {
    $errors[] = 'Nama minimal harus 3 karakter.';
}
// >>> AKHIR TAMBAHAN NAMA <<<

if ($email === '') {
    $errors[] = 'Email wajib diisi.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Format e-mail tidak valid.';
}

if ($pesan === '') {
    $errors[] = 'Pesan wajib diisi.';
}
// >>> TAMBAHAN: VALIDASI PANJANG MINIMAL PESAN (10 KARAKTER) <<<
elseif (strlen($pesan) < 10) {
    $errors[] = 'Pesan minimal harus 10 karakter.';
}
// >>> AKHIR TAMBAHAN PESAN <<<


/*
kondisi di bawah ini hanya dikerjakan jika ada error,
simpan nilai lama dan pesan error, lalu redirect
(konsep PRG)
*/
if (!empty($errors)) {
    $_SESSION['old'] = [
        'nama'  => $nama,
        'email' => $email,
        'pesan' => $pesan,
    ];

    $_SESSION['flash_error'] = $errors;
    redirect_ke('index.php?contact');
}

#menyiapkan query INSERT dengan prepared statement
$sql = "INSERT INTO tbl_tamu (cnama, cemail, cpesan) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    #jika gagal prepare, kirim pesan error ke pengguna (tanpa detail sensitif)
    $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
    redirect_ke('index.php#contact');
}

#bind parameter dan eksekusi (s = string)
mysqli_stmt_bind_param($stmt, "sss", $nama, $email, $pesan);

if (mysqli_stmt_execute($stmt)) { #jika berhasil, kosongkan old value, beri pesan sukses
    unset($_SESSION['old']);
    $_SESSION['flash_sukses'] = 'Terima kasih, data Anda sudah tersimpan.';
    redirect_ke('index.php#contact'); #pola PRG: kembali ke form / halaman home
} else { #jika gagal, simpan kembali old value dan tampilkan error umum
    $_SESSION['old'] = [
        'nama'  => $nama,
        'email' => $email,
        'pesan' => $pesan,
    ];
    $_SESSION['flash_error'] = 'Data gagal disimpan. Silakan coba lagi.';
    redirect_ke('index.php#contact');
}

#tutup statement
mysqli_stmt_close($stmt);


// Bagian kode di bawah ini tampak tidak relevan atau redundant, tapi dibiarkan utuh sesuai kode awal
$arrContact = [
    "nama" => $_POST["txtNama"] ?? "",
    "email" => $_POST["txtEmail"] ?? "",
    "pesan" => $_POST["txtPesan"] ?? ""
];
$_SESSION["contact"] = $arrContact;
header("location: index.php#about"); // Perlu dicek, biasanya redirect hanya satu kali

$arrBiodata = [
    "nim" => $_POST["txtNim"] ?? "",
    "nama" => $_POST["txtNmLengkap"] ?? "",
    "tempat" => $_POST["txtT4Lhr"] ?? "",
    "tanggal" => $_POST["txtTglLhr"] ?? "",
    "hobi" => $_POST["txtHobi"] ?? "",
    "pasangan" => $_POST["txtPasangan"] ?? "",
    "pekerjaan" => $_POST["txtKerja"] ?? "",
    "ortu" => $_POST["txtNmOrtu"] ?? "",
    "kakak" => $_POST["txtNmKakak"] ?? "",
    "adik" => $_POST["txtNmAdik"] ?? ""
];
$_SESSION["biodata"] = $arrBiodata;

header("location: index.php#about"); // Perlu dicek, biasanya redirect hanya satu kali