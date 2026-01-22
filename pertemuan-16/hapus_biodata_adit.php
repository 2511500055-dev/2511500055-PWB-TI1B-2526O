<?php
session_start();
require 'koneksi.php';

$id = $_GET['id'] ?? '';
if ($id == '') {
  header("location: baca_biodata_adit.php");
  exit;
}

$sql = "DELETE FROM biodata_pengunjung WHERE id=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$_SESSION['flash_sukses'] = 'Data berhasil dihapus.';
header("location: baca_biodata_adit.php");
exit;
