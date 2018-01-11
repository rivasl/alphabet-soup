<?php 
    // load Composer
    require 'vendor/autoload.php';

    use Soups\Soup as Soup;

    Kint::$enabled_mode = true; // Disable kint
    // $resultado = $_REQUEST['words'];
    $frase1 =   '3 3
                MIA
                IIX
                EXE';
    $frase = '1 10 EIOIEIOEIO';
    // TODO: MOSTRAR MENSAJE A USUARIO EN INGLES Y ESPANOL DE COMO DEBE SER LA ENTRADA DE DATOS PARA EL PROGRAMA
    d($frase);
    echo "<br>";

    $soup = new Soup($frase);
    $soup->setSearch("OIE");
    $resultado = $soup->checkSoup();
    d($resultado);
?>