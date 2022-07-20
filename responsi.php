<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS AKHIR</title>

    <link rel="stylesheet" type="text/css" href="style_responsi.css">
    <script src="calculator_script.js"></script>
</head>

<body>
    <div class="headerTA">
        &nbsp;tugas akhir pemograman web
        <div class="garis"></div>
        <font size="50px">
            &nbsp;&nbsp;nama&emsp;: Alma sara khalidiyah
            <br>&nbsp;&nbsp;nim&emsp;&nbsp;: 2100018192
            <br>&nbsp;&nbsp;kelas&emsp;: D
        </font>
    </div>
    <div class="program01">
        <h1>Program Kalender</h1>
        <!-- <div class=garis-kalender></div> -->
        <div class="program-kalender">
            <div class="kalender-bulan">July 2022</div>
            <ul class="kalender-hari">
                <li>Sen</li>
                <li>Sel</li>
                <li>Rab</li>
                <li>Kam</li>
                <li>Jum</li>
                <li>Sab</li>
                <li>Min</li>
            </ul>
            <ul class="kalender-tanggal">
                <li> </li>
                <li> </li>
                <li> </li>
                <li> </li>
                <li>1</li>
                <li>2</li>
                <li class="kalender-libur">3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li class="kalender-libur">10</li>
                <li>11</li>
                <li>12</li>
                <li>13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li class="kalender-libur">17</li>
                <li>18</li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li class="kalender-libur">24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li>28</li>
                <li>29</li>
                <li>30</li>
                <li class="kalender-libur">31</li>
            </ul>
        </div>

        <h1>Program Calculator</h1>
        <div class="program-kalkulator">
            <h2>kalkulator</h2><br>
            <form name="form">
                <input align="left" type="textarea" name="textarea" class="mengetik">
            </form>
            <table>
                <!-- <tr>
                    </tr> -->
                <tr>
                    <td><input class="tombol-kiri" type="button" value="1" onclick="masukan(1)"></td>
                    <td><input class="tombol-kiri" type="button" value="2" onclick="masukan(2)"></td>
                    <td><input class="tombol-kiri" type="button" value="3" onclick="masukan(3)"></td>
                    <td><input class="hapussemua" type="button" value="c" onclick="bersihkan()"></td>
                    <td><input class="backspace" type="button" value="←" onclick="backspace()"></td>
                </tr>
                <tr>
                    <td><input class="tombol-kiri" type="button" value="4" onclick="masukan(4)"></td>
                    <td><input class="tombol-kiri" type="button" value="5" onclick="masukan(5)"></td>
                    <td><input class="tombol-kiri" type="button" value="6" onclick="masukan(6)"></td>
                    <td><input class="bagi" type="button" value="÷" onclick="masukan('/')"></td>
                    <td rowspan="1"><input class="tombol-kanan" type="button" value="x" onclick="masukan('*')">
                    </td>
                </tr>
                <tr>
                    <td><input class="tombol-kiri" type="button" value="7" onclick="masukan(7)"></td>
                    <td><input class="tombol-kiri" type="button" value="8" onclick="masukan(8)"></td>
                    <td><input class="tombol-kiri" type="button" value="9" onclick="masukan(9)"></td>
                    <td><input class="tombol-kanan" type="button" value="+" onclick="masukan('+')"></td>
                    <td><input class="tombol-kanan" type="button" value="-" onclick="masukan('-')"></td>
                </tr>
                <tr>
                    <td colspan="5"><input class="symbolsamadengan" type="button" value="=" onclick="symbolsamadengan()"></td>
                </tr>
            </table>
        </div>

    </div>
    <div class="program03">
        <div class="judul-form">
            Program Pengisian Form
        </div>
        <form name="form1" method="post" action="form01.php">
            <center>
                <table width="80%" height="50%" align="center">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td><input name="nama" type="text" id="nama"></td>
                    </tr>

                    <tr>
                        <td>NIM</td>
                        <td><input name="nim" type="text" id="nim"></td>
                    </tr>

                    <tr>
                        <td>Kelas</td>__
                        <td><input name="kelas" type="text" id="kelas"></td>
                    </tr>
                    </tr>

                    <tr>
                        <td>Gender</td>
                        <td>
                            <select name="gender" id="gender">
                                <option value="Wanita">Wanita</option>
                                <option value="Pria">Pria</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Saran untuk website ini</td>
                        <td><textarea name="saran" id="saran"></textarea></td> </textarea>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input id="tombol-kirim" type="submit" name="Submit" value="Kirim">
                            <input id="tombol-batal" type="reset" name="Submit2" value="Batal">
                        </td>
                    </tr>
                </table>
            </center>
        </form>
        <div align="center" class="form-huruf"><strong><a href="form02.php"><br><br>Klik tulisan ini untuk melihat data yang sudah dikirim<br><br><br></a></strong></div>
        <div class="line-form"></div>
    </div>
    <div id="form-footer">
        <font color="">Copy Right © 2022 Alma Sara khalidiyah
    </div>
</body>

</html>