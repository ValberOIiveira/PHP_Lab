<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;

        }

        #resultado-container {
            text-align: center;
            margin-bottom: 20px;
        }
        button{
            margin-top: 10px;
        }
        
    </style>
</head>

<body>
    <fieldset>
        <div id="resultado-container">
            <?php
            $numero = $_GET["numero"] ?? null;
            if ($numero !== null) {
                echo "O número escolhido foi o $numero<br/>";
                echo "O antecessor é o " . ($numero - 1) . " <br/>";
                echo "O sucessor é o " . ($numero + 1) . " <br/>";
            } else {
                echo "Por favor, insira um número válido.<br/>";
            }
            ?>
        </div>
    </fieldset>

    <button>
        <a href="index.html">Voltar</a>
    </button>

</body>

</html>
