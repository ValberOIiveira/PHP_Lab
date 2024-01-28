<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>

    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";

            echo "Olá <b>$nome $sobrenome</b>, seja vem vindo!";
            // var_dump($_GET);
            // var_dump($_POST);
            // var_dump($_REQUEST);

        ?>
    </main>
    
</body>
</html>