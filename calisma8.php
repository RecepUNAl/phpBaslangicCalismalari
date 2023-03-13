<?php

    function yeni_dizi()
    {
      $sayi=15;
      yield $sayi;
      $sayi++;
      yield $sayi;
      yield 120;
      yield 'Merhaba';
    }

    $gelen_veri= yeni_dizi();
    foreach ($gelen_veri as $eleman)
    {
        echo $eleman.'<br>';
    }

?>