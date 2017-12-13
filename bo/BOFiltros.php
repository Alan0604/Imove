<?php
include_once('./dao/DAOFiltros.php');
/**
 * Description of BOFiltros
 *
 * @author Bruno Henrique
 */
class BOFiltros {
    public function filtrarImoveis($postParam){
        $daoFiltro = new DAOFiltros();
        $arrayFiltro = $daoFiltro->filtrarImoveis($postParam);
        //return $arrayFiltro;
    }
    
}
