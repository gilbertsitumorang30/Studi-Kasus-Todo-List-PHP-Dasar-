<?php

include_once __DIR__ . "/../Model/TodoList.php";

function addTodoList(string $todo){
    global $todolist;

    if($todo == 0){
        return 0;
    }

    $todolist[count($todolist)] = $todo;
}