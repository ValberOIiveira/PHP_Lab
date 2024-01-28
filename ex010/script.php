<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
</head>
<body>
    <?php
        $value = $_GET["valor"];
        const DOLAR = 4.92;
        const EURO =  5.33;
        const IENE = 0.033;
        
        echo "Você tem R$ $value na sua carteira, o que equivale a " . "<br/>";

        echo "US$ " . round($value/DOLAR,2) . "<br/>";
        echo "€ " . round($value/EURO,2) . "<br/>";
        echo "¥ " . round($value/IENE,2) . "<br/>";

    ?>
    
</body>
</html>