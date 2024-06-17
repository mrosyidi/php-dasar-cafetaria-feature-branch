<?php

  require_once __DIR__ . "/Model/Foods.php";
  require_once __DIR__ . "/Model/Drinks.php";
  require_once __DIR__ . "/BusinessLogic/ShowFood.php";
  require_once __DIR__ . "/BusinessLogic/AddFood.php";
  require_once __DIR__ . "/BusinessLogic/RemoveFood.php";
  require_once __DIR__ . "/View/ViewShowFood.php";
  require_once __DIR__ . "/View/ViewAddFood.php";
  require_once __DIR__ . "/View/ViewRemoveFood.php";
  require_once __DIR__ . "/View/ViewMainMenu.php";

  echo "Aplikasi Todolist" . PHP_EOL;

  viewMainMenu();
