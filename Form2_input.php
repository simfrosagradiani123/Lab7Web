<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>

<h3>Operator</h3>
<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji * $pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp <br><br>";
?>

<h3>Kondisi IF</h3>
<?php
$nama_hari = date("l");
if ($nama_hari == "Sunday") {
    echo "Minggu";
} elseif ($nama_hari == "Monday") {
    echo "Senin";
} else {
    echo "Selasa";
}
echo "<br><br>";
?>

<h3>Kondisi Switch</h3>
<?php
$nama_hari = date("l");
switch ($nama_hari) {
    case "Sunday":
        echo "Minggu";
        break;
    case "Monday":
        echo "Senin";
        break;
    case "Tuesday":
        echo "Selasa";
        break;
    default:
        echo "Sabtu";
}
echo "<br><br>";
?>

<h3>Perulangan For</h3>
<?php
echo "Perulangan 1 sampai 10 <br />";
for ($i = 1; $i <= 10; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
}

echo "Perulangan Menurun dari 10 ke 1 <br />";
for ($i = 10; $i >= 1; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
}
echo "<br><br>";
?>

<h3>Perulangan While</h3>
<?php
echo "Perulangan 1 sampai 10 <br />";
$i = 1;
while ($i <= 10) {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
}
echo "<br><br>";
?>

<h3>Perulangan Do-While</h3>
<?php
echo "Perulangan 1 sampai 10 <br />";
$i = 1;
do {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
} while ($i <= 10);
echo "<br><br>";
?>
</body>
</html>
