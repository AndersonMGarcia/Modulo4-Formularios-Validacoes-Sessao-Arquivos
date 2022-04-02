<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escrevendo em arquivos com PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
           /* $texto = 'Fulano de Tal';

            file_put_contents('nome_arquivo.txt', $texto); //funçaõ que cria ou substitui o arquivo

            echo "Arquivo criado com sucesso!";    */
            
            $texto = file_get_contents('texto.txt');
            $texto .= '\nNovo texto adicionado...';
            file_put_contents('texto.txt', $texto );

            


        ?>
    </div>    



    
</body>
</html>