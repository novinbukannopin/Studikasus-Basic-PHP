<?php

require_once "../Model/TodoList.php";
require_once "../BussinesLogic/AddTodoList.php";

addTodoList("Novin");
addTodoList("Izza");

var_dump($todoList);