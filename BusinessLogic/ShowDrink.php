<?php

  function showDrink(): void
  {
    global $drinks;

    echo "DAFTAR MINUMAN" . PHP_EOL;

    if(!empty($drinks))
    {
      foreach($drinks as $number => $drink)
      {
        echo "$number. " . $drink["name"] . "  Rp.  " . $drink["price"] . PHP_EOL;
      }
    }else
    {
      echo "Tidak ada daftar minuman" . PHP_EOL;
    }
  }
