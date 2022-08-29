<?php

include_once __DIR__ . "/../Model/TodoList.php";
include_once __DIR__ . "/../BisnisLogic/AddTodoList.php";
include_once __DIR__ . "/../BisnisLogic/ShowTodoList.php";



addTodoList("gilbert");
addTodoList("Fernando");
showTodoList();
var_dump($todolist);
