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
    <div class="resolution" >
<?php
    echo "el precio de la tienda 1 es de ". $_POST['tienda1']; 
    echo "<br>el precio de la tienda 2 es de ". $_POST['tienda2']; 
    echo "<br>el precio de la tienda 3 es de ". $_POST['tienda3']; 

    $promedio = $_POST['tienda1']+$_POST['tienda2']+$_POST['tienda3']/3;

    echo "<br>el promedio es de: " .$promedio;
?>
</div>
</body>
</html>

