<?php

    session_start();

      

    // Variavel que verifica se a autenticação foi realizada
    $usuarios_autenticado = false;

    /*Usuarios do sistema*/
    $usuariosApp = array(
        array('email' => 'reginaldo@test.com.br', 'senha' => '123456'),
        array('email' => 'jose@test.com.br', 'senha' => 'abcd'),
    );

    foreach($usuariosApp as $user) { // Percore o array $usuarioApp 
        
        if($user['email'] == $_POST['email'] and $user['senha'] == $_POST['senha']) { //Verifica a autencidade do email e senha
            $usuarios_autenticado = true;
        }
    }

    if($usuarios_autenticado) {
        echo 'Usuario autenticado';
        $_SESSION['autencidado'] = 'SIM';
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('location: index.php?login=erro'); //Força o redirecionamento a pagina se email e senha estiverem errados
    }

    /*
    Usando a super global $_GET para recuperar email e senha do formulario
    print_r($_GET);

    echo '<br />';
 
    echo $_GET['email'];
    echo '<br />';
    echo $_GET['senha'];
    */
    /*Usando a super global $_POST para recuperar e email e senha do formulario
    print_r($_POST);

    echo '<br />';

    echo $_POST['email'];
    echo '<br />';
    echo $_POST['senha'];
    */
?>