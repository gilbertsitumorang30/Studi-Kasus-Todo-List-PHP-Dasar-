<?php

include_once __DIR__ . "/../View/ViewShowTodoList.php";
include_once __DIR__ . "/../BisnisLogic/AddTodoList.php";

addTodoList("kenangan ini");
addTodoList("sampai kini");


viewShowTodoList();