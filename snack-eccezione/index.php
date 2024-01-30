<?php

class Persona
{
    public $age;

    public function __construct($_age)
    {
        $this->age = $this->setAge($_age);
    }

    public function setAge($_age)
    {
        if (is_float($_age)) {
            throw new Exception('non è un numero intero');
        } else {
            return $_age;
        }
    }
}

$mario = new Persona(16.6)

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <p><?php echo $mario->age ?></p>
    </div>

</body>

</html>