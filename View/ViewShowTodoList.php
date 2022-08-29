<?php

include_once __DIR__ . "/../BisnisLogic/ShowTodoList.php";
include_once __DIR__ . "/../Helper/Input.php";
include_once __DIR__ . "/../View/ViewAddTodoList.php";
include_once __DIR__ . "/../View/ViewRemoveTodoList.php";

function viewShowTodoList(){

    $lagi = true;

    do {
        showTodoList();
        echo "Menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "0. Keluar" . PHP_EOL;

        $pilih = input("pilih");

        switch ($pilih){
            case 1:
                viewAddTodoList();
                break;
            case 2:
                viewRemoveTodoList();
                break;
            case 0:
                $lagi = false;
                break;
            default:
                echo "masukkan idak dimengerti";
                break;
            }
    }while($lagi === true);

}