<?php
    $number = 1234;
    $revnum = 0;

    while($number > 1) {
        $a = $number %10;
        $revnum = ($revnum * 10) + $a;

        $number = ($number / 10);
    }

    echo $revnum;
?>