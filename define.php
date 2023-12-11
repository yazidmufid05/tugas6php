<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalkan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    // memanggil fungsi hitungUmur dan menyimpan hasilnya dalam variabel $umur
    $umur = hitungUmur(1994, 2015);
    echo "Saya berusia ".$umur." tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// memanggil fungsi perkenalan
perkenalkan("Yazid Mufid");
?>
