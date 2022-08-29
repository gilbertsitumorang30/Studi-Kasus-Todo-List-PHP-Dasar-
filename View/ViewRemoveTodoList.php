<?php

include_once __DIR__ . "/../BisnisLogic/RemoveTodoList.php";
include_once __DIR__ . "./../Helper/Input.php";

function viewRemoveTodoList(){

    echo "Menghapus Todo" . PHP_EOL;
    $input = input("Hapus (Ketik 0 untuk kembali)");
    removeTodoList($input);
}