<!DOCTYPE html>
<html lang="pt-br">

<?php
    session_start();

    $_SESSION['nome'] = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);   
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessões em PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);            

            if (isset($_SESSION['nome']) && !empty($nome)){
                echo 'Nome: '. $_SESSION['nome']. "     ";


            }else{
                $_SESSION['nome'] = 'Preencha o nome corretamente!';

                header('Location: index.php');
                exit;
            }

            

        ?>

        <a href="apagar.php">Sair</a>
    </div>    
</body>
</html>