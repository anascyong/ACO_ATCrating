<?php
session_start();
include("../db.php");
//require "excel_reader.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/global.css">
	
	<style type="text/css">
		.kartu{
			border:1px solid #333;
			width: 95%;
			height: 450px;
			padding:10px;
			font-family: arial;
			margin:17px 22px 26px 0;
			float: left;
			font-size: 12px;
		}
	</style>
</head>
<body>
	<?php

$ids=$_GET['id'];
	$sekolah = mysqli_fetch_array(mysqli_query($con,"select * from tbl_siswa where id_siswa='$ids'"));
	$email = $sekolah['nopes_siswa'];
	
	$ss = mysqli_fetch_array(mysqli_query($con,"select * from tb_detuser where iduser='$email'"));
	$se = $ss['alamat'];

	    	?>
			<table width="100%" >
	    			<tr>
	    				<td width="20%" style="text-align: center;"></td>
	    				<td align="center">
	    					<b style="margin:2px;">SURAT PERMOHONAN PENERBITAN/PERPANJANGAN* RATING
PERSONEL PEMANDU LALU LINTAS PENERBANGAN </b><br><br><br>
	    					
	    				</td>
	    			</tr>
					<tr>
	    				<td style="text-align: center;">Nama : </td>
						<td style="text-align: left;">Nama : </td>
					</tr>
					<tr>
	    				<td style="text-align: center;">Klasifikasi : </td>
						<td  style="text-align: left;">Biasa</td>
					</tr>
					<tr>
	    					<td style="text-align: center;">Lampiran : </td>
							<td style="text-align: left;">….. Berkas</td>
					</tr>
					<tr>
	    					<td style="text-align: center;">Perihal : </td>
							<td  style="text-align: left;">Permohonan Penerbitan/Perpanjangan* Rating Personel Pemandu Lalu Lintas Penerbangan</td>
					</tr>
		</table>	<br><br>
<table width="100%" >		
					<tr>
	    					<td style="text-align: center;">
							Perihal : </td>
							<td  style="text-align: left;">Permohonan Penerbitan/Perpanjangan* Rating Personel Pemandu Lalu Lintas Penerbangan</td>
					</tr>
					
	    		</table>
	    	<div class="kartu">
	    		<table width="100%" class="table">
	    			<tr>
	    				<td width="20%" style="text-align: center;"><img style="width: 60px;" src="../images/<?php echo $sekolah['logo_sekolah'];?>"></td>
	    				<td align="center">
	    					<b style="margin:2px;"><?php echo $_POST['namaUjian'];?></b><br>
	    					<b style="font-size: 20px;"><?php echo $sekolah['nama_sekolah'];?></b><br>
	    					<b><?php echo $sekolah['alamat_sekolah'];?></b>
	    				</td>
	    			</tr>
	    		</table>
	    		<table width="50%" border="0" cellpadding="2" style="float:left;padding:5px">
	    			<tr>
	    				<td><b>Nomor Peserta</b></td>
	    				<td>:</td>
	    				<td><?php echo $data->val($i, 1);?></td>
	    			</tr>
	    			<tr>
	    				<td><b>Nama Peserta</b></td>
	    				<td>:</td>
	    				<td><?php echo $data->val($i, 2);?></td>
	    			</tr>
	    			<tr>
	    				<td><b>Kelas</b></td>
	    				<td>:</td>
	    				<td><?php echo cariKelas($data->val($i, 3));?></td>
	    			</tr>
	    		</table>
	    		<table width="50%" border="0" cellpadding="2" style="padding:5px">	    			
	    			<tr>
	    				<td><b>Password</b></td>
	    				<td>:</td>
	    				<td><?php echo $data->val($i, 4);?></td>
	    			</tr>
	    			<tr>
	    				<td><b>Kelompok</b></td>
	    				<td>:</td>
	    				<td><?php echo $data->val($i, 5);?></td>
	    			</tr>
	    		</table>
	    		<table width="100%" border="1" class="table2" style="font-size: 10px;">
	    			<tr>
	    				<th align="center">Hari</th>
	    				<?php
	    				$jmlKolom = 6 + $jmlHari;//kolom setelah jumlah hari + jumlah hari
	    				//manfaatkan jml hari untuk hitung lebar kolom biar pas
	    				$LK = 100/$jmlHari;
	    				$LK = $LK."%";
	    				for($k = 6;$k < $jmlKolom;$k++){
	    					$judul[$k] = $data->val(2, $k);
	    					echo "<th style='text-align:center; font-size:10px;width:".$LK.";'><b>".$judul[$k]."</b></th>";
	    				}
	    				?>
	    			</tr>
	    			<tr>
	    				<th align="center">Waktu</th>
	    				<?php
	    				$jmlKolom = 6 + $jmlHari;
	    				for($k = 6;$k < $jmlKolom;$k++){
	    					$waktu[$k] = $data->val(3, $k);
	    					echo "<th style='text-align:center; font-size:10px;'><b>".$waktu[$k]."</b></th>";
	    				}
	    				?>
	    			</tr>
	    			<tr>
	    				<td>Ruang</td>
	    				<?php
	    					for($r = 1;$r<=$jmlHari;$r++){
	    						$ruang[$r] = $data->val($i, $kolom);
	    						echo "<td align='center'>".$ruang[$r]."</td>";
	    						$kolom++;
	    					}
	    				?>
	    			</tr>
	    			<tr>
	    				<td>Sesi</td>
    					<?php
    					for($s = 1;$s<=$jmlHari;$s++){
    						$sesi[$r] = $data->val($i, $kolom);
    						echo "<td align='center'>".$sesi[$r]."</td>";
    						$kolom++;
    					}
	    				?>
	    			</tr>
	    			<tr>
	    				<td>Mapel</td>
    					<?php
    					for($t = 1;$t<=$jmlHari;$t++){
    						$mapel[$r] = $data->val($i, $kolom);
    						echo "<td align='center'>".$mapel[$r]."</td>";
    						$kolom++;
    					}
	    				?>
	    			</tr>
	    			<tr>
	    				<td>Paraf</td>
	    				<?php
    					for($s = 1;$s<=$jmlHari;$s++){
    						echo "<td align='center'></td>";
    					}
	    				?>
	    			</tr>
	    		</table>
	    		<table width="100%">
	    			<tr>
	    				<td width="50%"></td><td align="right"><?php echo $_POST['titiMangsa'];?></td>
	    			</tr>
	    			<tr>
	    				<td width="50%"></td><td align="right">Kepala Sekolah</td>
	    			</tr>
	    			<tr>
	    				<td width="50%"></td><td align="right">&nbsp</td>
	    			</tr>
	    			<tr>
	    				<td width="50%"></td><td align="right">&nbsp</td>
	    			</tr>
	    			<tr>
	    				<td width="50%"></td><td align="right"><u><b><?php echo $sekolah['kepala_sekolah'];?></b></u></td>
	    			</tr>
	    			<tr>
	    				<td width="50%"></td><td align="right"><?php echo "NIP. ".$sekolah['nip_kepsek'];?></td>
	    			</tr>
	    		</table>
	    	</div>
	    	<?php
	    

	
	//unlink($_FILES['fileImport']['name']);
	?>
	
	<?php
	echo '<script type="text/javascript"> berhasil(); </script>';
	?>
</body>
</html>