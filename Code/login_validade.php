<?php
    
    //Inicindo sessão para validar acesso do usuário 
    session_start();

    //
    $validar_user = false;
    $usuario_id = null;

    $list_user = [
        ['id' => 1,'email' => 'tamera.tlgm@hotmail.com', 'senha' => '12345', 'perfil_id' => 1],
        ['id' => 2, 'email' => 'tameratlgm@gmail.com', 'senha' => '12345', 'perfil_id' => 2]
    ];


    
    foreach($list_user as $user){   

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ){
                    $validar_user = true;
                    $usuario_id = $user['id'];
                    $perfil_id = $user['perfil_id'];
            }
    }
        
    

    if($validar_user){
        //echo'Usuário autenticado';
        $_SESSION['autenticado']= 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil'] = $perfil_id;
        header('Location: home.php');
    }else{
        header('Location: index.php?login=erro');
        $_SESSION['autenticado']= 'NAO';
    }   

        
?>