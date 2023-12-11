<?php
   function pangkatDua($a){
    global $a;
    $a = $a * $a;
   }
   $a = 20;
   echo 'Sebelum Nilai $a :' .$a;
   pangkatDua($a);
   echo '<br/>Sesudah Nilai $a :'.$a;
?>