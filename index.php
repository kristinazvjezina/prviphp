<!DOCTYPE html>
<html>
<head>
    <title>Prvi PHP</title>
    <meta charset="utf-8"
</head>

<body>
<h1>Prvi PHP</h1>

<?php
    echo('Ovo je prije odlomka<br>');
    echo('<br>');
    echo('Super, još ćemo dodati<br>');

    echo(date('d.m.Y.'));

    $ocjena = 5;
    echo('<br>Vaša ocjena je : ' . $ocjena);

    $ocjena = 1;
    echo('<br> Vaša ocjena je: ' . $ocjena)
?>

<p>
    Ovo je odlomak
</p>
</body>
</html>