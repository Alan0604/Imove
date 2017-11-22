<?php
require_once ('../dao/Conexao.php');
require_once ('../dto/DTOImovel.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAOImovel
 *
 * @author Felipe Nazário
 */
class DAOImovel {
    public function salvarImovel($DTOImo){
        $sql = 'INSERT INTO imovel (imo_endereco, imo_cidade, imo_bairro, imo_numCasa, imo_descricao) VALUES(:ENDERECO, '
                . ':CIDADE, :BAIRRO, :NUM, :DESCRICAO)';
       
        $pstmt = Conexao::getInstance()->prepare($sql);
        //$pstmt->bindValue(':USUID', "5", PDO::PARAM_INT);
        $pstmt->bindValue(':ENDERECO', $DTOImo->getImo_endereco(), PDO::PARAM_STR);
        $pstmt->bindValue(':CIDADE', $DTOImo->getImo_cidade(), PDO::PARAM_STR);
        $pstmt->bindValue(':BAIRRO', $DTOImo->getImo_bairro(), PDO::PARAM_STR);
        $pstmt->bindValue(':NUM', $DTOImo->getImo_numero(), PDO::PARAM_INT);
        $pstmt->bindValue(':DESCRICAO', $DTOImo->getImo_descricao(), PDO::PARAM_STR);
        $pstmt->execute();
        
        echo($pstmt->rowCount());
        return $pstmt->rowCount();
    }
}
