<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $num_min = $_GET["minimo"];
        $num_max = $_GET["maximo"];
        $numeroSorteado = random_int($num_min,$num_max);
        
        echo "Número sorteado: " . $numeroSorteado;
    ?>
    
</body>
</html>