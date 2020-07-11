<?php

  // Menangkap isi variabel dari file yang telah kita isi pada form.php

  $nama   = $_POST['nama'];
  $email  = $_POST['email'];
  $tl     = $_POST['tempatlahir'];
  $tgl    = $_POST['tanggal'];
  $bln    = $_POST['bulan'];
  $thn    = $_POST['tahun'];
  $hp     = $_POST['hp'];
  $home   = $_POST['home'];
  $jk     = $_POST['jk'];
  $pt     = $_POST['pt'];
  $sp     = $_POST['sp'];
  $pj     = $_POST['pj'];
  $ai     = $_POST['ai'];
  $ax     = $_POST['al2'];


  // Format data yang akandiparsing
  $data = "\n $nama|$email|$tl|$tgl|$bln|$thn|$hp|$home|$jk|$pt|$sp|$pj|$ai|$ax";

  // Buka file mhs.txt, kemudian tuliskan isi variabel di atas kedalam mhs.txt
  $fh = fopen("data.txt", "a");
  fwrite($fh, $data);

  // Tutup file data.txt
  fclose($fh);
  print "Data Telah Tersimpan.</br><a href='tabel.php'>Lihat Data ></a>";

?>