<?php
echo "el precio de la tienda 1 es de ". $_POST['tienda1']; 
echo "<br>el precio de la tienda 2 es de ". $_POST['tienda2']; 
echo "<br>el precio de la tienda 3 es de ". $_POST['tienda3']; 

$promedio = $_POST['tienda1']+$_POST['tienda2']+$_POST['tienda3']/3;

echo "<br>el promedio es de: " .$promedio;
?>