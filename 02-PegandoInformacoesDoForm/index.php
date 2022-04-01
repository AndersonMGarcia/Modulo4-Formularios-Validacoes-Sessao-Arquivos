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
        <form action="recebedor.php" method="get">

            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome"><br>

            <label for="idade">Idade:</label><br>
            <input type="number" name="idade" id="idade"><br><br>

            <input type="submit" value="Enviar">
        </form>    
    </div>    
</body>
</html>