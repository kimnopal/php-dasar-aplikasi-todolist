<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Naufal");
addTodoList("Hakim");
addTodoList("Kim");
addTodoList("Nopal");

viewShowTodoList();