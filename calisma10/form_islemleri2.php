<?php

if($_POST['form1'])
{
    $form_gonderme=true;
    $form_hata=false;
    $gerekliler=['ad','soyad'];
    foreach ($_POST as $key => $value)
    {
        if(in_array($key, $gerekliler) && empty($value))
        {
            $form_hata=true;
            $$key=false;
        }
        else
        {
            $$key=$value;
        }
    }
}
else
{
    $form_gonderme=false;
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <?php

    echo $form_hata ? 'LÜTFEN GEREKLİ ALANLARI DOLDURUNUZ':'';

    ?>
    <table>
        <tr>
            <td>Ad</td>
            <td><input type="text" name="Ad"></td>
            <td>
                <?php
                    if (!$ad)
                    {
                        echo 'Lütfen Adı Doldurunuz';
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Soyad</td>
            <td><input type="text" name="Soyad"></td>
            <td></td>
        </tr>
        <tr>
            <td>Şifre</td>
            <td><input type="password" name="Soyad"></td>
            <td></td>
        </tr>
        <tr>
            <td>Yorum</td>
            <td><textarea value="Yorum"></textarea></td>
        </tr>
    </table>
    <input type="submit" name="form1" value="Form Gönder">
</form>

</body>
</html>