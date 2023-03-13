<ul>
    <li><a href="anasayfa.php">Anasayfa</a></li>
    <li><a href="hakkimizda.php">Hakkımızda</a></li>
    <li><a href="anasayfa.php?syf=1" <?php if(isset($_GET['syf']) && $_GET['syf']==1 ) {echo 'style="color: red;"';} ?>>Sayfa 1</a></li>
    <li><a href="anasayfa.php?syf=2" <?php if(isset($_GET['syf']) && $_GET['syf']==2 ) {echo 'style="color: red;"';} ?>>Sayfa 2</a></li>
</ul>