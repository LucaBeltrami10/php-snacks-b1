<?php

$partiteCampionato = [
    [
        'squadra1' => 'Bologna',
        'punteggio1' => 90,
        'squadra2' => 'Milano',
        'punteggio2' => 50
    ],
    [
        'squadra1' => 'Bari',
        'punteggio1' => 92,
        'squadra2' => 'Ostia',
        'punteggio2' => 34
    ],
    [
        'squadra1' => 'Nonantola',
        'punteggio1' => 60,
        'squadra2' => 'Como',
        'punteggio2' => 46
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- <?php var_dump($partiteCampionato) ?> -->

<ul><?php foreach($partiteCampionato as $partita){ ?>
    
    <li> 
        <p><?php ?></p>
    </li>
    
    <?php } ?>
</ul>
    
</body>
</html>