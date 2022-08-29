<?php 

include_once __DIR__ . "/../BisnisLogic/AddTodoList.php";
include_once __DIR__ . "/../Helper/Input.php";

function viewAddTodoList(){
    echo "Menambah Todo" . PHP_EOL;
    $input = input("Todo (Ketik 0 untuk kembali)");
    addTodoList($input);
}
