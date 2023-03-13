<?php

require './uyelik.php';

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

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    Adınız:<input type="text" name="ad"><br>
    Şifre:<input type="password" name="sifre"><br>
    Şifre Tekrar:<input type="password" name="sifre_tekrar"><br>
    <input type="submit" name="form_gonder" value="Üye Ol"><br>

</form>

</body>
</html>