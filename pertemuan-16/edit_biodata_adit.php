<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

$id = $_GET['id'] ?? '';
if ($id == '') {
  header("location: baca_biodata_adit.php");
  exit;
}

$sql = "SELECT * FROM biodata_pengunjung WHERE id=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$data = mysqli_stmt_get_result($stmt)->fetch_assoc();

if (!$data) {
  header("location: baca_biodata_adit.php");
  exit;
}
?>

<h2>Edit Biodata</h2>

<form method="POST" action="proses_edit_biodata_adit.php">
  <input type="hidden" name="id" value="<?= $data['id'] ?>">

  Nama:<br>
  <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>"><br><br>

  Alamat:<br>
  <textarea name="alamat"><?= htmlspecialchars($data['alamat']) ?></textarea><br><br>

  Tanggal:<br>
  <input type="date" name="tanggal" value="<?= $data['tanggal'] ?>"><br><br>

  <button type="submit">Update</button>
</form>
