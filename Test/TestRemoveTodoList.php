<?php

require_once "../Model/TodoList.php";
require_once "../BussinesLogic/RemoveTodoList.php";
require_once "../BussinesLogic/AddTodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";

addTodoList("Novin");
addTodoList("Ardian");
addTodoList("Yulianto");

showTodoList();

removeTodoList(2);

showTodoList();
