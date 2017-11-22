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
    private $imo_numero;
    private $imo_endereco;
    private $imo_bairro;
    private $imo_cidade;
    private $imo_descricao;
    
    function getImo_descricao() {
        return $this->imo_descricao;
    }

    function setImo_descricao($imo_descricao) {
        $this->imo_descricao = $imo_descricao;
    }
    
    function getImo_id() {
        return $this->imo_id;
    }

    function setImo_id($imo_id) {
        $this->imo_id = $imo_id;
    }

        function getImo_numero() {
        return $this->imo_numero;
    }

    function getImo_endereco() {
        return $this->imo_endereco;
    }

    function getImo_bairro() {
        return $this->imo_bairro;
    }

    function getImo_cidade() {
        return $this->imo_cidade;
    }

    function setImo_numero($imo_numero) {
        $this->imo_numero = $imo_numero;
    }

    function setImo_endereco($imo_endereco) {
        $this->imo_endereco = $imo_endereco;
    }

    function setImo_bairro($imo_bairro) {
        $this->imo_bairro = $imo_bairro;
    }

    function setImo_cidade($imo_cidade) {
        $this->imo_cidade = $imo_cidade;
    }


    
}
