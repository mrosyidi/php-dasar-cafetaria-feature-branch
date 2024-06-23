<?php

  require_once __DIR__ . "/../Model/Foods.php";
  require_once __DIR__ . "/../Model/Drinks.php";
  require_once __DIR__ . "/../Model/Orders.php";
  require_once __DIR__ . "/../BusinessLogic/ShowFood.php";
  require_once __DIR__ . "/../BusinessLogic/ShowDrink.php";
  require_once __DIR__ . "/../BusinessLogic/AddOrder.php";
  require_once __DIR__ . "/../Helper/Input.php";
  require_once __DIR__ . "/../Helper/Range.php";
  require_once __DIR__ . "/../Helper/Code.php";
  require_once __DIR__ . "/../Helper/Data.php";
  require_once __DIR__ . "/../Helper/Empty.php";

  function viewAddOrder(int $numberOrder, bool $exit): void
  {
    if($numberOrder == 1)
    {
      showFood();
      $order = "makanan";
    }else
    {
      showDrink();
      $order = "minuman";
    }

    echo "MENAMBAH PESANAN" . PHP_EOL;
    $number = input("Nomor $order (x untuk batal)");

    if($number == "x")
    {
      echo "Batal menambah $order" . PHP_EOL;
    }else if(!is_numeric($number))
    {
      echo "Gagal menambah pesanan, nomor $order harus bilangan" . PHP_EOL;
    }else if(isEmpty($numberOrder))
    {
      echo "Gagal menambah pesanan, tidak ada daftar $order" . PHP_EOL;
    }
    else if(!inRange($numberOrder, $number))
    {
      echo "Gagal menambah pesanan, tidak ada daftar $order dengan nomor $number" . PHP_EOL;
    }else
    {
      $qty = input("Jumlah $order (x untuk batal)");

      if($qty == "x")
      {
        echo "Batal menambah $order" . PHP_EOL;
      }else if(!is_numeric($qty))
      {
        echo "Gagal menambah $order, jumlah $order harus bilangan" . PHP_EOL;
      }else if($qty <= 0)
      {
        echo "Gagal menambah $order, jumlah pemesanan minimal satu" . PHP_EOL;
      }else
      {
        $code = code($exit);
        $data = data($numberOrder, $number);
        addOrder($code, $data["name"], $data["price"], $qty);
      }
    }
  }
