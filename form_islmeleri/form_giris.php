<?php
/*$dizi=array('ad'=>'Özcan','soyad'=>'budak',5);
echo $dizi['ad'];*/

if($_GET)
{
    echo 'GET ile geldim';
    var_dump($_GET);
}

if($_POST)
{
    echo 'POST ile geldim';
    var_dump($_POST);
    echo $_POST['ad'].'<br>';
}

if($_REQUEST)
{
    echo 'ne ile geldim ?';
    var_dump($_REQUEST);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form method="post" action="form_giris.php">
    <table>
        <tr>
            <td>Ad</td>
            <td><input type="text" name="ad" required minlength="2" maxlength="5"></td>
        </tr>
        <tr>
            <td>Soyad</td>
            <td><input type="text" name="soyad"></td>
        </tr>
        <tr>
            <td>Mail</td>
            <td><input type="email" name="soyad" required></td>
        </tr>
        <tr>
            <td>Yorum</td>
            <td><textarea name="yorum"></textarea></td>
        </tr>
    </table>
    <input type="submit" value="Formu Gönder">
</form>

</body>
</html>