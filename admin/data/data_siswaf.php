<?php
session_start();
include("../db.php");
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table class="table">
			<tr>
				<th width="10">No.</th>
				<th>Nomor Peserta</th>
				<th>Nama Peserta</th>
				<th>Password</th>
				<th>Kelompok</th>
				<th width="10">Command</th>
			</tr>
			<?php
				$offset = $_GET['offset'];
				$limit = $_GET['limit'];
				if(isset($_GET['katakunci'])){
					$katakunci = $_GET['katakunci'];
				}else{
					$katakunci = "";
				}
				$no = $offset+1;
				$sql = "select * from tbl_siswa where nama_siswa LIKE '%".$katakunci."%' LIMIT ".$limit." OFFSET ".$offset;
				$query = mysqli_query($con,$sql);
				while($res = mysqli_fetch_array($query)){
					echo "<tr>";
						echo "<td>$no</td>";
						echo "<td>".$res['nopes_siswa']."</td>";
						echo "<td>".$res['nama_siswa']."</td>";				
						echo "<td>".$res['password_siswa']."</td>";
						echo "<td>".$res['kelompok_siswa']."</td>";
						echo "<td><a href='act/cetakatc.php?id=".$res['id_siswa']."'><img src=images/printer.png></a>";?>
						</td>
						<?php
					echo "</tr>";
					$no++;
				}
			?>
		</table>
</body>
</html>