<?php


function input(string $keterangan){
    echo "$keterangan : ";
    $input = fgets(STDIN);

    return $input;
}