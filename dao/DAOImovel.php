<?php
require_once ('./dao/Conexao.php');
require_once ('./dto/DTOImovel.php');
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
        $sql = 'INSERT INTO imoveis (pes_id, imo_descricao, imo_preco, imo_tipo, end_id, imo_status) '
                . 'VALUES(:USUID, :DESCRICAO, :PRECO, :TIPO, :ENDID, :STATUS)';
        /*echo '<pre>';
        var_dump($DTOImo);
        echo '</pre>';*/
        $pstmt = Conexao::getInstance()->prepare($sql);
        $pstmt->bindValue(':USUID', $DTOImo->getPes_id(), PDO::PARAM_INT);
        $pstmt->bindValue(':DESCRICAO', $DTOImo->getImo_descricao(), PDO::PARAM_STR);
        $pstmt->bindValue(':PRECO', $DTOImo->getImo_preco(), PDO::PARAM_INT);
        $pstmt->bindValue(':TIPO', $DTOImo->getImo_tipo(), PDO::PARAM_STR);
        $pstmt->bindValue(':ENDID', $DTOImo->getEnd_id(), PDO::PARAM_INT);
        $pstmt->bindValue(':STATUS', 1, PDO::PARAM_INT);
        $pstmt->execute();
        
        echo($pstmt->rowCount());
        return $pstmt->rowCount();
    }
    public function buscarImovelDescricao($descricao){
        $sql = ('SELECT imo_id FROM imoveis WHERE :DESCRICAO');
        $pstmt = Conexao::getInstance()->prepare($sql);
        $pstmt->bindValue(':DESCRICAO', $descricao, PDO::PARAM_STR);
        
    }
}
