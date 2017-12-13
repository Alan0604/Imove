<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DTOImovel
 *
 * @author Felipe Nazário
 */
class DTOImovel {
    
    private $imo_id;
    private $imo_tipo;
    private $imo_descricao;
    private $imo_preco;
    private $end_id;
    private $pes_id;
    
    function getImo_id() {
        return $this->imo_id;
    }

    function getImo_tipo() {
        return $this->imo_tipo;
    }

    function getImo_descricao() {
        return $this->imo_descricao;
    }

    function getImo_preco() {
        return $this->imo_preco;
    }

    function getEnd_id() {
        return $this->end_id;
    }

    function getPes_id() {
        return $this->pes_id;
    }

    function setImo_id($imo_id) {
        $this->imo_id = $imo_id;
    }

    function setImo_tipo($imo_tipo) {
        $this->imo_tipo = $imo_tipo;
    }

    function setImo_descricao($imo_descricao) {
        $this->imo_descricao = $imo_descricao;
    }

    function setImo_preco($imo_preco) {
        $this->imo_preco = $imo_preco;
    }

    function setEnd_id($end_id) {
        $this->end_id = $end_id;
    }

    function setPes_id($pes_id) {
        $this->pes_id = $pes_id;
    }
   
}