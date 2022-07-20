<?php
echo "<head><title>OUTPUT DARI DATA YANG SUDAH DI INPUT</title></head>";
$fp = fopen("form03.txt", "r");
echo "<table border=1 align=center>";
echo "<tr>";
echo "<td>  nama </td>";
echo "<td>  nim &nbsp&nbsp&nbsp</td>";
echo "<td>  kelas &nbsp</td>";
echo "<td>  gender &nbsp&nbsp&nbsp</td>";
echo "<td>  saran &nbsp&nbsp&nbsp</td>";
echo "</tr>";
while ($isi = fgets($fp, 1000)) {
    $pisah = explode("|", $isi);
    echo "<tr>";
    echo "<td>  $pisah[0]  </td>";
    echo "<td>  $pisah[1]  </td>";
    echo "<td>  $pisah[2]  </td>";
    echo "<td>  $pisah[3]  </td>";
    echo "<td>  $pisah[4]  </td>";
    echo "</tr>";
}
echo "</table></center>";
echo "<center><br><a href =responsi.php> TEKAN UNTUK KEMBALI DISINI </a><br></center></br>";
