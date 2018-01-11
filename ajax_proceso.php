<?php 
    // load Composer
    require 'vendor/autoload.php';

    use Soups\Soup as Soup;

    Kint::$enabled_mode = true; // Disable kint
    // $resultado = $_REQUEST['words'];

    $soup1 = '3 3
                OIE
                IIX
                EXE';
    
    $soup2 = '1 10 EIOIEIOEIO';

    $soup3 = '5 5
                EAEAE
                AIIIA
                EIOIE
                AIIIA
                EAEAE';

    // TODO: MOSTRAR MENSAJE A USUARIO EN INGLES Y ESPANOL DE 
    // TODO: COMO DEBE SER LA ENTRADA DE DATOS PARA EL PROGRAMA
    echo "<br>";
    $soup1 = new Soup($soup1);
    $soup1->setSearch("OIE");
    $result1 = $soup1->checkSoup();
    d($result1);

    $soup2 = new Soup($soup2);
    $soup2->setSearch("OIE");
    $result2 = $soup2->checkSoup();
    d($result2);

    $soup3 = new Soup($soup3);
    $soup3->setSearch("OIE");
    $result3 = $soup3->checkSoup();
    d($result3);
?>