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
					
					III. LATAR BELAKANG PENDIDIKAN 
					<hr>

					<label for="email"><b>LATAR BELAKANG PENDIDIKAN</b></label>
									<select class="form-control" id="latar" name="latar">
										<option >DII</option>
										<option >DIII</option>
										<option >S1</option><option >S2</option>
										<option >ND JATC</option>
										<option >ND SATC</option>
										
										</select>
						<hr>
					IV. JENIS SERTIFIKAT KOMPETENSI YANG DIMILIKI 
					<hr>
					<label for="email"><b>JENIS SERTIFIKAT KOMPETENSI YANG DIMILIKI  </b></label>
					
									<select class="form-control" id="jenissertifi" name="jenissertifi">
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
					
					V. APAKAH ANDA PERNAH GAGAL UJIAN SEBELUMNYA, DALAM KURUN WAKTU 30 HARI?
					<hr>

					<label for="email"><b>APAKAH ANDA PERNAH GAGAL UJIAN SEBELUMNYA, DALAM KURUN WAKTU 30 HARI?</b></label>
							<select class="form-control" id="pernahgagal" name="pernahgagal">
										<option >Ya</option>
										<option >Tidak</option>
									</select>
					<hr>
					<p>Saya menjamin bahwa apa yang saya tuliskan dalam form ini adalah benar </p>

					
				 <div class="input">			    
			    <button id="submit" class="button" id="addp" name="addp" style="width: 100%;">Selesai</button>
				</div>
				
				  </div>
				  
				 
				
		</div>
	</div>
     
 
</div>
 </form>

	
<?php

if(isset($_POST['addp'])){
	//$email = $_POST['email'];	
	$latar = $_POST['latar'];
			$jenissertifi = $_POST['jenissertifi'];
			$pernahgagal = $_POST['pernahgagal'];
		

	$sqlUpdate = mysqli_query($con,"UPDATE tb_detuser SET latar='$latar',jenissertifi='$jenissertifi',
		pernahgagal='$pernahgagal'
		WHERE iduser='$email'");
		header('location:login.php');
}else{
//echo '<script language="javascript">';
//echo 'alert("Terjadi Kesalahan")';
//echo '</script>';
}
	
	?>
	
	
</body>
</html>