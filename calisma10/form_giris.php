<?php


if($_POST)
{
    echo 'Post İle Geldim';
    var_dump($_POST);
}

if($_REQUEST)
{
    echo 'Bu Ne İle Geldi';
    var_dump($_REQUEST);
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

    <form method="post" action="form_giris.php">
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
        <input type="submit" value="Form Gönder">
    </form>

</body>
</html>