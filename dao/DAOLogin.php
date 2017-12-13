<?php
require_once ('./dao/Conexao.php');
require_once ('./dto/DTOLogin.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAOLogin
 *
 * @author ALUNO
 */
class DAOLogin {
    public function verificarUsuarioParaLogin($arrayLog){
        $sql = ("SELECT * FROM usuarios WHERE usu_nome=:EMAIL and usu_senha=:SENHA ");
        $pstmt = Conexao::getInstance()->prepare($sql);
        $pstmt->bindValue(':EMAIL', $arrayLog->getUsu_email(), PDO::PARAM_INT);
        $pstmt->bindValue(':SENHA', $arrayLog->getUsu_senha(), PDO::PARAM_INT);
        $pstmt->execute();
        $pstmt->fetchAll(PDO::FETCH_ASSOC);
        return $pstmt->rowcount();
    }
}
