<?php
    
    //Inicindo sessão para validar acesso do usuário 
    session_start();

    //
    $validar_user = false;

    $list_user = [
        ['email' => 'tamera.tlgm@hotmail.com', 'senha' => '12345'],
        ['email' => 'tameratlgm@gmail.com', 'senha' => '12345']
    ];


    function validarAcesso($list_user){
        foreach($list_user as $user){   

                if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ){
                        return true;
                } 
            
        }
        return false;
    }

    if(validarAcesso($list_user)){
        //echo'Usuário autenticado';
        $_SESSION['autenticado']= 'SIM';
        header('Location: home.php');
    }else{
        header('Location: index.php?login=erro');
        $_SESSION['autenticado']= 'NAO';
    }   

        
?>