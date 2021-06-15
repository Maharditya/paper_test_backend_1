<?php
    $jumlahuang = 72500;
    $dataa = $jumlahuang % 100000;
    $a = ($jumlahuang - $dataa) / 100000;

    if($a != 0) {
        $a = 100000;
    }else {
        $a = 0;
    }

    $datab = $dataa % 50000;
    $b = ($dataa - $datab) / 50000;

    if($b != 0) {
        $b = 50000;
    } else {
        $b = 0;
    }

    $datac = $datab % 20000;
    $c = ($datab - $datac) / 20000;

    if($c != 0) {
        $c = 20000;
    } else {
        $c = 0;
    }

    $datad = $datac % 10000;
    $d = ($datac - $datad) / 10000;

    if($d != 0) {
        $d = 10000;
    } else {
        $d = 0;
    }

    $datae = $datad % 5000;
    $e = ($datad - $datae) / 5000;

    if($d != 0) {
        $e = 5000;
    } else {
        $e = 0;
    }

    $dataf = $datae % 2000;
    $f = ($datae - $dataf) / 2000;

    if($f != 0) {
        $f = 2000;
    } else {
        $f = 0;
    }

    $datag = $dataf % 1000;
    $g = ($dataf - $datag) / 1000;

    if($g != 0) {
        $g = 1000;
    } else {
        $g = 0;
    }

    $datah = $datag % 200;
    $h = ($datag - $datah) / 200;

    if($h != 0) {
        $h = 200;
    } else {
        $h = 0;
    }

    $datai = $datah % 100;
    $i = ($datah - $datai) / 100;

    if($i != 0) {
        $i = 100;
    } else {
        $i = 0;
    }

    $data = array($a, $b, $c, $d, $e, $f, $g, $h, $i);

    $hasil = array_unique($data);

    print_r($hasil[0]);
?>