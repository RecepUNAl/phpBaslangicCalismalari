<?php

if(isset($_POST['form_gonder']))
{
    $hash_kodu = '$2y$10$npRuceJ8t2P.WZm6BYkn/.A9dCs0u0UdIp8x8xZR8QUM6SSdiE/Cy';
    $sifre_dogrula=password_verify($_POST['sifre'], $hash_kodu);

    if($sifre_dogrula)
    {
        echo 'Hoşgeldin';
    }
    else{
        echo 'Güle Güle';
    }

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

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    Şifre:<input type="password" name="sifre"><br>
    <input type="submit" name="form_gonder" value="Giriş Yap"><br>

</form>

</body>
</html>