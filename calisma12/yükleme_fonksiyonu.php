<?php

function hata_kontrol($hata_kodu)
{
    $durum=true;
    switch ($hata_kodu)
    {
        case 0:
            $aciklama="";
            break;
        case 1:
            $durum=false;
            $aciklama="upload max error";
            break;
        case 2:
            $durum=false;
            $aciklama="form max error";
            break;
    }
    return array($durum, $aciklama);
}

$max=30000;
if(isset($_POST['dosya_yukle']))
{
    $dosyam=$_FILES['dosya'];
    $hata_kontrol1=hata_kontrol($dosyam['error']);
    if ($hata_kontrol1[0])
    {
        if($max>=$_FILES['dosya']['size'])
        {
            $dosya_adi=pathinfo($_FILES['dosya']['name'],PATHINFO_FILENAME);
            $uzanti=pathinfo($_FILES['dosya']['name'],PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['dosya']['tmp_name'],"dosyalar/".$dosya_adi.".".$uzanti);
        }
        else
        {
            echo 'Dosya Boyutu Sıkıntılı';
        }
    }
    else
    {
        echo $hata_kontrol1[1];
    }
}
?>