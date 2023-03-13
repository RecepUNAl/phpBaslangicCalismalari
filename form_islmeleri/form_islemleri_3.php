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
        else { $$key=$value; }
    }
}
else { $form_gonderme=false; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php
    echo $form_hata ? 'Lütfen gerekli kısımları doldurun' : '';
    ?>
    <table>
        <tr>
            <td>Ad</td>
            <td><input type="text" name="ad"  value="<?= $ad; ?>"></td>
            <td>
                <?php
                if($form_gonderme)
                {
                    if(!$ad)//true
                    {
                        echo 'Lütfen adı doldurun';
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Soyad</td>
            <td><input type="text" name="soyad" value="<?= $soyad; ?>"></td>
            <td>
                <?php
                if($form_gonderme)
                {
                    if(!$soyad)//true
                    {
                        echo 'Lütfen soyadı doldurun';
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Yorum</td>
            <td><textarea name="yorum"><?= $yorum; ?></textarea></td>
            <td></td>
        </tr>
    </table>
    <input type="submit" name="form1" value="Formu Gönder">
</form>

</body>
</html>