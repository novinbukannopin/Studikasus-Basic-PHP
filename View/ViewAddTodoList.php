<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BussinesLogic/AddTodoList.php";

function viewAddTodoList()
{

    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk cancel) ");
    if ($todo == "x") {
        echo "Batal menambah Todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
