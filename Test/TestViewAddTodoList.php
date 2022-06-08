<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Naufal");
addTodoList("Hakim");
addTodoList("Kim");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();