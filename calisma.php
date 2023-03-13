<?php

$dizi2=["metin 1", 56, 2.5,TRUE ];
var_dump($dizi2);

//Diziye eleman ekleme yol 1
$dizi2[]="metin 2";
var_dump($dizi2);

//Diziye eleman ekleme yol 2
array_push($dizi2,"metin 3");
var_dump($dizi2);

//Diziye eleman ekleme yol 3
$dizi2[6]=100;
var_dump($dizi2);

//Diziye eleman ekleme yol 4
$dizi2[count($dizi2)]="son metin";
var_dump($dizi2);

$dizi=array("metin 1",56,2.5);
if (in_array(56,$dizi))
{
    echo "Var";
}
else
{
    echo "Yok";
}

?>