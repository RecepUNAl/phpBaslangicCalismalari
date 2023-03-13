<?php
$sayac=1;
//Do While döngüsü
do{
    echo 'Satır:'.$sayac;
    echo '<br>';
    $sayac++;
}While($sayac<=10);
echo '<br><br><br><br>';

//For Dögüsü
for($i=2;$i<=5;$i++)
{
    echo 'Yeni Satır:'.$i.'<br>';
}
echo '<br><br><br><br>';

//Dönkü kırma
for($i=1;$i<=10;$i++)
{
    if ($i==5){
        break;
    }
    echo 'Yeni Satır:'.$i.'<br>';
}
echo '<br><br><br><br>';

//Dönkü devam ettirme
for($i=1;$i<=10;$i++)
{
    if ($i==5){
        continue;
    }
    echo 'Yeni Satır:'.$i.'<br>';
}
echo '<br><br><br><br>';

//foreach dögüsü
$dizi = ['Dizi 1',5,35,'Metin 2',5=>'Yeni değer'];
foreach ($dizi as $eleman)
{
    echo $eleman.'<br>';
}
echo '<br><br><br><br>';

//foreach döngüsü indis kullanımı
foreach ($dizi as $indis=>$deger)
{
    echo 'İndis'.$indis.': '.$deger.'<br>';
}
echo '<br><br><br><br>';

?>