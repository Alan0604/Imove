<?php
require_once('../bo/BOLogin.php');

class CLogin {
    function __construct() {
        $processo = filter_input(INPUT_POST, 'processo') ? filter_var($_POST['processo'], FILTER_SANITIZE_STRING): '';
        $processo = empty($processo) && filter_input(INPUT_GET, 'processo') ? filter_var($_GET['processo'], FILTER_SANITIZE_STRING): $processo;
        
        switch ($processo){
            case 'logar':{
                
                $email = filter_input(INPUT_POST, 'email') ? filter_var($_POST['email'], FILTER_SANITIZE_STRING): '';
                $senha = filter_input(INPUT_POST, 'senha') ? filter_var($_POST['senha'], FILTER_SANITIZE_STRING): '';
                echo("<pre>");
                var_dump($_POST);
                echo("</pre>");
                if(!empty($email) && !empty($senha)){
                    $login = new BOLogin();
                    $logDTO = $login->arrayToDTOLogin($_POST);                           
                    $qntRetorno = $login->verificarUsuarioParaLogin($logDTO);
                    
                    if($qntRetorno == 1){
                        session_start();
                        $_SESSION["usu_email"] = $logDTO->getUsu_email();
                        header('Location: ../index.php');
                    }    
                }else{
                    header('Location: ../login.php');
                }
                    header('Location: ../login.php');
                break;
            }    
        }
    
        
            
        //var_dump($_POST);
    }
    
    
}

$login = new CLogin();