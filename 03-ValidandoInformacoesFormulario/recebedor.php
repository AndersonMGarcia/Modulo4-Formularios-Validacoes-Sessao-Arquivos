<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Informações no Formulário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $tel = filter_input(INPUT_POST, 'telefone', FILTER_VALIDATE_INT);

            

            if ($nome){
                echo "Nome: ". $nome. "<br>";
                echo "Idade: ". $idade. "<br>";
                echo "Email: ". $email. "<br>";
                echo "Telefone: ". $tel. "<br>";

            }else{
                header('Location: index.php');
            }
        ?>
    </div>    
</body>
</html>