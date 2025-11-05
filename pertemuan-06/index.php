<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Ini Header</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
            &#9776;
        </button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>selamat datang</h2>
            <P>ini contoh pragraf HTML.</P>
        </section>
        <section id="about">
            <?php
        $NIM = "2511500055";
        $NAMA = "Aditya Ihsani Wijaya";
        $TEMPAT_LAHIR = "Palembang";
        $TANGGAL_LAHIR = "07-Mei-2007";
        $HOBI = "Bermain game dan Healing";
        $PASANGAN = "Saya Memiliki Pasangan bernama Citra Suci Lestari, dia adalah
                            Pasangaan
                            terbaik yang saya temuin sejak saya SMA kelas 12 pada tanggal 7 April 2025, Dia bukan cuma
                            pacar yang
                            baik, tapi juga shabat dan rumah buat saya dia orang nyaa baik cantik tulus dan lucu, Pokok
                            nya
                            terimakasih atas semua hal baik yang pernah kamu lakukan udaa nyasar masuk ke hidupku dan
                            bikin semuanya
                            jadi amazing❤️‍🔥 &hearts;";
        $NAMA_ORANG_TUA = "Saya memiliki kedua orang tua. Ayah saya bernama Wewen
                            Susanto dan Ibu
                            saya bernama Veby Alphasierra.";
        $Nama_Adik = "nama adik laki-laki bernama Gilang Webi Geovany.";
        $Teman_Terbaik = "Teman Terbaik saya yang bernama Yan saputra, Sheby, Dara,
                            Fadillah Dwi
                            Reztari, mereka teman baik yang saya temuin pada tanggal 2 Maret 2025 merekaa baik dan
                            mereka yang
                            selalu memebrikan saya motivasi agar saya selalu bersemangat dan mereka selalu mensupport
                            saya, dan saya
                            mengucapkan TerimaKasih karna udaa jadi teman terbaik saya🤗🙌.";
        ?>
                        <p><strong>NIM:</strong><?php echo $NIM; ?></p>
                        <p><strong>Nama:</strong><?php echo $NAMA; ?> &#128526;</p>
                        <p><strong>Tempat Lahir:</strong><?php echo $TEMPAT_LAHIR; ?></p>
                        <p><strong>Tanggal Lahir:</strong><?php echo $TANGGAL_LAHIR; ?></p>
                        <p><strong>Hobi:</strong><?php echo $HOBI; ?> &#128526;</p>
                        <p><strong>pasangan:</strong><?php echo $PASANGAN; ?> ❤️‍🔥 &hearts;</p>
                        <p><strong>Nama Orang Tua:</strong><?php echo $NAMA_ORANG_TUA; ?></p>
                        <p><strong>Nama Adik:</strong><?php echo $Nama_Adik; ?></p>
                        <p><strong>Teman Terbaik:</strong><?php echo $Teman_Terbaik;?> 🤗🙌</p>

    </section>
    <section id="ipk">
        <h2>Nilai saya</h2>
        <?php
        $namaMatkul1 = "Algoritma dan Struktur Data";
    $sksMatkul1 = 3;
    $nilaiHadir1 = 90;
    $nilaiTugas1 = 70;
    $nilaiUTS1 = 78;
    $nilaiUAS1 = 72;

    $namaMatkul2 = "Agama";
    $sksMatkul2 = 2;
    $nilaiHadir2 = 76;
    $nilaiTugas2 = 60;
    $nilaiUTS2 = 75;
    $nilaiUAS2 = 80;

    $namaMatkul3 = "Matematika Diskrit";
    $sksMatkul3 = 3;
    $nilaiHadir3 = 86;
    $nilaiTugas3 = 75;
    $nilaiUTS3 = 80;
    $nilaiUAS3 = 76;

    $namaMatkul4 = "Sistem Operasi";
    $sksMatkul4 = 3;
    $nilaiHadir4 = 90;
    $nilaiTugas4 = 87;
    $nilaiUTS4 = 85;
    $nilaiUAS4 = 88;

    $namaMatkul5 = "Pemrograman Web Dasar";
    $sksMatkul5 = 3;
    $nilaiHadir5 = 70;
    $nilaiTugas5 = 80;
    $nilaiUTS5 = 96;
    $nilaiUAS5 = 97;

    function hitungGrade($nilaiAkhir, $hadir) {
      if ($hadir < 70) return ['E', 0];
      if ($nilaiAkhir >= 90) return ['A', 4];
      if ($nilaiAkhir >= 80) return ['A-', 3.7];
      if ($nilaiAkhir >= 75) return ['B+', 3.3];
      if ($nilaiAkhir >= 72) return ['B', 3];
      if ($nilaiAkhir >= 69) return ['B-', 2.7];
      if ($nilaiAkhir >= 60) return ['C+', 2.3];
      if ($nilaiAkhir >= 59) return ['C', 2];
      if ($nilaiAkhir >= 55) return ['C-', 1.7];
      if ($nilaiAkhir >= 30) return ['D', 1];
      return ['E', 0];
    }

    $totalBobot = 0;
    $totalSKS = 0;

    for ($i = 1; $i <= 5; $i++) {
      $nilaiAkhir = (0.1 * ${"nilaiHadir$i"}) + (0.2 * ${"nilaiTugas$i"}) + (0.3 * ${"nilaiUTS$i"}) + (0.4 * ${"nilaiUAS$i"});
      list($grade, $mutu) = hitungGrade($nilaiAkhir, ${"nilaiHadir$i"});
      $bobot = $mutu * ${"sksMatkul$i"};
      $status = ($grade == "D" || $grade == "E") ? "Gagal" : "Lulus";

      echo "<p><strong>Nama Matakuliah ke-$i:</strong> ${"namaMatkul$i"}</p>";
      echo "<p><strong>SKS:</strong> ${"sksMatkul$i"}</p>";
      echo "<p><strong>Kehadiran:</strong> ${"nilaiHadir$i"}</p>";
      echo "<p><strong>Tugas:</strong> ${"nilaiTugas$i"}</p>";
      echo "<p><strong>UTS:</strong> ${"nilaiUTS$i"}</p>";
      echo "<p><strong>UAS:</strong> ${"nilaiUAS$i"}</p>";
      echo "<p><strong>Nilai Akhir:</strong> " . round($nilaiAkhir, 2) . "</p>";
      echo "<p><strong>Grade:</strong> $grade</p>";
      echo "<p><strong>Angka Mutu:</strong> $mutu</p>";
      echo "<p><strong>Bobot:</strong> $bobot</p>";
      echo "<p><strong>Status:</strong> $status</p>";
      echo "<hr>";

      $totalBobot += $bobot;
      $totalSKS += ${"sksMatkul$i"};
    }

    $IPK = $totalBobot / $totalSKS;

    echo "<p><strong>Total Bobot:</strong> $totalBobot</p>";
    echo "<p><strong>Total SKS:</strong> $totalSKS</p>";
    echo "<p><strong>IPK:</strong> " . round($IPK, 2) . "</p>";
    ?>
    </section>
    <section id="contact>
            <h2>kontak kami</h2>
      <form action="" method="GET">
        <div class="form-row">
          <label for="txtNama">Nama:</label>
          <input type="text" id="txtNama" name="txtnama" placeholder="Masukan Nama" required autocomplete="name">
        </div>

        <div class="form-row">
          <label for="txtemail">Email:</label>
          <input type="email" id="txtemail" name="txtemail" placeholder="Masukan email" required autocomplete="email">
        </div>

        <label for="txtPesan">Pesan Anda:</label>
        <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
        <small id="charCount">0/200 karakter</small>
        </label>

        <div class="form-row">
          <button type="submit">Kirim</button>
          <button type="reset">Batal</button>
        </div>
      </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Muhammad Azka Nazhan [2511500062]</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>