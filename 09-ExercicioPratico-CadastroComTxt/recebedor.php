<?php 
//session_start();
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
if($nome){
    $texto = file_get_contents('list_name.txt');
    $texto .= "\n<li>$nome</li>";
    file_put_contents('list_name.txt', $texto);
    header("Location:index.php");
    exit;
} else {
    header("Location:index.php");
    exit;
}