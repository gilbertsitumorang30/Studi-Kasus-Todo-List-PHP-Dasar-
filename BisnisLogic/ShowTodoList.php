<?php

include_once __DIR__ . "/../Model/TodoList.php";

function showTodoList(){

    global $todolist;

    foreach($todolist as $key => $value){
        echo $key+1 . ". " . $value;
    }
}