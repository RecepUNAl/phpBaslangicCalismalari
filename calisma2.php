<?php

$yas = 15;
if($yas!="")
{
    if($yas<20) {
        echo "Bu Kişi Küçük";
    }
    elseif ($yas>=20 && $yas<40){
        echo "Orta Yaş";
    }
    elseif ($yas>=40 && $yas<70){
        echo "Yaşlı";
    }
    elseif ($yas>=70 && $yas<90){
        echo "Çok Yaşlı";
    }
    else{
        echo "Tarihi Eser";
    }
}
else
{
    echo "Yaşınızı Giriniz.";
}

?>

<form action="">
    <input type="text" name="yas">
    <input type="submit" value="Gönder">
</form>
