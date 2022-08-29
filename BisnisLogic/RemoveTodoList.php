<?php

include_once __DIR__ . "/../Model/TodoList.php";

function removeTodoList(int $todo) {
    global $todolist;

    if($todo == 0){
        return 0;
    }

    if($todo <= count($todolist) and $todo > 0){
        for($i = 0; $i < count($todolist); $i++){
            if($i >= $todo - 1 and $i  < count($todolist) - 1){
             $todolist[$i] = $todolist[$i+1];
            }else{
             $todolist[$i] = $todolist[$i];
            }
         }
         unset($todolist[count($todolist)-1]);
    }else{
        echo "Todo tidak ditemukan" , PHP_EOL;
    }
}