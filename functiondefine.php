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

echo"<hr>";

// Fungsi untuk perkenalan
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
}

// Fungsi untuk memunculkan dua perkenalan
function defineTwoIntroductions($nama1, $nama2) {
    // Memanggil fungsi perkenalan untuk nama pertama
    perkenalan($nama1, "Hi");
    
    // Memanggil fungsi perkenalan untuk nama kedua
    perkenalan($nama2, "Hello");
}

// Memanggil fungsi yang memunculkan dua perkenalan
defineTwoIntroductions("Yazid", "Jane");
?>
