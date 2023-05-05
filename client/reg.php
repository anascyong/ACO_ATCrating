<?php
session_start();
include("db.php");
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
html { 
  background: url(../images/gedung.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
*{
	box-sizing: border-box;
}

.header{
	width: 100%;
	padding: 10px;
	font-size: 15px;
	background-color: #0789c1;
	color: #fff;
	text-align: center;
}
.loginBox{
	margin: auto auto auto auto;
	position: absolute;
	top:0; left: 0; right: 0; bottom: 0;
	width: 30%;
	height: 350px;
	background-color: #efefef;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
	border-radius: 10px;
	overflow: hidden;
}
.loginBox .header{
	width: 100%;
	padding: 15px;
	background-color: #07004f;
	font-size: 15px;
	color:#ffffff;
}
.loginBox .body{
	padding: 5px;
}
.loginBox .body .input{
	width:100%;
	border:none;
}
.input-field {
  width: 80%;
  padding: 10px;
  outline: none;
}
.input-field:focus {
  border: 2px solid dodgerblue;
}
.icon {
  min-width: 50px;
  text-align: center;
  font-size: 15px;
}
.statusBar{
	width: 100%;
	padding: 10px;
	font-size: 12px;
	color: #dd0030;
	background-color: #ffc9d5;
	text-align: center;
}
.bloking{
     position: absolute;
     left: 0px;
     top: 0px;
     width:100%;
     height:100%;
     text-align:center;
     z-index: 1000;
     background-color: rgba(0, 0, 0, 0.6);
}
.bloking img{
	width: 50px;
	margin: auto;
	position: absolute;
	top: 0; left: 0; bottom: 0; right: 0;
}
/* Popup box BEGIN */
.hover_bkgr_fricc{
    background:rgba(0,0,0,.4);
    cursor:pointer;
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
    width:100%;
    z-index:10000;
}
.hover_bkgr_fricc .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 70%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
}
.trigger_popup_fricc {
    cursor: pointer;
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;
}
/* Popup box BEGIN */
</style>
<script>
		
</script>
</head>
<body>
	<div class="header">		
		<img src="../images/icon.png" style="width: 100px;">
	</div>
	
	<div class="loginBoxM loginBox">
		<div class="header">LOGIN Atau <a href="register.php">Register</a></div>
		  <form method="post" >
		<div class="body">
			<div class="input">
			    <i class="fa fa-user icon"></i>
			    <input class="input-field" type="text" placeholder="E-mail" id="email" name="email">
			</div>
			<div class="input">
			    <i class="fa fa-key icon"></i>
			    <input class="input-field" type="password" placeholder="Password" id="password" name="password">
			</div>
			<div class="input">
			    <i class="fa fa-user icon"></i>
			    <input class="input-field" type="text" placeholder="Nama Lengkap" id="nama" name="nama">
			</div>
			<div class="input">
			    <i class="fa fa-user icon"></i>
			    <input class="input-field" type="text" placeholder="Nomor Lisensi" id="lisensi" name="lisensi">
			</div>
			
			<div class="input">			    
			    <button id="submit" class="button" id="addp" name="addp" style="width: 100%;">Selanjutnya</button>
			</div>
			 </form>
			
		</div>
	</div>
<?php

if(isset($_POST['addp'])){
	$email = $_POST['email'];	
	$password = $_POST['password'];	
	$nama = $_POST['nama'];	
	$lisensi = $_POST['lisensi'];	
	//$savePoin = mysqli_query($con,"update tbl_status_ujian set nilai_pg='".$poin."' where id_ujian='".$_GET['idUjian']."' AND nopes_siswa='".$_SESSION['nopes']."'");
$qq = mysqli_query ($con,"insert into tbl_siswa (nopes_siswa,nama_siswa,id_kelas,password_siswa,kelompok_siswa,cek,lisensi)
	values('$email','$nama','29','$password','1','1','$lisensi')") or die(mysql_error());
$qq = mysqli_query ($con,"insert into tb_detuser (iduser)
	values('$email')") or die(mysql_error());	
	
$sql = mysqli_query($con,"select (id_siswa) from tbl_siswa ");
	$tampung = "";
	while($res = mysqli_fetch_array($sql)){
		$tampung = $tampung.",".$res['id_siswa'];
	}
	$tampung = substr($tampung, 1);
	$deret = explode(",",$tampung);
	/*for($i = 0;$i < count($deret) ; $i++){
		echo $deret[$i];
	}*/
	$sqlUpdate = mysqli_query($con,"UPDATE tbl_group SET grup='".$tampung."' WHERE id_group='15'");
	//celar cek di tabel siswa
	$sqlClear = mysqli_query($con,"UPDATE tbl_siswa SET cek='' ");
	header('location:register.php?id='.$email);
}else{
//echo '<script language="javascript">';
//echo 'alert("Terjadi Kesalahan")';
//echo '</script>';
}
	
	?>
</body>
</html>