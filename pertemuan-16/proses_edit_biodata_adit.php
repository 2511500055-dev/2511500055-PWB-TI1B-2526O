<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

$id = bersihkan($_POST['id'] ?? '');
$nama = bersihkan($_POST['nama'] ?? '');
$alamat = bersihkan($_POST['alamat'] ?? '');
$tanggal = bersihkan($_POST['tanggal'] ?? '');

if ($nama=='' || $alamat=='' || $tanggal=='') {
  $_SESSION['flash_error'] = 'Semua field wajib diisi.';
  header("location: edit_biodata_adit.php?id=$id");
  exit;
}

$sql = "UPDATE biodata_pengunjung SET nama=?, alamat=?, tanggal=? WHERE id=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sssi", $nama, $alamat, $tanggal, $id);

mysqli_stmt_execute($stmt);

$_SESSION['flash_sukses'] = 'Data berhasil diupdate.';
header("location: baca_biodata_adit.php");
exit;
