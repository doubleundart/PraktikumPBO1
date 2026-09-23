<?php

class PersegiPanjang {
    public $panjang;
    public $lebar;

    function luas () {
        return $this->panjang * $this->lebar;
    }
}

$bangun1 = new PersegiPanjang();
$bangun1->panjang = 12;
$bangun1->lebar = 5;

echo "Luas persegi panjang (OOP) = " . $bangun1->luas();
?>