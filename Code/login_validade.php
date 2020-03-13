<?php

    session_start();
    //$_POST['email'];
   // $_POST['senha'];
    $validar_user = false;

    $list_user = [
        ['email' => 'tamera.tlgm@hotmail.com', 'senha' => '12345'],
        ['email' => 'tameratlgm@gmail.com', 'senha' => '12345']
    ];

    foreach($list_user as $user){   

            if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ){
                    $validar_user = true;
            } 
        
    }

    if($validar_user){
        echo'Usuário autenticado';
        $_SESSION['autenticado']= 'SIM';
    }else{
        header('Location: index.php?login=erro');
        $_SESSION['autenticado']= 'NAO';
    }   

        
?>