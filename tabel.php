<!DOCTYPE HTML>
<html>
  <head>
    <title>Baca (Parsing) File mhs.txt</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

  <?php
  $txt_file    = file_get_contents('data.txt');
  $rows        = explode("\n", $txt_file);
  array_shift($rows);

  $i=1;

  foreach($rows as $row => $data)
  {

        // Explode digunakan untuk memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
        $row_data = explode('|', $data);

        $info[$row]['nama']           = $row_data[0];
        $info[$row]['email']          = $row_data[1];
        $info[$row]['alamat']         = $row_data[2];
        $info[$row]['tempatlahir']    = $row_data[3];
        $info[$row]['tanggal']        = $row_data[4];
        $info[$row]['bulan']          = $row_data[5];
        $info[$row]['tahun']          = $row_data[6];
        $info[$row]['hp']             = $row_data[7];
        $info[$row]['home']           = $row_data[8];
        $info[$row]['jk']             = $row_data[9];
        $info[$row]['pt']             = $row_data[10];
        $info[$row]['sp']             = $row_data[11];
        $info[$row]['pj']             = $row_data[12];
        $info[$row]['ai']             = $row_data[13];
        $info[$row]['al2']            = $row_data[14];

//Tabel

        // Menampilkan Data
       $i++;
      
       echo"<table class=Tabel border=1 cellspacing=0 cellpadding=0>";
      echo"<tr>
      <th rowspan=2>No.</th>
      <th rowspan=2>Nama</th>
      <th rowspan=2>Email</th>
      <th rowspan=2>Jenis Kelamin</th>
      <th colspan=2>Tempat/Tanggal Lahir</th>
      <th colspan=2>Kontak</th>
      <th rowspan=2>Pendidikan Terakhir</th>
      <th rowspan=2>Status Perkawinan</th>
      <th rowspan=2>Pekerjaan</th>
      <th colspan=2>Alamat</th>
      <tr>
      <th>Tempat</th>
      <th>Tanggal</th>
      <th>Telepon Seluler</th>
      <th>Telepon Rumah</th>
      <th>Alamat Identitas</th>
      <th>Alamat Saat Ini</th>
      </tr>
      </tr>";
      echo "<tr>
      <td align=center>$i</td>
      <td align=center>$row_data[0]</td>
      <td align=center>$row_data[1]</td>
      <td align=center>$row_data[9]</td>
      <td align=center>$row_data[3]</td>
      <td align=center>$row_data[4]/$row_data[5]/$row_data[6]</td>
      <td align=center>$row_data[7]</td>
      <td align=center>$row_data[8]</td>
      <td align=center>$row_data[10]</td>
      <td align=center>$row_data[11]</td>
      <td align=center>$row_data[12]</td>
      <td align=center>$row_data[13]</td>
      <td align=center>$row_data[14]</td>
    </tr>";
  echo"</table>";
  }
  ?>

</body>
</html>