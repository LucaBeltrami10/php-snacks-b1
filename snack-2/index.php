<?php 

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];



/* if( strlen($name)< 3 && is_numeric($age) && str_contains($email, '@') && str_contains($email, '.')){
    echo 'accesso consentito'
} else{
    echo 'accesso negato'
} */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" methods="GET"><br>
    <label for="name">Nome</label>
    <input id="name" name="name" type="text"> <br>
    <label for="email">Email</label>
    <input id="email" name="email" type="email"> <br>
    <label for="age">Age</label>
    <input id="age" name="age" type="number">
    <button type="submit">login</button>
</form>

<p><?php echo $name ?></p>
<p><?php echo $email ?></p>
<p><?php echo $age?></p>

<p><?php 
if(empty($name) && empty($email) && empty($age)){

}else{
    if( strlen($name) > 3 && is_numeric($age) && str_contains($email, '@') && str_contains($email, '.')){
        echo 'accesso consentito';
    } else{
        echo 'accesso negato';
    }
}
?></p>






    
</body>
</html>