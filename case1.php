<?php
    $text = "jika input yang dimasukkan";
    $cari_huruf = array('a', 'u', 'e', 'o');
    $huruf_baru = array('i', 'i', 'i', 'i');
    echo str_ireplace($cari_huruf, $huruf_baru, $text);
?>