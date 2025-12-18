<?php
    session_start();
    require 'koneksi.php';
    require 'fungsi.php';

    /* Ambil nilai cid dari GET dan lakukan validasi untuk
      mengecek cid harus angka dan lebih besar dari 0 (> 0).
      'options' => ['min_range' => 1] artinya cid harus >= 1
      (bukan 0, bahkan bukan negatif, bukan huruf, bukan HTML).
    */