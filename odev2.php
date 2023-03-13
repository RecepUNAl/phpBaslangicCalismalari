<?php

$a=array("Elma","Armut","Ayva","Kabak");

if (in_array("Kabak",$a))
    {
        echo "Kabak var, un alındı.<br>";
        $a[]="Un";
        echo "<br>";
        print_r($a);
    }
    else
    {
        echo "Kabak yok, Kabak ve Un alındı.<br>";
        $a[]="Un ";
        $a[]="Kabak";
        echo "<br>";
        print_r($a);
    }
?>
