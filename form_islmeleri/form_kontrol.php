<?php
if($_POST)
{
    //if($_POST['ad']=="")
    if(empty($_POST['ad']))//true
    {
        echo 'Lütfen ad kısmını doldurun<br>';
    }

    //echo empty($_POST['ad']);
}


?>