<!DOCTYPE html>
<html>
	<head>
		<script>
			$(document).ready(function(){
				$(".bloker").hide();
			    var katakunci = $("#search").val();
			    $(".loadon").load("data/data_mapel.php?katakunci="+katakunci);

			    $("#search").keyup(function(){
			    	var katakunci = $("#search").val();
			    	$(".loadon").load("data/data_mapel.php?katakunci="+katakunci);			    	
			    });
			    $("#btnTambah").click(function(){
			    	$(".modalTambah").show();
			    	$(".bloker").show();
			    });
			    $("#btnCancelTambah").click(function(){
			    	$(".modalTambah").hide();
			    	$(".bloker").hide();
			    });

			    $("#btnMulaiTambah").click(function(){
			    	var nama = $("#nama").val();
			    	var kkm = $("#kkm").val();
			    	var jenis = $("#jenis").val();
			    	//alert(password);
			    	$.ajax({
			            type: "GET",
			            url: "data/data_mapel_add.php",
			            data:{
			                'nama' : nama,
			                'kkm' : kkm,
			                'jenis' : jenis
			            },
			            success : function(data){
			                //$('.loadon').load(data);
			                $(".loadon").load("data/data_mapel.php?katakunci="+katakunci);
			                $(".modalTambah").hide();
			                alert("Penambahan Materi Telah Berhasil");
			                $(".bloker").hide();
			            }
			        });
			    });

			});			
		</script>
	</head>
<body>

	<div class="box2">
		<b>Administrasi / Materi</b>
		<br><br><br>
		<input type="text" class="input" id="search" placeholder="Search">
		&nbsp
		<button class="button" id="btnTambah"><img style="margin-right: 5px;" src="images/plus.png">Tambah Materi</button>
		<br><br>
		<div class="loadon"></div>
	</div>

	<div class="modalTambah">
		<table border="0" cellspacing="10" width="100%">
			<tr>
				<td><input type="text" id="nama" class="input" placeholder="Nama Materi" style="width: 100%"></td>
			</tr>
			<tr>
				<td><input type="number" id="kkm" class="input" placeholder="KKM" style="width: 100%"></td>
			</tr>
			<tr>
				<td>
					<select class="input" id="jenis">
						<option value="peminatan">Peminatan</option>
						<option value="pilihan A">pilihan A</option>
						<option value="pilihan B">pilihan B</option>
						<option value="lainnya">Lainnya</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><button class="button" id="btnMulaiTambah">TAMBAH</button>&nbsp<button class="button" id="btnCancelTambah">CANCEL</button></td>
			</tr>
		</table>
	</div>
	<div class="bloker"></div>
</body>
</html>