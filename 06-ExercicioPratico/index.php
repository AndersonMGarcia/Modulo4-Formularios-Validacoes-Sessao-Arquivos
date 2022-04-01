<?php
    session_start();  
?>

<!DOCTYPE html>
<html lang="pt-br">
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
            if ($_SESSION['nome']){
                echo $_SESSION['nome'];
                $_SESSION['nome'] = '';
            }    
        ?>
        <form action="recebedor.php" method="post">
            <label for="nome">Qual seu nome?</label><br>
            <input type="text" name="nome" id="nome" >

            
            <input type="submit" value="Enviar" id="botao">

        </form>
    </div>   
</body>
</html>