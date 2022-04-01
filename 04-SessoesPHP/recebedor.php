<!DOCTYPE html>
<html lang="pt-br">

<?php
    session_start();
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
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

            if ($nome && $email && $idade){
                echo 'Nome: '. $nome ."<br>";
                echo 'E-mail: '. $email ."<br>";
                echo 'Idade: '. $idade ."<br>";
            }else{
                $_SESSION['aviso'] = 'Preencha os itens corretamente!';

                header('Location: index.php');
                exit;
            }

        ?>
    </div>    
</body>
</html>