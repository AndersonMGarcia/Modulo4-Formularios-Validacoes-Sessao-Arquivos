<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Informações no Formulário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
       
        <form action="recebedor.php" method="post">
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome"><br><br>

            <label for="idade">Idade:</label><br>
            <input type="number" name="idade" id="idade"><br><br>

            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email"><br><br>

            <label for="telefone">Telefone:</label><br>
            <input type="tel" name="telefone" id="telefone"><br><br>

            <input type="submit" value="Enviar">
        </form>    
   
    </div>   
</body>
</html>