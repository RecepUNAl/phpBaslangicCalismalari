<?php
/*
$satir = 1;
while ($satir<=10)
{
    echo $satir.".Satır <br/>";
    echo $satir == 5 ? "5.Satır Geçildi <br/>":"";
    $satir++;
}
*/

$sayi = 1;
$durum = true;
while($durum)
{
    $sayac=1;
    while($sayac<=5)
    {
        $sayi++;
        echo "Yeni Satır".$sayac."<br>";
        $sayac++;
    }

    if($sayi>8)
    {
        $durum=false;
    }
}
echo $sayi;
?>
