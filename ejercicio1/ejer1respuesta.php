<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body>
    <div class="formulario">
<?php
$diametro = $_POST['diametro'];
$altura = $_POST['altura'];
$radio = $diametro/2;
$PI = 3.141593;

$volumen = $PI*($radio^2)*$altura;

    echo "<br>Los valores de altura son ". $altura;
    echo "<br>Los valores de diametro son ". $diametro;
    echo "<br>El volumen del cilindro es de ". $volumen. " m/2";
    
?>
</div>
</body>
</html>
