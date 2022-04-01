<?php
    session_start(); 
    require_once "header.php";
?>





   <a href="apagar.php">Apagar Cookie</a>
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