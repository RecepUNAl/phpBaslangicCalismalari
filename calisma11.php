<?php

if(isset($_POST['form1']))
{
    $cinsiyet=$_POST['cinsiyet'];

    if(is_array($_POST['hobi']))
    {
        $hobi = $_POST['hobi'];
    }
    else
    {
        $hobi=[];
    }
    $medeni = $_POST['medeni'];

    if(is_array($_POST['gezi_yerleri']))
    {
        $gezi_yerleri=$_POST['gezi_yerleri'];
    }
    else{$gezi_yerleri = [];}
}
else
{
    $hobi=[];
    $cinsiyet="";
    $medeni="";
    $gezi_yerleri=[];
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
            <th>Cinsiyet</th>
            <td>
                <input type="radio" name="cinsiyet" value="Kadın" <?php echo $cinsiyet=="Kadın" ? 'checked' : '' ; ?> > Kadın<br>
                <input type="radio" name="cinsiyet" value="Erkek" <?php echo $cinsiyet=="Erkek" ? 'checked' : '' ; ?> > Erkek<br>
            </td>
        </tr>
        <tr>
            <th>Hobileriniz</th>
            <td>
                <input type="checkbox" name="hobi[]" value="Kitap" <?= in_array('Kitap',$hobi) ? 'checked' : '' ?>>Kitap Okumak<br>
                <input type="checkbox" name="hobi[]" value="Müzik" <?= in_array('Müzik',$hobi) ? 'checked' : '' ?>>Müzik Dinlemek<br>
                <input type="checkbox" name="hobi[]" value="Yürüyüş" <?= in_array('Yürüyüş',$hobi) ? 'checked' : '' ?>>Yürüyüş Yapmak<br>
             </td>
        </tr>
        <tr>
            <th>Medeni Durum</th>
            <td>
                <select value="medeni">
                    <option></option>
                    <option value="Evli" <?php echo $medeni=="Evli" ? 'selected' : '' ; ?>>Evli</option>
                    <option value="Bekar" <?= $medeni=="Bekar" ? 'selected' : '' ; ?>>Bekar</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Gezdiğiniz Yerler</th>
            <td>
                <select name="gezi_yerleri[]" multiple>
                    <option value="İstanbul" <?php echo in_array('istanbul',$gezi_yerleri) ? 'selected' : ''; ?>>İstanbul</option>
                    <option value="İzmir" <?php echo in_array('İzmir',$gezi_yerleri) ? 'selected' : ''; ?>>İzmir</option>
                    <option value="Ankara" <?php echo in_array('Ankara',$gezi_yerleri) ? 'selected' : ''; ?>>Ankara</option>
                </select>
            </td>
        </tr>
    </table>
    <input type="button" name="formgonder" value="Form Gönder">
</form>

</body>
</html>