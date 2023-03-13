<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style type="text/css">
        td {
            text-align: center;
            padding: 6px ;
            font-family: 'Montserrat', sans-serif;
        }
        table{
            width: 40%;
            font: bold 1em "Trebuchet MS", Verdana, Arial, Helvetica,
            sans-serif;
            border: 20px solid #505050;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-align: left;
            padding: 6px 6px 6px 12px;
            background: #C1DAD7;
            border-collapse: collapse;
        }
        .btn{
            width:100%;
            font-family: 'Montserrat', sans-serif;
            padding: 6px;
        }
    </style>

</head>
<body>

<div align="center">
<form method="post">
    <h1>Ödev 1</h1>
    <table>
        <tr>
            <td>Yaşınızı Giriniz:</td>
            <td><input type="number" name="yas"  ></td>
        </tr>
        <tr>
            <td>Sigara İçtiğiniz Süreyi Giriniz:</td>
            <td><input type="number" name="sig_ic_sur" ></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="hesapla" value="Hesapla" class="btn"></td>
        </tr>
        <tr>
            <td colspan="2">
                <?php

            if($_POST) {
                $yas =$_POST['yas'];
                $si_ic_sur=$_POST['sig_ic_sur'];
                $yas_yarisi=$yas/2;

                if ($yas_yarisi >= $si_ic_sur)
                {
                    echo "Yaşadığn Hayatın Yarısı Kadar Ömrün Kaldı";
                }
                elseif ($yas_yarisi < $si_ic_sur)
                {
                    echo "Yaşadığın Hayatın 3'i Ömrün Kaldı.";
                }
            }
            ?>
            </td>
        </tr>
    </table>
</form>
</div>
</body>
</html>

