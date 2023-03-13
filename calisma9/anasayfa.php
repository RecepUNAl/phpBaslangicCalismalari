<?php

$baslik=array(1=>'sayfa 1 başlığı',2=>'sayfa 2 başlığı');
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
        if(isset($_GET['syf']))
        {
            echo ucfirst($baslik[$_GET['syf']]);
        }
        else
        {
            echo "Standar Başlık";
        }
        ?>
    </title>
</head>
<body>
Anasayfa<br>
<?php
require './sayfa_parcacikleri/menu.php';
if(isset($_GET['syf']))
{
    $sayfa=$_GET["syf"];
    include './sayfalar/sayfa'.$sayfa.'.php';
}
require './sayfa_parcacikleri/footer.php';
?>
</body>
</html>