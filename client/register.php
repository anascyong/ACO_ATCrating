<?php
session_start();
include("db.php");
$email = $_GET['id'];	
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="../js/jquery.js"></script>
<link rel="stylesheet" href="../css/global.css">
<link rel="stylesheet" href="css/awesome/css/font-awesome.css">
<script>
$(document).ready(function(){
	$('.hover_bkgr_fricc').show();
    $('.hover_bkgr_fricc').click(function(){
        $('.hover_bkgr_fricc').hide();

    });
    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
});
</script>
<style>

.header{
	width: 100%;
	padding: 10px;
	font-size: 15px;
	background-color: #0789c1;
	color: #fff;
	text-align: center;
}

.bodyxx {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}


.naija-flag {
  display: flex;
}
.first-green {
  height: 100px;
  width: 50%;
  background-color: green;
}
.white {
  height: 100px;
  width: 50%;
  background-color: white;
}

</style>

</head>
<body>
	<div class="header">		
		<img src="../images/icon.png" style="width: 100px;">
		<h1>Register</h1>
		<p>FORMULIR PENERBITAN / PERPANJANGAN RATING
PERSONEL PEMANDU LALU LINTAS PENERBANGAN </p>
	</div>
	  <form method="post" >
	<div class="naija-flag">
    <div class="first-green">
		<div class="bodyxx">		
					
					<div class="container">
					
					I. JENIS PERMOHONAN RATING
					<hr>

					<label for="email"><b>Alamat Anda</b></label>
					<input type="text" placeholder="Masukkan Alamat Unit Kerja" name="alamat" id="alamat" >
					<label for="email"><b>Tanggal Lahir</b></label>
					<input type="text" placeholder="Masukkan Tanggal Lahir" name="ttl" id="ttl" >
					<label for="email"><b>Alamat Unit Kerja</b></label>
					<input type="text" placeholder="Masukkan Alamat Unit Kerja" name="alamatunuitkerja" id="alamatunuitkerja" >
					<label for="email"><b>Jumlah Jam Pemanduan</b></label>
					<input type="text" placeholder=" TWR* …………… Jam" name="jamtwr" id="jamtwr" >
					<input type="text" placeholder=" APP* …………… Jam" name="jamapp" id="jamapp" >
					<label for="email"><b>Tipe Permohonan : </b></label>
									<select class="form-control" id="tipepemohon" name="tipepemohon">
										<option >Penerbitan</option>
										<option >Perpanjangan</option>
										</select>
					<label for="email"><b>Nama ATS Unit </b></label>
					<input type="text" placeholder="Nama ATS Unit" name="namaats" id="namaats" >
					<label for="email"><b>Alamat Kantor </b></label>
					<input type="text" placeholder="Alamat Kantor" name="alamatkantor" id="alamatkantor" >
					<label for="email"><b>Rating yang dipilih : </b></label>
									<select class="form-control" id="rating" name="rating">
										<option >Aerodrodrome Control Rating (TWR) </option>
										<option >Approach Control Procedural Rating (APP) </option>
										<option >Approach Control Surveillance Rating (APS)</option>
										<option >Area Control Procedural Rating (ACP) </option>
										<option >Area Control Surveillance Rating (ACS) </option>
									</select>
					<hr>
					
				  </div>
				  
				 
				
		</div>
	</div>
	<div class="first-green">
		<div class="bodyxx">		
					
					<div class="container">
					
					II. INFORMASI PEMOHON 
					<hr>

					<label for="email"><b>Kebangsaan</b></label>
					<input type="text" placeholder="Kebangsaan" name="kebangsaan" id="kebangsaan" >
					<label for="email"><b>No. Handphone</b></label>
					<input type="text" placeholder="No. Handphone" name="tlp" id="tlp" >
					<label for="email"><b>Jenis Kelamin : </b></label>
									<select class="form-control" id="jk" name="jk">
										<option >Laki-laki</option>
										<option >Perempuan</option>
									</select>
					<hr>
					<label for="email"><b>Apakah anda Memiliki Rating Sebelumnya ?</b></label>
					<select class="form-control" id="ratings" name="ratings">
										<option >Ya</option>
										<option >Tidak</option>
									</select>
					<hr>
					<label for="email"><b>Jika Ya, alasan Pengajuan Rating : </b></label>
					<select class="form-control" id="alasanr" name="alasanr">
										<option ></option>
										<option >Penambahan Rating</option>
										<option >Penambahan Rating</option>
										<option >Pengaktifan Rating Kembali</option>
										<option >Penugasan</option>
										<option >Penerbitan</option>
										<option >Perpanjangan</option>
									</select>
					<hr>			
					<label for="email"><b>Jenis Rating</b></label>
					<input type="text" placeholder="Jenis Rating" name="jenisrat" id="jenisrat" >
					<label for="email"><b>Lokasi Rating</b></label>
					<input type="text" placeholder="Lokasi Rating" name="lokasira" id="lokasira" >
					<label for="email"><b>Masa Berlaku Rating</b></label>
					<input type="text" placeholder="Masa Berlaku Rating" name="masara" id="masara" >
					<hr>
					<label for="email"><b>Apakah anda memiliki sertifikat kesehatan minimal Kelas 3 ?  : </b></label>
					<select class="form-control" id="sertisehat" name="sertisehat">
										<option ></option>
										<option >Ya</option>
										<option >Tidak</option>
									</select>
					<hr>
					<label for="email"><b>Tanggal dikeluarkan</b></label>
					<input type="text" placeholder="Tanggal dikeluarkan" name="tglsert" id="tglsert" >
					<label for="email"><b>Nama Dokter Penguji </b></label>
					<input type="text" placeholder="Nama Dokter Penguji" name="dokterserti" id="dokterserti" >
					<hr>
				
				  </div>
				  
				 
				
		</div>
	</div>
     <div class="first-green">
		<div class="bodyxx">		
					
					<div class="container">
					
					
					<hr>

					<label for="email"><b>Apakah anda memiliki sertifikat ICAO Language Proficiency ?</b></label>
					<select class="form-control" id="sertiicao" name="sertiicao">
										<option ></option>
										<option >Ya</option>
										<option >Tidak</option>
									</select>

						<hr>	
					<label for="email"><b>Nama Rater</b></label>
					<input type="text" placeholder="Nama Rater" name="nrat" id="nrat" >
					<label for="email"><b>Lembaga Pelatihan </b></label>
					<input type="text" placeholder="Lembaga Pelatihan" name="lpel" id="lpel" >
					<label for="email"><b>Tanggal Dikeluarkan </b></label>
					<input type="text" placeholder="Tanggal Dikeluarkan" name="tglpel" id="tglpel" >
					<label for="email"><b>Level</b></label>
					<input type="text" placeholder="Level" name="lvlpel" id="lvlpel" >
					<label for="email"><b>Apakah anda memiliki Surat Rekomendasi OJTI ? </b>*Hanya untuk penerbitan rating</label>
					<select class="form-control" id="rekomojti" name="rekomojti">
										<option ></option>
										<option >Ya</option>
										<option >Tidak</option>
									</select>
					<hr>
					<label for="email"><b>Nomor Surat </b></label>
					<input type="text" placeholder="Nomor Surat " name="nreko" id="nreko" >
					<label for="email"><b>Tanggal Surat</b></label>
					<input type="text" placeholder="Tanggal Surat" name="tglreko" id="tglreko" >
					<label for="email"><b>Jumlah Jam dan Durasi Pemanduan</b></label>
					<input type="text" placeholder="Controller : …….. Jam" name="jpandu" id="jpandu" >
					<input type="text" placeholder="Durasi : ………Bulan dan ….. Hari" name="durasipandu" id="durasipandu" >
					<label for="email"><b>Nama OJTI</b></label>
					<input type="text" placeholder="Nama OJTI" name="nmaojti" id="nmaojti" >
					<label for="email"><b>Nomor Lisensi OJTI</b></label>
					<input type="text" placeholder="Nomor Lisensi OJTI" name="lisenojti" id="lisenojti" >
					<label for="email"><b>Apakah anda terlibat pelanggaran peraturan yang disebabkan oleh 
penggunaan obat-obatan terlarang, marijuana, dan obat anti depresi atau obat 
stimulant, atau pengoperasian kendaraan, bermotor dengan pengaruh alcohol ? </b></label>
					<select class="form-control" id="pelanggaran" name="pelanggaran">
										<option ></option>
										<option >Ya</option>
										<option >Tidak</option>
									</select>
				
					<hr>
					<label for="email"><b>Jika Ya, Tanggal Pelanggaran</b></label>
					<input type="text" placeholder="Jika Ya, Tanggal Pelanggaran" name="tglpela" id="tglpela" >
					<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

				 <div class="input">			    
			    <button id="submit" class="button" id="addp" name="addp" style="width: 100%;">Selanjutnya</button>
				</div>
				
				 
				
		</div>
	</div>
 
</div>
 </form>

	
<?php

if(isset($_POST['addp'])){
	//$email = $_POST['email'];	
	$alamat = $_POST['alamat'];
			$tipepemohon = $_POST['tipepemohon'];
			$ttl = $_POST['ttl'];
		$alamatunuitkerja = $_POST['alamatunuitkerja'];
	$jamtwr = $_POST['jamtwr'];				$jamapp = $_POST['jamapp'];
	$namaats = $_POST['namaats'];			$alamatkantor = $_POST['alamatkantor'];
	$rating = $_POST['rating'];				$kebangsaan = $_POST['kebangsaan'];
	$tlp = $_POST['tlp'];					$jk = $_POST['jk'];
	$ratings = $_POST['ratings'];			$alasanr = $_POST['alasanr'];
	$jenisrat = $_POST['jenisrat'];			$lokasira = $_POST['lokasira'];
	$masara = $_POST['masara'];				$sertisehat = $_POST['sertisehat'];
	$tglsert = $_POST['tglsert'];			$dokterserti = $_POST['dokterserti'];
	$sertiicao = $_POST['sertiicao'];		$nrat = $_POST['nrat'];
	$lpel = $_POST['lpel'];					$tglpel = $_POST['tglpel'];
	$lvlpel = $_POST['lvlpel'];				$rekomojti = $_POST['rekomojti'];
	$nreko = $_POST['nreko'];				$tglreko = $_POST['tglreko'];
	$jpandu = $_POST['jpandu'];				$durasipandu = $_POST['durasipandu'];
	$nmaojti = $_POST['nmaojti'];			$lisenojti = $_POST['lisenojti'];
	$pelanggaran = $_POST['pelanggaran'];	$tglpela = $_POST['tglpela'];

	$sqlUpdate = mysqli_query($con,"UPDATE tb_detuser SET tipepemohon='$tipepemohon',alamat='$alamat',
		ttl='$ttl',alamatunuitkerja='$alamatunuitkerja',jamtwr='$jamtwr',jamapp='$jamapp',namaats='$namaats',alamatkantor='$alamatkantor',rating='$rating',
		kebangsaan='$kebangsaan',tlp='$tlp',jk='$jk',ratings='$ratings',alasanr='$alasanr',jenisrat='$jenisrat',lokasira='$lokasira',masara='$masara',
		sertisehat='$sertisehat',tglsert='$tglsert',dokterserti='$dokterserti',sertiicao='$sertiicao',nrat='$nrat',lpel='$lpel',tglpel='$tglpel',
		lvlpel='$lvlpel',rekomojti='$rekomojti',nreko='$nreko',tglreko='$tglreko',jpandu='$jpandu',durasipandu='$durasipandu',nmaojti='$nmaojti',
		lisenojti='$lisenojti',pelanggaran='$pelanggaran',tglpela='$tglpela'
		
		
		WHERE iduser='$email'");
		header('location:register2.php?id='.$email);
}else{
//echo '<script language="javascript">';
//echo 'alert("Terjadi Kesalahan")';
//echo '</script>';
}
	
	?>
	
	
</body>
</html>