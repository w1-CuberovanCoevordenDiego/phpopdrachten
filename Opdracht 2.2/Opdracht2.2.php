<?php
$text1 = 'Hallo';
$text2 = 'een makkelijke taal';
$text3 = 'toch zo\'n makkelijke taal ';
$text4 = ' wat is ';
$text5 = 'PHP ';
$text6 = 'Nooit gedacht dat ';
$text7 = 'De installatie is best ingewikkeld';
$text8 = 'Fijn ';
$text9 = '?';
$text10 = '. ';
$text11 = ',';
$text12 = "<br>";
    $text13 = 'is ';
    $text14 = 'Vind je niet';
    $text15 = 'toch';
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php print "pagina 1"; ?></title>
</head>
<body>
<h1>Opdracht 2.2</h1>
<p>
    <?php
    echo $text1 . $text11 . $text4 . $text5 . $text2 . $text10 . $text12
    . $text7 . $text10 . $text8 . $text15 . $text9 . $text12
    . $text6 . $text5 . $text3 . $text13 . $text11;
    ?>
</p>

<p>
    <?php
    echo $text1 . $text11 . $text12
    . $text8 . $text15 . " dat PHP zo'n makkelijke taal is" . $text10 . $text12
    . $text7 . $text10 . $text14 . $text9;
    ?>
</p>
    <a href="../index.php">Terug</a>
</body>
</html>

