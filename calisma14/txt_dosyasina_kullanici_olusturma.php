<?php
if(isset($_POST['form_gonder']))
{
    if(!empty($_POST['kulad']) and !empty($_POST['sifre']) and !empty($_POST['sifre_tekrar']))
    {
        if(strlen($_POST['sifre'])>=3  and strlen($_POST['sifre_tekrar'])>=3)
        {
            if($_POST['sifre']==$_POST['sifre_tekrar'])
            {
                $kulad=$_POST['kulad'];
                $sifre=password_hash($_POST['sifre'], PASSWORD_DEFAULT);
                $satir=$kulad.'|'.$sifre.PHP_EOL;

                /*
                $dosya = fopen('uyeler.txt','a+');
                fwrite($dosya, $satir);
                fclose($dosya);
                echo "Üyeliğiniz alınmıştır.";
                */

                //üye var mı kontrol
                $uyelik=true;
                $dosya = fopen('uyeler.txt','r');
                while (!feof($dosya)) {
                    $dosya_satir=trim(fgets($dosya));
                    $satir_parcala=explode('|', $dosya_satir);

                    $satir_kulad=$satir_parcala[0];
                    if($satir_kulad==$kulad)
                    {
                        $uyelik = false;
                        break;
                    }
                }
                fclose($dosya);

                if($uyelik)
                {
                    $dosya = fopen('uyeler.txt','a+');
                    fwrite($dosya, $satir);
                    fclose($dosya);
                }
                else
                {
                    echo 'Zaten böyle bir kullanıcı var!';
                }
            }
            else
            {
                echo 'Lütfen şifrenizi doğru oluşturun.';
            }
        }
        else
        {
            echo 'Lütfen şifrenizi en az 3 karakter yapın.';
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
            <th>Şifreniz</th>
            <td><input type="password" name="sifre"></td>
        </tr>
        <tr>
            <th>Şifre Tekrar</th>
            <td><input type="password" name="sifre_tekrar"></td>
        </tr>
    </table>
    <input type="submit" name="form_gonder" value="Üye Ol">
</form>

</body>
</html>