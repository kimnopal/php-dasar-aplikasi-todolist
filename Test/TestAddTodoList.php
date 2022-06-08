<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Naufal");
addTodoList("Hakim");
addTodoList("Kim");
addTodoList("Nopal");

var_dump($todoList);