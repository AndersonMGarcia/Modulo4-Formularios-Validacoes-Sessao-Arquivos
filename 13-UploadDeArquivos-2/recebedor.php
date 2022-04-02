<?php
    echo '<pre>';
    print_r($_FILES);
    
    $tipos_permitidos = ['image/jpeg', 'image/jpg', 'image/png'];

    if (in_array($_FILES['arquivo']['type'], $tipos_permitidos)){
        
        $nome = md5(time().rand(0,1000)).'.jpg';
        move_uploaded_file($_FILES['arquivo'] ['tmp_name'], 'arquivos/'.$nome);
        
        echo 'Arquivo salvo com sucesso!';
        
    }else{
        echo 'Arquivo não permitido!';
    }

    