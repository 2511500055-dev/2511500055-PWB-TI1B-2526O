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



/* cek apakah data benar-benar terhapus */
if (mysqli_stmt_affected_rows($stmt) <= 0) {
  $_SESSION['flash_error'] = 'Data gagal dihapus.';
} else {
  $_SESSION['flash_sukses'] = 'Data berhasil dihapus.';
}

/* ================= AKHIR TAMBAHAN ================= */

header("location: baca_biodata_adit.php");
exit;
