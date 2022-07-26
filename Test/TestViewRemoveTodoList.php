<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BussinesLogic/AddTodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";

addTodoList("Novin");
addTodoList("Ardian");
addTodoList("Yulianto");

showTodoList();

viewRemoveTodoList();
showTodoList();