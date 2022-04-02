
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro com arquivos txt</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <form action="recebedor.php" method="get">

            <label for="nome">Novo nome: </label>
            <input type="text" name="nome" id="nome">
            <input type="submit" value="Adicionar">
        </form>   
        
        
        <?php
            $texto = file_get_contents('list_name.txt');
            echo $texto;
        ?>
    </div>    
</body>
</html>