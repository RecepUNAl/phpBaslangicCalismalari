<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    echo 'POST Geldim<br>';
}

if($_POST)
{
    if (empty($_POST['Ad']))
    {
        echo 'Lütfen Ad Bölümünü Doldurun.';
    }
}

if($_POST['form1'])
{
    echo 'İstediğiniz Butona Tıklayın.';
}

?>


<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <table>
        <tr>
            <td>Ad</td>
            <td><input type="text" name="Ad"></td>
        </tr>
        <tr>
            <td>Soyad</td>
            <td><input type="text" name="Soyad"></td>
        </tr>
        <tr>
            <td>Şifre</td>
            <td><input type="password" name="Soyad"></td>
        </tr>
        <tr>
            <td>Yorum</td>
            <td><textarea value="Yorum"></textarea></td>
        </tr>
    </table>
    <input type="submit" name="form1" value="Form Gönder">
    <input type="submit" name="form2" value="Form Gönder 2">
</form>

</body>
</html>