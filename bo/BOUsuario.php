<?php
    require_once ('./dto/DTOUsuario.php');
    require_once ('./dao/DAOUsuario.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BOUsuario
 *
 * @author Alan
 */
class BOUsuario {
    private $usuId;
    
    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para criar um objeto DTO a partir de um array.
     * @data: 29/11/2017.
     * @alterada em: 
     * @alterada por:
     */
    public function arrayParaDTOUsuario($arrayUsu){
        $dtoUsu = new DTOUsuario();
        $dtoUsu->setUsu_nome($arrayUsu["usuario"]);
        $dtoUsu->setUsu_senha($arrayUsu["senha"]);
        $dtoUsu->setUsu_status($arrayUsu["status"]);
        return $dtoUsu;
    }
    
    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método usado para salvar os dados no banco.
     * @data: 08/11/2017.
     * @alterada em: 14/11/17, 17/11/17, dd/mm/aaaa, etc.
     * @alterada por: Alan.
     */
    public function salvarUsuario($dtoUsu){
        $usuId = 0;
        $daoUsu = new DAOUsuario();
        $nrReg = $daoUsu->salvarUsuario($dtoUsu);
        if($nrReg>0){
            $usuOBJ = $daoUsu->buscarUsuarioPorNome($dtoUsu->getPes_nome());
            $usuId = $usuOBJ->pes_id;
        }
        return $usuId;
    }
    
    public function buscarUsuarioLogado($email){
        $daoUsu = new DAOUsuario();
        $nrReg = $daoUsu->buscarUsuarioLogado($email);
        if($nrReg>0){
            $usuOBJ = $daoUsu->buscarUsuarioLogado($email);
            $usuId = $usuOBJ->pes_id;
        }
        $usuId = $usuId ?? 1;
        return $usuId;
    }
}
