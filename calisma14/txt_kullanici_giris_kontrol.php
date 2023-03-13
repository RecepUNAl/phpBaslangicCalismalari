<?php
if(isset($_POST['form_gonder']))
{
    if(!empty($_POST['kulad']) and !empty($_POST['sifre']))
    {
        $kulad=$_POST['kulad'];
        $sifre=$_POST['sifre'];

        $giris=false;
        $dosya = fopen('uyeler.txt','r');
        while (!feof($dosya)) {
            $dosya_satir=trim(fgets($dosya));
            $satir_parcala=explode('|', $dosya_satir);

            $satir_kulad=$satir_parcala[0];
            $satir_hash_sifre=$satir_parcala[1];

            $sifre_dogrula=password_verify($sifre, $satir_hash_sifre);
            if($satir_kulad==$kulad and $sifre_dogrula)
            {
                $giris = true;
                break;
            }
        }
        fclose($dosya);

        if($giris)
        {
            echo 'Hoşgeldiniz.';
        }
        else
        {
            echo 'Kullanıcı adı ya da şifrede bir hata var.';
        }
    }
    else
    {
        echo 'Lütfen şifrenizi giriniz.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form method="post" action="<?= $_SERVER['PHP_SELF'];?>">
    <table>
        <tr>
            <th>Kullanıcı adı</th>
            <td><input type="text" name="kulad"></td>
        </tr>
        <tr>
            <th>Şifre</th>
            <td><input type="password" name="sifre"></td>
        </tr>
    </table>
    <input type="submit" name="form_gonder" value="Giriş Yap">
</form>

</body>
</html>


