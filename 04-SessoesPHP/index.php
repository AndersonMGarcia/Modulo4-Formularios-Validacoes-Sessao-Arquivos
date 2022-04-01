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
            if ($_SESSION['aviso']){
                echo $_SESSION['aviso'];
                $_SESSION['aviso'] = '';
            }    
        ?>
        <form action="recebedor.php" method="post">
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome" required><br>

            <label for="email">E-mail:</label><br>
            <input type="email" name="email" id="email" required><br>

            <label for="idade">Idade:</label><br>
            <input type="number" name="idade" id="idade" ><br><br>

            <input type="submit" value="Enviar" id="botao">

        </form>
    </div>   
</body>
</html>