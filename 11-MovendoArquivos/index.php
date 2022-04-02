<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movendo ou renomeando arquivos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
           // rename('teste.txt', 'pasta/teste2.txt');//movendo e renomeando o arquivo

            copy('pasta/teste2.txt', 'teste.txt');//copiando o arquivo para a raiz

            

        ?>
    </div>   
    
    
</body>
</html>