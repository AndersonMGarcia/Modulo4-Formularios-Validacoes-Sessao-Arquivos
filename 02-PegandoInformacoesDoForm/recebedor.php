<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegando Informações do Formulário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $nome = filter_input(INPUT_GET, 'nome');
            $idade = filter_input(INPUT_GET, 'idade');


            
            if ($nome){
                echo "Nome: ".$nome;
                echo "<br>Idade: ". $idade. " anos";
                
            }else{
                header('Location: index.php');
                exit;
            }

           
            
        ?>
    </div>    
</body>
</html>