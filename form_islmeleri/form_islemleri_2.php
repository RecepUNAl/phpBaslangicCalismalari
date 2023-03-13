<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST')
{
    echo 'POST geldim<br>';
}

if($_POST)
{
    //if($_POST['ad']=="")
    if(empty($_POST['ad']))//true
    {
        echo 'Lütfen ad kısmını doldurun<br>';
    }
    //echo empty($_POST['ad']);
}

if($_POST['form1'])
{
    echo 'istediğim butona tıklandı.';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table>
        <tr>
            <td>Ad</td>
            <td><input type="text" name="ad"></td>
        </tr>
        <tr>
            <td>Soyad</td>
            <td><input type="text" name="soyad"></td>
        </tr>
        <tr>
            <td>Yorum</td>
            <td><textarea name="yorum"></textarea></td>
        </tr>
    </table>
    <input type="submit" name="form1" value="Formu Gönder">
    <input type="submit" name="form2" value="Formu Gönder 2">
</form>

</body>
</html>