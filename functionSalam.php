<?php
  // Fungsi Void
  function salam($nama = "Semuanya"){
    echo "<h2>Assalamualaikum ".strtoupper($nama)."</h2>";
  }

  salam("Yazid");
  salam("Teman");
  salam();
?>