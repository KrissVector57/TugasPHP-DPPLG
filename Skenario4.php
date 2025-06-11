
//kasus 1

<?php
$hari= ["minggu","senin","selasa","rabu","kamis","jumat","sabtu"];
$tanggal= array ("1", "2", "3", "4", "5", "6", "7", "8", "9", "10",
"11", "12", "13", "14", "15", "16", "17", "18", "19", "20",
"21", "22", "23", "24", "25", "26", "27", "28", "29", "30",
"31");
$bulan= ["Januari",
"Februari",
"Maret",
"April",
"Mei",
"Juni",
"Juli",
"Agustus",
"September",
"Oktober",
"November",
"Desember"];
$tahun = array("2024","2025","2026");

// senin 18 mar 2025
echo $hari[2] ."-". $tanggal[18] ."-". $bulan[3] ."-". $tahun[2];

//main looping
for ($i = 30; $i > 10; $i--) {
    echo $i;
    echo "<br>";
}

echo "<hr>";
//hari=for
$jml_hari = count($hari);
for ($h = 0; $h < $jml_hari; $h++ ) {
    echo $hari[$h];
    echo "<br>";
}

//tanggal=foreach
foreach ($tanggal as $tgl) {
    echo $tgl;
    echo "<br>";
}

//bulan=while
$b = 0;
$jml_bulan = count($bulan);
while ($b < $jml_bulan) {
    echo $bulan[$b];
    echo "<br>";
    $b++;
}
//tahun=
$t = 0;
$jml_tahun = count($tahun);
do {
    echo$tahun[$t];
    echo "<br>";
    $t++;
}while($t < $jml_tahun);


//kasus 2

$anak_ayam = 30;
for ($i = $anakayam; $i > 1;$i--) {
    echo "anak ayam turun $i mati 1 tinggal". ($i - 1). "<br>";
}
echo "anak ayam turun $i mati 1 tinggal induknya.";

?>


//kasus 3

<?php
//mawar yang dimiliki Sholeh
for ($mawar=21; $mawar >= 10; $mawar--) {
    echo "$mawar,";
}

//Mawar yang akan diberikan ke ibunya
for ($mawar=21; $mawar >= 10; $mawar-=4) {
    echo "$mawar,";
}
?>

//kasus 4
