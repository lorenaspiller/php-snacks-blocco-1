<?php
/*
Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti
“Accesso negato”
*/

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

var_dump($name, $mail, $age);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>
        <?php 
            if (empty($name) > 3 || empty($mail) || empty($age)) {
                echo "inserisci nome, mail e età nella url";
            } else {
                if (strlen('name') > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age) ) {
                   echo "accesso riuscito!";
                } else {
                    echo "accesso negato!";
                }
            };
         ?>
         </h2>
    </body>
</html>