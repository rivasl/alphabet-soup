<?php

// load Composer
require 'vendor/autoload.php';

Kint::$enabled_mode = true; // Disable kint

$frase = "Esta frase";
$palabras = preg_split("/[\s]+/", $frase);
d($palabras);
echo count($palabras);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/javascript.js"></script>
    <script src="vendor/components/jquery/jquery.min.js"></script>
</head>
<body>
    <h1>Introduzca la lista de palabras</h1>
    <textarea id="words" cols="50"></textarea>
    <input type="button" id="boton1" value="Ver">
    <br/>
 
    Resultado: <span id="resultado">0</span>
</body>
</html>