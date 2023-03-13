<?php

function topla()
{
    $sayi1=100;
    $sayi2=160;
    echo $sayi1 + $sayi2;
}
topla();
echo '<br><br><br><br>';

function topla2($sayi1,$sayi2){
    echo $sayi1 + $sayi2;
}
//topla2(50,70);
topla2(50,70);
echo '<br><br><br>';

function dizi_olustur($minimum, $maksimum)
{
    $dizi=[];
    for($i=$minimum;$i<$maksimum;$i++)
    {
        $dizi[]=$i;
    }
    var_dump($dizi);
}
dizi_olustur(5,10);
echo '<br><br><br>';


function topla3($sayi1,$sayi2=25)
{
    echo $sayi1+$sayi2;
}
topla3(50);
echo '<br><br><br>';

function topla4($sayi1,$sayi2=25)
{
    return $sayi1+$sayi2;
}
$toplam_deger = topla3(10);
echo $toplam_deger;
echo '<br><br><br>';

?>