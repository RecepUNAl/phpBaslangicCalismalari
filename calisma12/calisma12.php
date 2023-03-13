<?php
require './yükleme_fonksiyonu.php';
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
<form name="dosya_gonder" method="post" enctype="multipart/form-data" action="<?= $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="MAX_FILE_SIZE" value="<?= $max; ?>">
    <input type="file" name="dosya"><br><br>
    <input type="submit" name="dosya_yukle" value="Dosyayı Gönder">
</form>
</body>
</html>