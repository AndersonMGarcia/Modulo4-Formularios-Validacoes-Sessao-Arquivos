<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lendo arquivos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $texto = file_get_contents('texto.txt');

            echo $texto;

            echo "<hr>";

            $texto = explode("\n", $texto);

            echo "Total de linhas do texto: ".count($texto). "<br>";
        ?>
    </div>    
</body>
</html>