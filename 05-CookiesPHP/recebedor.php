<?php
    session_start();
    require_once 'header.php';
?>


    <div>
        <?php
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

            if ($nome && $email && $idade){
                
                $expiracao = time() + (86400 * 30);
                setcookie('nome', $nome, $expiracao);

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