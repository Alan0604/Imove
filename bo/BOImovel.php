<?php

    require_once ('../dto/DTOImovel.php');
    require_once ('../dao/DAOImovel.php');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BOImovel
 *
 * @author Felipe Nazário
 */
class BOImovel {
    
    public function salvarImovel($dtoimovel){
        $daoImo = new DAOImovel();
        $daoImo->salvarImovel($dtoimovel);
    }
    
    public function arrayToDTOImovel($arrayImo){
        
        $dtoimovel = new DTOImovel();
        
        $dtoimovel->setImo_numero($arrayImo['numero']);
        $dtoimovel->setImo_endereco($arrayImo['endereco']);
        $dtoimovel->setImo_bairro($arrayImo['bairro']);
        $dtoimovel->setImo_cidade($arrayImo['cidade']);
        $dtoimovel->setImo_descricao($arrayImo['descricao']);
        
        return $dtoimovel;
        
    }
    
    
}
