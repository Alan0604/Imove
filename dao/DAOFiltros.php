<?php

require_once 'Conexao.php';
require_once ('./dto/DTOImovel.php');
/**
 * Description of DAOFiltros
 *
 * @author Bruno Henrique
 */
class DAOFiltros {
    public function filtrarImoveis($postParam){
        $operadorE = '';
        $filtros = '';
        $sql = ("SELECT * FROM imovel");
        if(count($postParam)>0){
            $filtros = ' WHERE ';
            foreach($postParam as $param => $valor){
                $filtros .= $operadorE;
                $filtros .= 'car_' . $param . '=' . ($valor=='on' ? 1 : $valor);
                $operadorE = ' AND ';
            }
        }
        $sql .= $filtros;
        echo("FILTROS: " . $sql);
        /*
        if ($preco){
            $filtros = (" WHERE imo_preco <= :PRECO");
        }
        if($bairro != "selecionar"){
            $filtros .= empty($filtros) ? ' WHERE ' : ' AND ';
            $filtros .= ("imo_bairro=:BAIRRO");
        }
        $sql .= $filtros;
        
        $pstmt = Conexao::getInstance()->prepare($sql);
        $pstmt->bindValue(':PRECO', $preco, PDO::PARAM_INT);
        $pstmt->bindValue(':BAIRRO', $bairro, PDO::PARAM_STR);
        $pstmt->execute();
        return $pstmt->fetchAll(PDO::FETCH_ASSOC);*/
    }
    
    public function listarImoveis($apartir, $quantidade){
            $sql = 'SELECT * FROM imoveis LIMIT :inicio, :quant';
            $pstmt = Conexao::getInstance()->prepare($sql);
            $pstmt->bindValue(':inicio', $apartir, PDO::PARAM_INT);
            $pstmt->bindValue(':quant', $quantidade, PDO::PARAM_INT);
            $pstmt->execute();
            
            return $pstmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
