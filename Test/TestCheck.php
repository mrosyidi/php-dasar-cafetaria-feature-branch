<?php

  require_once __DIR__ . "/../Model/Foods.php";
  require_once __DIR__ . "/../BusinessLogic/ShowFood.php";
  require_once __DIR__ . "/../BusinessLogic/AddFood.php";
  require_once __DIR__ . "/../Helper/Input.php";
  require_once __DIR__ . "/../Helper/Check.php";

  showFood();

  $name = input("Name");
  $result = check($name);
  var_dump($result);

  addFood("Mie Goreng", 7000);
  addFood("Soto Ayam", 12000);
  addFood("Rawon", 15000);

  showFood();

  $name = input("Name");
  $result = check($name);
  var_dump($result);
