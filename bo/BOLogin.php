<?php
require_once ('./dao/DAOLogin.php');
require_once ('./dto/DTOLogin.php');

class BOLogin {
    public function arrayToDTOLogin($arrayLog){
        $logDTO = new DTOLogin();
        $logDTO->setUsu_email($arrayLog['email']);
        $logDTO->setUsu_senha($arrayLog['senha']);
        return $logDTO;
    }
    
    public function verificarUsuarioParaLogin($logDTO){
        $logDAO = new DAOLogin();
        $qntRetorno = $logDAO->verificarUsuarioParaLogin($logDTO);
        return $qntRetorno;
    }

}
