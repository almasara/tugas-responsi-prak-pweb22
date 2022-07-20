<?php
echo "<center><font size=6px face = arial color=green>DATA ANDA BERHASIL DIREKAM<br>TERIMA KASIH SUDAH MENGISI FORM INI</center> <br></font>";
$nama_form      = $_POST['nama'];
$nim_form       = $_POST['nim'];
$kelas_form     = $_POST['kelas'];
$gender_form    = $_POST['gender'];
$saran_form     = $_POST['saran'];
$fp = fopen("form03.txt", "a+");
fputs($fp, "$nama_form|$nim_form|$kelas_form|$gender_form|$saran_form\n");
fclose($fp);
echo "<a href=responsi.php><center> TEKAN TULISAN INI UNTUK KEMBALI </center></a><br>";
