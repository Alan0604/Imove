<?php
require_once('bo/BOLogin.php');


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
                        $_SESSION["usu_id"] = $logDTO->getUsu_id();
                        header('Location: ../index.php');
                    }    
                }
                    header('Location: index.php');
                break;
            }
            case 'lembrarme':{
                $email = filter_input(INPUT_GET, 'email') ? filter_var($_GET['email'], FILTER_SANITIZE_STRING): '';
                echo("$email");
                setcookie("email", $email, time()+(365*24*60*60));
                
                break;
            }
            case 'naolembrar':{
                    
                    setcookie("email", "", 0);
                
                break;
            } 
            default:{
                if(@$_COOKIE['email']){
                    $emailcok=$_COOKIE['email'];
                }
                include_once("login.php");
                
            }
        }
    
        
            
        //var_dump($_POST);
    }
    
    
}

$login = new CLogin();