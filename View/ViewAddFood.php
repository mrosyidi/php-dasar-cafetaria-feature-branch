<?php

  require_once __DIR__ . "/../Model/Foods.php";
  require_once __DIR__ . "/../BusinessLogic/ShowFood.php";
  require_once __DIR__ . "/../BusinessLogic/AddFood.php";
  require_once __DIR__ . "/../Helper/Input.php";
  require_once __DIR__ . "/../Helper/Check.php";

  function viewAddFood(): void
  {
    echo "MENAMBAH MAKANAN" . PHP_EOL;

    $name = input("Nama makanan (x untuk batal)");

    if($name == "x")
    {
      echo "Batal menambah makanan" . PHP_EOL;
    }else
    {
      $price = input("Harga makanan (x untuk batal)");

      if($price == "x")
      {
        echo "Batal menambah makanan" . PHP_EOL;
      }else if(!is_numeric($price))
      {
        echo "Gagal menambah makanan, harga makanan harus bilangan" . PHP_EOL;
      }else if($price <= 0)
      {
        echo "Gagal menambah makanan, harga makanan harus bilangan positif" . PHP_EOL;
      }else if(check($name))
      {
        echo "Gagal menambah makanan, nama makanan sudah ada" . PHP_EOL;
      }else
      {
        addFood($name, $price);
      }
    }
  }
