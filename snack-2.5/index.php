<?php
$numeroUno = $_GET['num1'];
$numeroDue = $_GET['num2'];
$numeroTre = $_GET['num3'];

/* if( isset($numeroUno) && isset($numeroDue) $$ isset($numeroTre) ){
    $media = $_GET['num1'] + $_GET['num2'] + $_GET['num3'];
}else{
    $media = 'non possibile'
} */


?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2.5</title>
</head>
<body>
    <form action="index.php">
    <input type="number" id="num1" name="num1">
    <input type="number" id="num2" name="num2">
    <input type="number" id="num3" name="num3">
    <button type="submit" >invio</button>
    </form>

    <h1><?php $media ?></h1>
</body>
</html>