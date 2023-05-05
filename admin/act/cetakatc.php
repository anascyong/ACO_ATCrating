<?php
session_start();
include("../db.php");
//require "excel_reader.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft10{font-size:14px;font-family:Times;color:#000000;}
	.ft11{font-size:14px;font-family:Times;color:#000000;}
	.ft12{font-size:11px;font-family:Times;color:#000000;}
	.ft13{font-size:14px;line-height:17px;font-family:Times;color:#000000;}
	.ft14{font-size:14px;line-height:21px;font-family:Times;color:#000000;}
-->
</style>
</head>
<?php

$ids=$_GET['id'];
	$d = mysqli_fetch_array(mysqli_query($con,"select * from tbl_siswa where id_siswa='$ids'"));
	$email = $d['nopes_siswa'];
	
	$s = mysqli_fetch_array(mysqli_query($con,"select * from tb_detuser where iduser='$email'"));
	

	    	?>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page1-div" style="position:relative;width:892px;height:1263px;">
<img width="892" height="1263" src="target001.png" alt="background image"/>
<p style="position:absolute;top:81px;left:198px;white-space:nowrap" class="ft10"><b>SURAT&#160;PERMOHONAN&#160;PENERBITAN/PERPANJANGAN*&#160;RATING&#160;</b></p>
<p style="position:absolute;top:109px;left:243px;white-space:nowrap" class="ft10"><b>PERSONEL&#160;PEMANDU&#160;LALU&#160;LINTAS&#160;PENERBANGAN&#160;&#160;</b></p>
<p style="position:absolute;top:138px;left:455px;white-space:nowrap" class="ft10"><b>&#160;</b></p>
<p style="position:absolute;top:166px;left:102px;white-space:nowrap" class="ft11">Nomor&#160;&#160;&#160;</p>
<p style="position:absolute;top:166px;left:210px;white-space:nowrap" class="ft11">:&#160;……&#160;/RTG/ATC-BDJ/……/20….&#160;</p>
<p style="position:absolute;top:194px;left:102px;white-space:nowrap" class="ft11">Klasifikasi&#160;</p>
<p style="position:absolute;top:194px;left:210px;white-space:nowrap" class="ft11">:&#160;Biasa&#160;</p>
<p style="position:absolute;top:223px;left:102px;white-space:nowrap" class="ft11">Lampiran&#160;&#160;</p>
<p style="position:absolute;top:223px;left:210px;white-space:nowrap" class="ft11">:&#160;…..&#160;&#160;Berkas&#160;</p>
<p style="position:absolute;top:251px;left:102px;white-space:nowrap" class="ft11">Perihal&#160;&#160;&#160;</p>
<p style="position:absolute;top:251px;left:210px;white-space:nowrap" class="ft11">:&#160;Permohonan&#160;Penerbitan/Perpanjangan*&#160;Rating&#160;Personel&#160;Pemandu&#160;Lalu&#160;Lintas&#160;&#160;</p>
<p style="position:absolute;top:280px;left:102px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:280px;left:156px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:280px;left:210px;white-space:nowrap" class="ft11">&#160;&#160;Penerbangan&#160;</p>
<p style="position:absolute;top:308px;left:102px;white-space:nowrap" class="ft10"><b>&#160;</b></p>
<p style="position:absolute;top:337px;left:102px;white-space:nowrap" class="ft10"><b>Kepada&#160;Yth&#160;&#160;</b></p>
<p style="position:absolute;top:366px;left:102px;white-space:nowrap" class="ft10"><b>ATC&#160;Checker&#160;PLLP&#160;Perum&#160;LPPNPI&#160;Cabang&#160;Banjarmasin&#160;</b></p>
<p style="position:absolute;top:394px;left:102px;white-space:nowrap" class="ft10"><b>Di&#160;Tempat&#160;&#160;</b></p>
<p style="position:absolute;top:422px;left:102px;white-space:nowrap" class="ft10"><b>&#160;</b></p>
<p style="position:absolute;top:451px;left:102px;white-space:nowrap" class="ft11">Dengan&#160;hormat,&#160;yang&#160;bertanda&#160;tangan&#160;dibawah&#160;ini&#160;:&#160;</p>
<p style="position:absolute;top:479px;left:118px;white-space:nowrap" class="ft11">a.&#160;&#160;Nama&#160;Lengkap&#160;&#160;&#160;</p>
<p style="position:absolute;top:479px;left:318px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:479px;left:372px;white-space:nowrap" class="ft11">:&#160;<?php echo $d['nama_siswa']; ?>.&#160;</p>
<p style="position:absolute;top:507px;left:118px;white-space:nowrap" class="ft11">b.&#160;&#160;Nomor&#160;Lisensi&#160;</p>
<p style="position:absolute;top:507px;left:264px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:507px;left:318px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:507px;left:372px;white-space:nowrap" class="ft11">:&#160;<?php echo $d['lisensi']; ?>.&#160;</p>
<p style="position:absolute;top:536px;left:118px;white-space:nowrap" class="ft11">c.&#160;&#160;Tempat&#160;dan&#160;Tanggal&#160;Lahir&#160;</p>
<p style="position:absolute;top:536px;left:372px;white-space:nowrap" class="ft11">:&#160;<?php echo $s['ttl']; ?>.&#160;</p>
<p style="position:absolute;top:564px;left:118px;white-space:nowrap" class="ft11">d.&#160;&#160;Alamat&#160;Unit&#160;Kerja&#160;</p>
<p style="position:absolute;top:564px;left:318px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:564px;left:372px;white-space:nowrap" class="ft11">:&#160;<?php echo $s['alamatunuitkerja']; ?>.&#160;</p>
<p style="position:absolute;top:593px;left:118px;white-space:nowrap" class="ft11">e.&#160;&#160;Jumlah&#160;Jam&#160;Pemanduan&#160;&#160;&#160;</p>
<p style="position:absolute;top:593px;left:372px;white-space:nowrap" class="ft11">:&#160;TWR*&#160;&#160;<?php echo $s['jamtwr']; ?>&#160;Jam&#160;</p>
<p style="position:absolute;top:621px;left:372px;white-space:nowrap" class="ft11">:&#160;APP*&#160;&#160;&#160;<?php echo $s['jamapp']; ?>&#160;Jam&#160;</p>
<p style="position:absolute;top:650px;left:102px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:678px;left:102px;white-space:nowrap" class="ft11">Dengan&#160;ini&#160;mengajukan&#160;permohonan&#160;untuk&#160;Penerbitan/Perpanjangan*&#160;&#160;Rating&#160;…………………….&#160;Di&#160;</p>
<p style="position:absolute;top:707px;left:102px;white-space:nowrap" class="ft11">Perum&#160;LPPNPI&#160;Cabang&#160;Banjarmasin.&#160;</p>
<p style="position:absolute;top:735px;left:102px;white-space:nowrap" class="ft11">Sebagai&#160;bahan&#160;pertimbangan,&#160;terlampir&#160;persyaratan&#160;administrasi&#160;&#160;:&#160;&#160;</p>
<p style="position:absolute;top:764px;left:455px;white-space:nowrap" class="ft10"><b>&#160;</b></p>
<p style="position:absolute;top:792px;left:117px;white-space:nowrap" class="ft11">No&#160;</p>
<p style="position:absolute;top:792px;left:203px;white-space:nowrap" class="ft11">PERSYARATAN&#160;ADMINISTRASI&#160;</p>
<p style="position:absolute;top:793px;left:498px;white-space:nowrap" class="ft11">HARDCOPY&#160;&#160;SOFTCOPY&#160;&#160;KETERANGAN&#160;</p>
<p style="position:absolute;top:822px;left:123px;white-space:nowrap" class="ft11">1&#160;</p>
<p style="position:absolute;top:822px;left:150px;white-space:nowrap" class="ft11">Buku&#160;Lisensi&#160;asli&#160;</p>
<p style="position:absolute;top:824px;left:544px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:824px;left:639px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:824px;left:746px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:863px;left:123px;white-space:nowrap" class="ft11">2&#160;</p>
<p style="position:absolute;top:854px;left:150px;white-space:nowrap" class="ft13">Formulir&#160;Permohonan&#160;Penerbitan/&#160;Perpanjangan&#160;<br/>Rating&#160;</p>
<p style="position:absolute;top:856px;left:544px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:856px;left:639px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:863px;left:746px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:899px;left:123px;white-space:nowrap" class="ft11">3&#160;</p>
<p style="position:absolute;top:899px;left:156px;white-space:nowrap" class="ft11">Sertifikat&#160;Kesehatan&#160;minimal&#160;Kelas&#160;3&#160;yang&#160;berlaku&#160;</p>
<p style="position:absolute;top:896px;left:544px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:896px;left:639px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:899px;left:746px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:924px;left:123px;white-space:nowrap" class="ft11">4&#160;</p>
<p style="position:absolute;top:924px;left:150px;white-space:nowrap" class="ft11">Sertifikat&#160;ICAO&#160;IELP&#160;minimal&#160;level&#160;4&#160;</p>
<p style="position:absolute;top:926px;left:544px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:926px;left:639px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:926px;left:746px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:953px;left:123px;white-space:nowrap" class="ft11">5&#160;&#160;ATC&#160;Personal&#160;Logbook&#160;</p>
<p style="position:absolute;top:956px;left:544px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:956px;left:639px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:956px;left:746px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:983px;left:123px;white-space:nowrap" class="ft11">6&#160;&#160;&#160;&#160;Sertifikat&#160;kompetensi&#160;dari&#160;lembaga&#160;Pelatihan**&#160;</p>
<p style="position:absolute;top:986px;left:544px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:986px;left:639px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:986px;left:746px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:1013px;left:123px;white-space:nowrap" class="ft11">7&#160;</p>
<p style="position:absolute;top:1013px;left:150px;white-space:nowrap" class="ft11">Surat&#160;Rekomendasi&#160;dari&#160;OJT-I**&#160;</p>
<p style="position:absolute;top:1015px;left:544px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:1015px;left:639px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:1015px;left:746px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:1045px;left:102px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:1082px;left:102px;white-space:nowrap" class="ft14">Banjarmasin,&#160;………………………………&#160;<br/>Pemohon&#160;&#160;<br/>&#160;</p>
<p style="position:absolute;top:1149px;left:102px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:1187px;left:102px;white-space:nowrap" class="ft11">……………………………..&#160;</p>
<p style="position:absolute;top:1223px;left:102px;white-space:nowrap" class="ft12"><i><b>Note&#160;:&#160;*&#160;coret&#160;yang&#160;tidak&#160;perlu&#160;/&#160;**hanya&#160;untuk&#160;penerbitan&#160;rating&#160;</b></i></p>
</div>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft20{font-size:14px;font-family:Times;color:#000000;}
	.ft21{font-size:14px;font-family:Times;color:#000000;}
	.ft22{font-size:14px;font-family:Times;color:#0000ff;}
	.ft23{font-size:14px;line-height:19px;font-family:Times;color:#000000;}
	.ft24{font-size:14px;line-height:18px;font-family:Times;color:#000000;}
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page2-div" style="position:relative;width:892px;height:1263px;">
<img width="892" height="1263" src="target002.png" alt="background image"/>
<p style="position:absolute;top:81px;left:244px;white-space:nowrap" class="ft20"><b>FORMULIR&#160;PENERBITAN&#160;/&#160;PERPANJANGAN&#160;RATING&#160;</b></p>
<p style="position:absolute;top:109px;left:243px;white-space:nowrap" class="ft20"><b>PERSONEL&#160;PEMANDU&#160;LALU&#160;LINTAS&#160;PENERBANGAN&#160;</b></p>
<p style="position:absolute;top:138px;left:378px;white-space:nowrap" class="ft20"><b>(PR&#160;15&#160;TAHUN&#160;2022)&#160;</b></p>
<p style="position:absolute;top:171px;left:134px;white-space:nowrap" class="ft21">&#160;</p>
<p style="position:absolute;top:171px;left:403px;white-space:nowrap" class="ft21">KEMENTERIAN&#160;PERHUBUNGAN&#160;</p>
<p style="position:absolute;top:199px;left:335px;white-space:nowrap" class="ft21">DIREKTORAT&#160;JENDERAL&#160;PERHUBUNGAN&#160;UDARA&#160;</p>
<p style="position:absolute;top:228px;left:369px;white-space:nowrap" class="ft21">DIREKTORAT&#160;NAVIGASI&#160;PENERBANGAN&#160;</p>
<p style="position:absolute;top:256px;left:250px;white-space:nowrap" class="ft21">Gedung&#160;Karya&#160;Lantai&#160;23,&#160;Jl.&#160;Medan&#160;Merdeka&#160;Barat&#160;No.8&#160;Jakarta&#160;10110&#160;–&#160;Indonesia&#160;</p>
<p style="position:absolute;top:285px;left:331px;white-space:nowrap" class="ft21">Phone&#160;:&#160;(62-21)&#160;350&#160;6451,&#160;3506553&#160;Fax&#160;:&#160;(62-21)&#160;350&#160;6663&#160;</p>
<p style="position:absolute;top:313px;left:314px;white-space:nowrap" class="ft21">Website&#160;:&#160;</p>
<p style="position:absolute;top:313px;left:381px;white-space:nowrap" class="ft22">www.dephub.go.id</p>
<p style="position:absolute;top:313px;left:507px;white-space:nowrap" class="ft21">&#160;Email&#160;:&#160;ats.division@dephub.go.id&#160;</p>
<p style="position:absolute;top:347px;left:68px;white-space:nowrap" class="ft20"><b>I.&#160;JENIS&#160;PERMOHONAN&#160;RATING</b>&#160;</p>
<p style="position:absolute;top:380px;left:75px;white-space:nowrap" class="ft21">A.&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;&#160;Penerbitan&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;&#160;Perpanjangan&#160;</p>
<p style="position:absolute;top:413px;left:75px;white-space:nowrap" class="ft21">B.&#160;&#160;Nama&#160;ATS&#160;Unit&#160;</p>
<p style="position:absolute;top:413px;left:290px;white-space:nowrap" class="ft21">:&#160;&#160;<?php echo $s['namaats']; ?></p>
<p style="position:absolute;top:446px;left:75px;white-space:nowrap" class="ft21">C.&#160;&#160;Alamat&#160;Kantor&#160;</p>
<p style="position:absolute;top:446px;left:290px;white-space:nowrap" class="ft21">:&#160;&#160;<?php echo $s['alamatkantor']; ?></p>
<p style="position:absolute;top:474px;left:290px;white-space:nowrap" class="ft21">&#160;</p>
<p style="position:absolute;top:507px;left:75px;white-space:nowrap" class="ft21">D.&#160;&#160;Rating&#160;yang&#160;dipilih&#160;</p>
<p style="position:absolute;top:507px;left:290px;white-space:nowrap" class="ft21">(&#160;&#160;&#160;&#160;)&#160;Aerodrodrome&#160;Control&#160;Rating&#160;(TWR)&#160;</p>
<p style="position:absolute;top:535px;left:290px;white-space:nowrap" class="ft21">(&#160;&#160;&#160;&#160;)&#160;Approach&#160;Control&#160;Procedural&#160;Rating&#160;(APP)&#160;</p>
<p style="position:absolute;top:563px;left:290px;white-space:nowrap" class="ft21">(&#160;&#160;&#160;&#160;)&#160;Approach&#160;Control&#160;Surveillance&#160;Rating&#160;(APS)&#160;</p>
<p style="position:absolute;top:591px;left:290px;white-space:nowrap" class="ft21">(&#160;&#160;&#160;&#160;)&#160;Area&#160;Control&#160;Procedural&#160;Rating&#160;(ACP)&#160;</p>
<p style="position:absolute;top:619px;left:290px;white-space:nowrap" class="ft21">(&#160;&#160;&#160;&#160;)&#160;Area&#160;Control&#160;Surveillance&#160;Rating&#160;(ACS)&#160;</p>
<p style="position:absolute;top:652px;left:68px;white-space:nowrap" class="ft20"><b>II.&#160;INFORMASI&#160;PEMOHON&#160;</b></p>
<p style="position:absolute;top:685px;left:75px;white-space:nowrap" class="ft21">1.&#160;&#160;Nama&#160;</p>
<p style="position:absolute;top:713px;left:68px;white-space:nowrap" class="ft21">&#160;&#160;&#160;&#160;&#160;<?php echo $d['nama_siswa']; ?></p>
<p style="position:absolute;top:685px;left:293px;white-space:nowrap" class="ft21">2.&#160;&#160;No.&#160;Lisensi&#160;</p>
<p style="position:absolute;top:712px;left:317px;white-space:nowrap" class="ft21">&#160;<?php echo $d['lisensi']; ?></p>
<p style="position:absolute;top:685px;left:404px;white-space:nowrap" class="ft21">3.&#160;&#160;Tanggal&#160;Lahir&#160;</p>
<p style="position:absolute;top:713px;left:408px;white-space:nowrap" class="ft21">&#160;&#160;&#160;<?php echo $s['ttl']; ?></p>
<p style="position:absolute;top:685px;left:585px;white-space:nowrap" class="ft21">4.&#160;&#160;Tempat&#160;Lahir&#160;</p>
<p style="position:absolute;top:713px;left:578px;white-space:nowrap" class="ft21">&#160;&#160;&#160;&#160;&#160;</p>
<p style="position:absolute;top:746px;left:75px;white-space:nowrap" class="ft21">5.&#160;&#160;Alamat&#160;</p>
<p style="position:absolute;top:773px;left:102px;white-space:nowrap" class="ft21">&#160;<?php echo $s['alamat']; ?></p>
<p style="position:absolute;top:801px;left:102px;white-space:nowrap" class="ft21">&#160;</p>
<p style="position:absolute;top:829px;left:102px;white-space:nowrap" class="ft21">&#160;</p>
<p style="position:absolute;top:857px;left:102px;white-space:nowrap" class="ft21">&#160;</p>
<p style="position:absolute;top:746px;left:298px;white-space:nowrap" class="ft21">6.&#160;&#160;&#160;Kebangsaan&#160;</p>
<p style="position:absolute;top:773px;left:290px;white-space:nowrap" class="ft21">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;)&#160;Indonesia&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;</p>
<p style="position:absolute;top:802px;left:290px;white-space:nowrap" class="ft21">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;)&#160;Lainnya&#160;............&#160;</p>
<p style="position:absolute;top:829px;left:290px;white-space:nowrap" class="ft21">&#160;</p>
<p style="position:absolute;top:745px;left:479px;white-space:nowrap" class="ft21">7.&#160;&#160;No.&#160;Handphone&#160;</p>
<p style="position:absolute;top:764px;left:482px;white-space:nowrap" class="ft23">&#160;<br/>&#160;<?php echo $s['tlp']; ?></p>
<p style="position:absolute;top:746px;left:670px;white-space:nowrap" class="ft21">8.&#160;&#160;Jenis&#160;Kelamin&#160;</p>
<p style="position:absolute;top:773px;left:668px;white-space:nowrap" class="ft21">&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;&#160;Laki&#160;–&#160;laki&#160;&#160;</p>
<p style="position:absolute;top:802px;left:668px;white-space:nowrap" class="ft21">&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;&#160;Perempuan&#160;</p>
<p style="position:absolute;top:890px;left:70px;white-space:nowrap" class="ft24">9.a.&#160;Apakah&#160;anda&#160;Memiliki&#160;<br/>&#160;&#160;&#160;&#160;&#160;&#160;Rating&#160;Sebelumnya?&#160;</p>
<p style="position:absolute;top:928px;left:68px;white-space:nowrap" class="ft23">&#160;<br/>&#160;&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;Ya&#160;&#160;&#160;&#160;<br/>&#160;&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;Tidak&#160;&#160;&#160;</p>
<p style="position:absolute;top:890px;left:290px;white-space:nowrap" class="ft23">9.b.&#160;Jika&#160;Ya,&#160;alasan&#160;&#160;<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;Pengajuan&#160;Rating&#160;:&#160;&#160;<br/>&#160;&#160;&#160;(&#160;&#160;&#160;)&#160;Penambahan&#160;Rating&#160;&#160;&#160;<br/>&#160;&#160;&#160;(&#160;&#160;&#160;)&#160;Pindah&#160;Tugas&#160;<br/>&#160;&#160;&#160;(&#160;&#160;&#160;)&#160;Pengaktifan&#160;Rating&#160;Kembali&#160;<br/>&#160;&#160;&#160;(&#160;&#160;&#160;)&#160;Penugasan&#160;<br/>&#160;&#160;&#160;(&#160;&#160;&#160;)&#160;Penerbitan&#160;<br/>&#160;&#160;&#160;(&#160;&#160;&#160;)&#160;Perpanjangan&#160;</p>
<p style="position:absolute;top:1051px;left:290px;white-space:nowrap" class="ft21">&#160;</p>
<p style="position:absolute;top:890px;left:546px;white-space:nowrap" class="ft21">9.c.&#160;</p>
<p style="position:absolute;top:890px;left:593px;white-space:nowrap" class="ft21">Jenis&#160;</p>
<p style="position:absolute;top:909px;left:546px;white-space:nowrap" class="ft21">Rating&#160;:&#160;</p>
<p style="position:absolute;top:937px;left:546px;white-space:nowrap" class="ft24">&#160;<br/>1.&#160;<?php echo $s['jenisrat']; ?>.&#160;</p>
<p style="position:absolute;top:984px;left:546px;white-space:nowrap" class="ft21">2.&#160;…….&#160;</p>
<p style="position:absolute;top:1012px;left:546px;white-space:nowrap" class="ft21">3.&#160;…….&#160;</p>
<p style="position:absolute;top:890px;left:642px;white-space:nowrap" class="ft23">9.d.&#160;&#160;Lokasi&#160;<br/>Rating&#160;:&#160;</p>
<p style="position:absolute;top:937px;left:642px;white-space:nowrap" class="ft24">&#160;<br/>1.&#160;<?php echo $s['lokasira']; ?>..&#160;</p>
<p style="position:absolute;top:984px;left:642px;white-space:nowrap" class="ft21">2.&#160;……..&#160;</p>
<p style="position:absolute;top:1012px;left:642px;white-space:nowrap" class="ft21">3.&#160;…….&#160;</p>
<p style="position:absolute;top:890px;left:737px;white-space:nowrap" class="ft23">9.e.Masa&#160;<br/>Berlaku&#160;Rating&#160;<br/>:&#160;</p>
<p style="position:absolute;top:956px;left:737px;white-space:nowrap" class="ft21">-&#160;<?php echo $s['masara']; ?>..&#160;</p>
<p style="position:absolute;top:984px;left:737px;white-space:nowrap" class="ft21">-&#160;…..&#160;</p>
<p style="position:absolute;top:1012px;left:737px;white-space:nowrap" class="ft21">-&#160;…..&#160;</p>
<p style="position:absolute;top:1084px;left:68px;white-space:nowrap" class="ft23">10.a.&#160;Apakah&#160;anda&#160;memiliki&#160;sertifikat&#160;<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;kesehatan&#160;minimal&#160;Kelas&#160;3?&#160;<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;Ya&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;Tidak&#160;&#160;&#160;&#160;&#160;&#160;</p>
<p style="position:absolute;top:1084px;left:365px;white-space:nowrap" class="ft24">10.b.&#160;Tanggal&#160;<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;dikeluarkan&#160;</p>
<p style="position:absolute;top:1122px;left:448px;white-space:nowrap" class="ft21">&#160;</p>
<p style="position:absolute;top:1150px;left:385px;white-space:nowrap" class="ft21"><?php echo $s['tglsert']; ?>..&#160;</p>
<p style="position:absolute;top:1084px;left:546px;white-space:nowrap" class="ft21">10.c.&#160;Nama&#160;Dokter&#160;Penguji&#160;</p>
<p style="position:absolute;top:1112px;left:546px;white-space:nowrap" class="ft21">&#160;</p>
<p style="position:absolute;top:1140px;left:546px;white-space:nowrap" class="ft21"><?php echo $s['dokterserti']; ?>&#160;</p>
<p style="position:absolute;top:1168px;left:546px;white-space:nowrap" class="ft21">&#160;</p>
</div>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft30{font-size:14px;font-family:Times;color:#000000;}
	.ft31{font-size:15px;font-family:Times;color:#000000;}
	.ft32{font-size:14px;font-family:Times;color:#000000;}
	.ft33{font-size:11px;font-family:Times;color:#000000;}
	.ft34{font-size:14px;line-height:19px;font-family:Times;color:#000000;}
	.ft35{font-size:14px;line-height:18px;font-family:Times;color:#000000;}
	.ft36{font-size:14px;line-height:18px;font-family:Times;color:#000000;}
	.ft37{font-size:14px;line-height:19px;font-family:Times;color:#000000;}
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page3-div" style="position:relative;width:892px;height:1263px;">
<img width="892" height="1263" src="target003.png" alt="background image"/>
<p style="position:absolute;top:85px;left:68px;white-space:nowrap" class="ft35">11.a.&#160;Apakah&#160;anda&#160;memiliki&#160;sertifikat&#160;<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;ICAO&#160;Language&#160;Proficiency?&#160;<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;Ya&#160;&#160;&#160;(&#160;&#160;&#160;)&#160;Tidak&#160;</p>
<p style="position:absolute;top:86px;left:365px;white-space:nowrap" class="ft30">11.b.&#160;Nama&#160;Rater&#160;&#160;</p>
<p style="position:absolute;top:114px;left:365px;white-space:nowrap" class="ft30">&#160;<?php echo $s['nrat']; ?></p>
<p style="position:absolute;top:86px;left:546px;white-space:nowrap" class="ft31">11.c.&#160;Lembaga&#160;Pelatihan&#160; <br><?php echo $s['lpel']; ?></p>
<p style="position:absolute;top:160px;left:365px;white-space:nowrap" class="ft35">11.d.&#160;Tanggal&#160;<br/>&#160;&#160;&#160;&#160;Dikeluarkan&#160;<br/><?php echo $s['tglpel']; ?>&#160;<br/>&#160;</p>
<p style="position:absolute;top:160px;left:546px;white-space:nowrap" class="ft30">11.e&#160;.&#160;Level&#160;&#160;<br><?php echo $s['lvlpel']; ?></p>
<p style="position:absolute;top:241px;left:68px;white-space:nowrap" class="ft34">12.&#160;&#160;a.&#160;&#160;&#160;&#160;Apakah&#160;&#160;anda&#160;&#160;memiliki&#160;&#160;Surat&#160;<br/>Rekomendasi&#160;OJTI?&#160;<br/>&#160;&#160;&#160;&#160;&#160;</p>
<p style="position:absolute;top:307px;left:68px;white-space:nowrap" class="ft30">&#160;&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;)&#160;Ya&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;Tidak&#160;</p>
<p style="position:absolute;top:335px;left:68px;white-space:nowrap" class="ft32"><b>*Hanya&#160;untuk&#160;penerbitan&#160;rating</b>&#160;</p>
<p style="position:absolute;top:241px;left:355px;white-space:nowrap" class="ft30">12.b.&#160;Nomor&#160;Surat&#160;&#160;</p>
<p style="position:absolute;top:269px;left:355px;white-space:nowrap" class="ft30">&#160;<?php echo $s['nreko']; ?></p>
<p style="position:absolute;top:241px;left:642px;white-space:nowrap" class="ft30">12.c.&#160;Tanggal&#160;Surat&#160;</p>
<p style="position:absolute;top:269px;left:740px;white-space:nowrap" class="ft30"><?php echo $s['tglreko']; ?>&#160;</p>
<p style="position:absolute;top:302px;left:355px;white-space:nowrap" class="ft30">12.d.&#160;Jumlah&#160;Jam&#160;dan&#160;Durasi&#160;Pemanduan&#160;</p>
<p style="position:absolute;top:330px;left:355px;white-space:nowrap" class="ft30">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;1).&#160;Controller&#160;:&#160;<?php echo $s['jpandu']; ?>..&#160;Jam&#160;</p>
<p style="position:absolute;top:358px;left:355px;white-space:nowrap" class="ft30">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;2).&#160;Durasi&#160;&#160;&#160;&#160;&#160;&#160;&#160;:&#160;<?php echo $s['durasipandu']; ?>Bulan&#160;dan&#160;&#160;…..&#160;Hari&#160;</p>
<p style="position:absolute;top:391px;left:355px;white-space:nowrap" class="ft30">12.e.&#160;Nama&#160;OJTI&#160;</p>
<p style="position:absolute;top:419px;left:355px;white-space:nowrap" class="ft30">&#160;<?php echo $s['nmaojti']; ?></p>
<p style="position:absolute;top:391px;left:642px;white-space:nowrap" class="ft30">12.f.&#160;Nomor&#160;&#160;Lisensi&#160;OJTI&#160;</p>
<p style="position:absolute;top:419px;left:642px;white-space:nowrap" class="ft30">&#160;<?php echo $s['lisenojti']; ?></p>
<p style="position:absolute;top:452px;left:68px;white-space:nowrap" class="ft34">13.&#160;&#160;a.&#160;&#160;&#160;&#160;Apakah&#160;&#160;anda&#160;&#160;terlibat&#160;&#160;pelanggaran&#160;&#160;peraturan&#160;&#160;yang&#160;&#160;disebabkan&#160;&#160;oleh&#160;<br/>penggunaan&#160;&#160;obat-obatan&#160;&#160;terlarang,&#160;&#160;marijuana,&#160;&#160;dan&#160;&#160;obat&#160;&#160;anti&#160;&#160;depresi&#160;&#160;atau&#160;&#160;obat&#160;&#160;<br/>stimulant,&#160;atau&#160;&#160;pengoperasian&#160;kendaraan,&#160;bermotor&#160;dengan&#160;pengaruh&#160;alcohol?&#160;<br/>&#160;&#160;&#160;&#160;&#160;<br/>&#160;&#160;&#160;&#160;(&#160;&#160;&#160;)&#160;Ya&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;Tidak&#160;</p>
<p style="position:absolute;top:452px;left:642px;white-space:nowrap" class="ft35">13.b&#160;Jika&#160;Ya,&#160;&#160;<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;Tanggal&#160;Pelanggaran&#160;&#160;<br/>&#160;<br/>&#160;</p>
<p style="position:absolute;top:558px;left:68px;white-space:nowrap" class="ft32"><b>III.&#160;LATAR&#160;BELAKANG&#160;PENDIDIKAN&#160;</b></p>
<p style="position:absolute;top:609px;left:68px;white-space:nowrap" class="ft30">&#160;(&#160;&#160;)&#160;D&#160;II&#160;&#160;:………&#160;(Tahun)&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;D&#160;III&#160;:&#160;…………&#160;(Tahun)&#160;&#160;&#160;(&#160;&#160;&#160;)&#160;D&#160;IV&#160;:&#160;……….&#160;(Tahun)&#160;&#160;&#160;(&#160;&#160;)&#160;S1&#160;:&#160;………&#160;(Tahun)&#160;</p>
<p style="position:absolute;top:637px;left:68px;white-space:nowrap" class="ft30">&#160;(&#160;&#160;&#160;)&#160;&#160;S2&#160;&#160;:&#160;…….…&#160;(Tahun)&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;)&#160;ND&#160;JATC&#160;:&#160;…………&#160;(Tahun)&#160;&#160;&#160;(&#160;&#160;&#160;)&#160;ND&#160;SATC&#160;:&#160;…………&#160;(Tahun)&#160;</p>
<p style="position:absolute;top:685px;left:68px;white-space:nowrap" class="ft32"><b>IV.&#160;JENIS&#160;SERTIFIKAT&#160;KOMPETENSI&#160;YANG&#160;DIMILIKI</b>&#160;</p>
<p style="position:absolute;top:723px;left:191px;white-space:nowrap" class="ft30">Jenis&#160;Sertifikat&#160;Kompetensi&#160;</p>
<p style="position:absolute;top:718px;left:565px;white-space:nowrap" class="ft30">Lembaga&#160;</p>
<p style="position:absolute;top:737px;left:525px;white-space:nowrap" class="ft30">Penyelenggara&#160;Diklat&#160;</p>
<p style="position:absolute;top:723px;left:698px;white-space:nowrap" class="ft30">Tanggal&#160;dikeluarkan&#160;</p>
<p style="position:absolute;top:761px;left:68px;white-space:nowrap" class="ft30">&#160;&#160;&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;Aerodrodrome&#160;Control&#160;Rating&#160;(TWR)&#160;</p>
<p style="position:absolute;top:760px;left:596px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:760px;left:766px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:794px;left:68px;white-space:nowrap" class="ft30">&#160;&#160;&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;Approach&#160;Control&#160;Procedural&#160;Rating&#160;(APP)&#160;</p>
<p style="position:absolute;top:793px;left:596px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:793px;left:766px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:827px;left:68px;white-space:nowrap" class="ft30">&#160;&#160;&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;Approach&#160;Control&#160;Surveillance&#160;Rating&#160;(APS)&#160;</p>
<p style="position:absolute;top:827px;left:596px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:827px;left:766px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:860px;left:68px;white-space:nowrap" class="ft30">&#160;&#160;&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;Area&#160;Control&#160;Procedural&#160;Rating&#160;(ACP)&#160;</p>
<p style="position:absolute;top:859px;left:596px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:859px;left:766px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:893px;left:68px;white-space:nowrap" class="ft30">&#160;&#160;&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;Area&#160;Control&#160;Surveillance&#160;Rating&#160;(ACS)&#160;</p>
<p style="position:absolute;top:893px;left:596px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:893px;left:766px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:926px;left:68px;white-space:nowrap" class="ft36"><b>V.&#160;APAKAH&#160;ANDA&#160;PERNAH&#160;GAGAL&#160;UJIAN&#160;SEBELUMNYA,&#160;DALAM&#160;KURUN&#160;WAKTU&#160;30&#160;<br/>&#160;&#160;&#160;&#160;&#160;&#160;HARI?&#160;<br/>&#160;<br/></b>&#160;&#160;&#160;&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;Ya&#160;&#160;&#160;&#160;(&#160;&#160;&#160;&#160;)&#160;Tidak&#160;</p>
<p style="position:absolute;top:1016px;left:68px;white-space:nowrap" class="ft32"><b>VI.&#160;PERNYATAAN&#160;VERIFIKASI&#160;PEMOHON&#160;</b></p>
<p style="position:absolute;top:1043px;left:68px;white-space:nowrap" class="ft35">&#160;&#160;&#160;&#160;&#160;&#160;Saya&#160;menjamin&#160;bahwa&#160;apa&#160;yang&#160;saya&#160;tuliskan&#160;dalam&#160;<br/>&#160;&#160;&#160;&#160;&#160;&#160;form&#160;ini&#160;adalah&#160;benar&#160;</p>
<p style="position:absolute;top:1016px;left:506px;white-space:nowrap" class="ft30">Tempat&#160;dan&#160;Tanggal&#160;</p>
<p style="position:absolute;top:1016px;left:694px;white-space:nowrap" class="ft30">Tanda&#160;Tangan&#160;dan&#160;</p>
<p style="position:absolute;top:1035px;left:703px;white-space:nowrap" class="ft30">Nama&#160;Pemohon&#160;</p>
<p style="position:absolute;top:1068px;left:575px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:1096px;left:505px;white-space:nowrap" class="ft30">……………………..&#160;</p>
<p style="position:absolute;top:1124px;left:575px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:1152px;left:505px;white-space:nowrap" class="ft30">……………………..&#160;</p>
<p style="position:absolute;top:1068px;left:673px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:1096px;left:756px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:1124px;left:756px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:1151px;left:685px;white-space:nowrap" class="ft30">……………………..&#160;</p>
<p style="position:absolute;top:1179px;left:102px;white-space:nowrap" class="ft33"><i><b>Note&#160;:&#160;Beri&#160;Tanda&#160;silang&#160;(X)&#160;pada&#160;kotak/dalam&#160;kurung&#160;</b></i></p>
</div>
</body>
</html>
