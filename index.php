<!DOCTYPE html>
<html>
<head>
	<title>Keanggotan | Pendaftaran Online </title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>

<div class="cd-form">
<form name="formPendaftaran" action="proses.php"  method="POST" onsubmit="return validateForm()">
<fieldset>
<legend>Pendaftaran | Perpustakaan Nasional Republik Idonesia</legend>

<div class="half-width">
<label>Nama Lengkap :</label>
<input type="text" name="nama">
</div>

<div class="half-width">
<label>Email :</label>
<input type="email" name="email">
</div>

<div class="half-width">
<label>Password :</label>
<input type="password" name="pass">
</div>

<div class="half-width">
<label>Repeat Password :</label>
<input type="password" name="pass2">
</div>

<div class="half-width">
<p>
<label>Tempat Lahir :</label>
<input type="text" name="tempatlahir">
</p>
</div>

<div class="half-width" style="margin-top: 13px;">
<p>
<label style="margin-right: 10%;">Tanggal Lahir :</label>
<b>
<span class="cd-select" style="margin-right: 5%;">
<select name="tanggal">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select>
</span>
<span class="cd-select" style="margin-right: 5%;">
<select name="bulan">
<option>Januari</option>
<option>Februari</option>
<option>Maret</option>
<option>April</option>
<option>Mei</option>
<option>Juni</option>
<option>Juli</option>
<option>Agustus</option>
<option>September</option>
<option>Oktober</option>
<option>November</option>
<option>Desember</option>
</select>
</span>
<span class="cd-select" style="margin-right: 5%;">
<select name="tahun">
<option>2020</option>
<option>2019</option>
<option>2018</option>
<option>2017</option>
<option>2016</option>
<option>2015</option>
<option>2014</option>
<option>2013</option>
<option>2012</option>
<option>2011</option>
<option>2010</option>
<option>2009</option>
<option>2008</option>
<option>2007</option>
<option>2006</option>
<option>2005</option>
<option>2004</option>
<option>2003</option>
<option>2002</option>
<option>2001</option>
<option>2000</option>
<option>1999</option>
<option>1998</option>
<option>1997</option>
<option>1996</option>
<option>1995</option>
<option>1994</option>
<option>1993</option>
<option>1992</option>
<option>1991</option>
<option>1990</option>
<option>1989</option>
<option>1988</option>
<option>1987</option>
<option>1986</option>
<option>1985</option>
<option>1984</option>
<option>1983</option>
<option>1982</option>
<option>1981</option>
<option>1980</option>
<option>1979</option>
<option>1978</option>
<option>1977</option>
<option>1976</option>
<option>1975</option>
<option>1974</option>
<option>1973</option>
<option>1972</option>
<option>1971</option>
<option>1970</option>
<option>1969</option>
<option>1968</option>
<option>1967</option>
<option>1966</option>
<option>1965</option>
<option>1964</option>
<option>1963</option>
<option>1962</option>
<option>1961</option>
<option>1960</option>
<option>1959</option>
<option>1958</option>
<option>1957</option>
<option>1956</option>
<option>1955</option>
<option>1954</option>
<option>1953</option>
<option>1952</option>
<option>1951</option>
<option>1950</option>
<option>1949</option>
<option>1948</option>
<option>1947</option>
<option>1946</option>
<option>1945</option>
<option>1944</option>
<option>1943</option>
<option>1942</option>
<option>1941</option>
<option>1940</option>
</select>
</span>
</b>
</p>
</div>

<div class="half-width">
<p>
<label>Nomor Telepon Seluler :</label>
<input type="text" name="hp" onkeypress="return hanyaAngka(event)">
</p>
</div>

<div class="half-width">
<p>
<label>Nomor Telepon Rumah :</label>
<input type="text" name="home" onkeypress="return hanyaAngka(event)">
</p>
</div>

<div class="half-width">
<p>
<label>Jenis Kelamin :</label>
<b>
<span class="cd-select">
<select name="jk">
<option>Laki - Laki</option>
<option>Perempuan</option>
</select>
</span>
</b>
</p>
</div>

<div class="half-width">
<p>
<label>Pendidikan Terakhir :</label>
<b>
<span class="cd-select">
<select name="pt">
<option>SD</option>
<option>SMP</option>
<option>SMP</option>
<option>SMA</option>
<option>D1</option>
<option>D2</option>
<option>D3</option>
<option>S1/D4</option>
<option>S2</option>
<option>S3</option>
</select>
</span>
</b>
</p>
</div>

<div class="half-width">
<p>
<label>Status Perkawinan :</label>
<b>
<span class="cd-select">
<select name="sp">
<option>Belum Menikah</option>
<option>Menikah</option>
</select>
</span>
</b>
</p>
</div>

<div class="half-width">
<p>
<label>Pekerjaan :</label>
<b>
<span class="cd-select">
<select name="pj">
<option>BUMN</option>
<option>Pegawai Negeri</option>
<option>Peneliti</option>
<option>TNI/POLRI</option>
<option>Pegawai Swasta</option>
<option>Dosen</option>
<option>Pensiunan</option>
<option>Wiraswasta</option>
<option>Guru</option>
<option>Pelajar</option>
<option>Mahasiswa</option>
<option>Lainnya</option>
</select>
</span>
</b>
</p>
</div>


<div class="half-width">
<p >
<label>Alamat Identitas :</label>
<textarea name="ai" rows="10" cols="30" name="al1"></textarea>
</p>
<p class="half-width">
</p>
</div>
</fieldset>

<fieldset>
<legend>Alamat Tinggal Saat Ini</legend>
<div>
<ul class="cd-payment-gateways">
<li>
<input type="radio" name="payment-method" id="1">
<label for="1">Alamat Sesuai Identitas</label>
</li>
<li>
<input type="radio" name="payment-method" id="card" value="card" checked="">
<label for="card">Alamat Berbeda dengan alamat Identitas</label>
</li>
</ul> 
</div>
<div class="cd-credit-card">
<div>
<p class="half-width">
<label>Alamat Saat Ini :</label>
<textarea rows="10" cols="30" name="al2"></textarea>
</p>
<p class="half-width">
</p>
</div>
</div> 
</fieldset>
 <fieldset>
<div>
<input type="submit" value="SIMPAN">
</div>
</fieldset>
</form>
</div> 
<script>
        function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }
    </script>
 <script>
        function validateForm() {
            if (document.forms["formPendaftaran"]["nama"].value == "") {
                alert("Nama Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["nama"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["email"].value == "") {
                alert("Email Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["email"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["tempatlahir"].selectedIndex < 1) {
                alert("tempat lahir tidak boleh kosong.");
                document.forms["formPendaftaran"]["tempatlahir"].focus();
                return false;
            }
             if (document.forms["formPendaftaran"]["pass"].value == "") {
                alert("Password Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["pass"].focus();
                return false;
            }
		if (document.forms["formPendaftaran"]["pass2"].value == "") {
                alert("Password Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["pass2"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["hp"].value == "") {
                alert("Nomor Telepon seluler Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["hp"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["ai"].selectedIndex < 1) {
                alert("Alamat tidak boleh kosong.");
                document.forms["formPendaftaran"]["ai"].focus();
                return false;
            }
        }
    </script>

<script src="jquery-2.1.4.js.download"></script>
<script src="velocity.min.js.download"></script>
<script src="main-min.js.download"></script> 
</html>
