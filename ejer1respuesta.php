<?php
$diametro = $_POST['diametro'];
$altura = $_POST['altura'];
$radio = $diametro/2;
$PI = 3.141593;

$volumen = $PI*($radio^2)*$altura;

    echo "<br>Los valores de altura son ". $altura;
    echo "<br>Los valores de diametro son ". $diametro;
    echo "<br>El volumen del cilindro es de ". $volumen. " 2/m";
?>