<<<<<<< HEAD
<?php
$arrFrutas = [
    1 => "abacaxi",
    2 => "banana",
    3 => "goiaba",
    4 => "manga",
    5 => "uva"
];
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>array</title>
    </head>
    <body>
        <ul>
            <?php
            foreach($arrFrutas as $valor) {
                ?>
                <li><?= $valor ?></li>
                <?php
            }
            ?>
        </ul>
    </body>
=======
<?php
$arrFrutas = [
    1 => "abacaxi",
    2 => "banana",
    3 => "goiaba",
    4 => "manga",
    5 => "uva"
];
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>array</title>
    </head>
    <body>
        <ul>
            <?php
            foreach($arrFrutas as $valor) {
                ?>
                <li><?= $valor ?></li>
                <?php
            }
            ?>
        </ul>
    </body>
>>>>>>> 7f487fb7bee6ee4d62877714fcae5b1f9ae92e8d
</html>