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
    <p> Ingrese la altura y el diametro del cilindro en metros: </p> 
    <form name="formulario" method="post" action="ejer1respuesta.php">
        <div class="altura">
        <b>altura:</b>
        <input type="number" name="altura" value="" required="" class="inputs">
        </div>
        <br>
        <div class="diametro">
        <b>diametro:</b>
        <input type="number" name="diametro" value="" required="" class="inputs"><br>
        <input type="submit" value="Enviar datos">
        </div>
        </div>
</form>
</body>
</html>