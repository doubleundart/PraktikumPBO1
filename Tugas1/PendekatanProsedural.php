<?php

$panjang = 12;
$lebar = 5;

function hitungLuas($panjang, $lebar) {
    return $panjang * $lebar;
}

$luas = hitungLuas ($panjang, $lebar);
echo "Luas persegi panjang (Prosedural) = $luas";
?>