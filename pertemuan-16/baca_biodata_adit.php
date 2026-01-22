<?php
session_start();
require 'koneksi.php';

$sql = "SELECT * FROM biodata_pengunjung ORDER BY id DESC";
$q = mysqli_query($conn, $sql);
?>

<h2>Data Biodata Pengunjung</h2>

<?php
if (!empty($_SESSION['flash_sukses'])) {
  echo "<p style='color:green'>".$_SESSION['flash_sukses']."</p>";
  unset($_SESSION['flash_sukses']);
}
if (!empty($_SESSION['flash_error'])) {
  echo "<p style='color:red'>".$_SESSION['flash_error']."</p>";
  unset($_SESSION['flash_error']);
}
?>

<table border="1" cellpadding="8">
<tr>
  <th>No</th>
  <th>Nama</th>
  <th>Alamat</th>
  <th>Tanggal</th>
  <th>Aksi</th>
</tr>

<?php $no=1; while($row=mysqli_fetch_assoc($q)): ?>
<tr>
  <td><?= $no++ ?></td>
  <td><?= htmlspecialchars($row['nama']) ?></td>
  <td><?= htmlspecialchars($row['alamat']) ?></td>
  <td><?= htmlspecialchars($row['tanggal']) ?></td>
  <td>
    <a href="edit_biodata_adit.php?id=<?= $row['id'] ?>">Edit</a> |
    <a href="hapus_biodata_adit.php?id=<?= $row['id'] ?>"
       onclick="return confirm('Yakin hapus data?')">Hapus</a>
  </td>
</tr>
<?php endwhile; ?>
</table>
