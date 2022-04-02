<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluindo arquivos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            unlink('lista.txt');//excluindo arquivo
            echo 'Arquivo excluído com sucesso!';
        ?>
    </div>    
</body>
</html>