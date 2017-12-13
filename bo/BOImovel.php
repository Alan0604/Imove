<?php

    require_once ('./dto/DTOImovel.php');
    require_once ('./dao/DAOImovel.php');
    require_once ('./dao/DAOFiltros.php');

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
    public function buscarImovelDescricao($descricao){
        $daoImovel = new DAOImovel();
        $daoImovel->buscarImovelDescricao($descricao);
        
    }

    public function arrayToDTOImovel($arrayImo){
        
        $dtoimovel = new DTOImovel();
        
        $dtoimovel->setImo_tipo($arrayImo['tipo']);
        $dtoimovel->setImo_preco($arrayImo['preco']);
        $dtoimovel->setImo_descricao($arrayImo['descricao']);
        
        return $dtoimovel;
        
    }
    
    public function listarImoveis($apartir, $quantidade){
        $this->daoUsu = new DAOFiltros();
        return $this->daoUsu->listarImoveis($apartir, $quantidade);
    }
    
    public function montarLinhasTabelaImoveis($listarImo){
        $linhasTabela = "";
        foreach ($listarImo as $pes){
            //Criação da linha da tabela
            $linhasTabela .= "<tr>";
            $linhasTabela .= "<td>:NÚMERO</td>";
            $linhasTabela .= "<td>:DONO</td>";
            $linhasTabela .= "<td>:ENDERECO</td>";
            $linhasTabela .= "<td>:BAIRRO</td>";
            $linhasTabela .= "<td>:CIDADE</td>";
            $linhasTabela .= "<td>:VALOR</td>";
            $linhasTabela .= "<td>:LKEDITAR | " .
                                 ":LKEXCLUIR</td>";
            $linhasTabela .= "</tr>";
            //Preenchimento da linha criada com os dados do BD
            $lkeditar = "<a href=\"./CFiltros.php?processo=editar&pes=:PESID\">Editar</a>";
            $lkeditar = str_replace(":PESID", $pes['imo_id'], $lkeditar);
            $lkexcluir = "<a href=\"./CFiltros.php?processo=excluir&pes=:PESID\">Excluir</a>";
            $lkexcluir = str_replace(":PESID", $pes['imo_id'], $lkexcluir);
            
            $linhasTabela = str_replace(":NÚMERO", $pes['imo_numCasa'], $linhasTabela);
            $linhasTabela = str_replace(":DONO", $pes['pes_id'], $linhasTabela);
            $linhasTabela = str_replace(":ENDERECO", $pes['imo_endereco'], $linhasTabela);
            $linhasTabela = str_replace(":BAIRRO", $pes['imo_bairro'], $linhasTabela);
            $linhasTabela = str_replace(":CIDADE", $pes['imo_cidade'], $linhasTabela);
            $linhasTabela = str_replace(":VALOR", $pes['imo_preco'], $linhasTabela);
            $linhasTabela = str_replace(":LKEDITAR", $lkeditar, $linhasTabela);
            $linhasTabela = str_replace(":LKEXCLUIR", $lkexcluir, $linhasTabela);
        }
        return $linhasTabela;
    }
}
