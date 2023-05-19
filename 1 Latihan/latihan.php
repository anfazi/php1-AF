<!-- 1. Pengenalan Php -->
<?php echo "Hello world";
echo "</br>";
?>

<!-- 2. Variabel -->
<?php
$nrp = "152018019";
$nama = "Andika Fauzi Hadiana";
echo "NRP : " . $nrp;
echo "Nama : " . $nama;
echo "</br>";
?>

<!-- 3. Konstanta -->
<?php
define("Nama", "Andika");
define("NRP", "152018019");
echo "Nama :" . Nama;
echo "NRP: " . NRP;
echo "</br>";
?>

<!-- 4. Operator dalam php -->
<?php
$a = 10; //Penugasan
$b = 5;
echo "Pertambahan :", $a + $b;
echo "</br>";
echo "Pengurangan :", $a - $b;
echo "</br>";
echo "Perkalian :", $a * $b;
echo "</br>";
echo "pembagian :", $a / $b;
echo "</br>";
echo "Modulus :", $a % $b;
echo "</br>";

// 5. Struktur Kondisi
if ($a = 5) {
    echo "true";
    echo "</br>";
} else
    echo "false";
echo "</br>";
?>

<!-- 6. Perulangan (Looping) -->
<?php echo "Ini adalah contoh perulangan for";
echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br>";
echo "<br>";
echo "Ini adalah contoh perulangan while";
echo "<br>";
$i = 1;
while ($i <= 20) {
    echo $i . " ";
    $i += 2;
}
echo "<br>";
echo "<br>";
echo "Ini adalah contoh perulangan do-while";
echo "<br>";
$i = 1;
do {
    echo $i . " ";
    $i += 3;
} while ($i < 30); ?>


<!-- 7. Function -->
<?php
echo "</br></br>";
function hitungLuasSegiting($alas, $tinggi)
{
    return 0.5 * $alas * $tinggi;
}
// Pemanggilan Fungsi dan pemberian value
$al = 10;
$tin = 4;
echo "Luas segitiga dengan alas $al dan tinggi $tin adalah :" . hitungLuasSegiting($al, $tin);
echo "</br>";
?>

<!-- 8. Array -->
<?php $arrKendaraan = array("Mobil", "Pesawat", "Kereta Api", "Kapal Laut");
echo "</br>";
echo $arrKendaraan[0] . "<br>"; //Mobil 
echo $arrKendaraan[2] . "<br>"; //Kereta Api 
$arrKota = array();
$arrKota[] = "Jakarta";
$arrKota[] = "Medan";
$arrKota[] = "Bandung";
$arrKota[] = "Malang";
$arrKota[] = "Sulawesi";
echo $arrKota[1] . "<br>"; //Medan  
echo $arrKota[2] . "<br>"; //Bandung  
echo $arrKota[4] . "<br>"; //Sulawesi 
?>

<!-- 9.1 GET -->
<form method="GET">
    </br>
    <input type="text" name="nama">
    <input type="submit" name="kirim">
</form>
<pre>
    <?php print_r($_GET) ?>
</pre>

<!-- 9.2 Post -->
<form method="POST">
    </br>
    <p>username : <input type="text" name="user" placeholder="username"></p>
    <p>password : <input type="password" name="pass" placeholder="password"></p>
    <p><input type="submit" name="kirim"></p>
</form>
<?php if (isset($_POST)) : ?>
    <pre>
        <?php print_r($_POST) ?>
    </pre>
<?php endif ?>