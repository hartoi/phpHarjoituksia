<?php
// Korjaa laskin, siten että se toimii
// myös kutsuttaessa pelkästään summa.php
$luku1 = $_GET['luku1'];
$luku2 = $_GET['luku2'];
$summa = $luku1 + $luku2;
echo "Summa on $summa";
?>