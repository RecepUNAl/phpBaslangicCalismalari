<?php

if(isset($_POST['form_gonder']))
{
    if($_POST['ad']!="" and $_POST['sifre']!="" and $_POST['sifre_tekrar']!="")
    {
        if($_POST['sifre']==$_POST['sifre_tekrar'])
        {
            if(strlen($_POST['sifre'])>=3)
            {
                echo $_POST['sifre'].'<br>';
                echo password_hash($_POST['sifre'],PASSWORD_DEFAULT);
            }
            else
            {
                echo "minimum 3 karakter giriniz";
            }
        }
        else
        {
            echo "Lütfen şifreyi doğru giriniz";
        }
    }
    else
    {
        echo "Lütfen hepsini doldur.";
    }
}
?>

