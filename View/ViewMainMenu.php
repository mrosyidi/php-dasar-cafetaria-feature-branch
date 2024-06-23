<?php

  require_once __DIR__ . "/../View/ViewShowFood.php";
  require_once __DIR__ . "/../View/ViewShowDrink.php";
  require_once __DIR__ . "/../View/ViewShowOrder.php";
  require_once __DIR__ . "/../Helper/Input.php";

  function viewMainMenu(): void
  {
    while(true)
    {
      echo "MENU UTAMA" . PHP_EOL;
      echo "1. Daftar Makanan" . PHP_EOL;
      echo "2. Daftar Minuman" . PHP_EOL;
      echo "3. Pemesanan" . PHP_EOL;
      echo "x. Keluar" . PHP_EOL;

      $pilihan = input("Pilih");

      if($pilihan == "1")
      {
        viewShowFood();
      }else if($pilihan == "2")
      {
        viewShowDrink();
      }else if($pilihan == "3")
      {
        viewShowOrder();
      }else if($pilihan == "x")
      {
        break;
      }else
      {
        echo "Pilihan tidak dimengerti" . PHP_EOL;
      }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;
  }
