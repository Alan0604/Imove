<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DTOPessoa
 *
 * @author Alan
 */
class DTOPessoa {
    private $pes_id;
    private $pes_nome;
    private $pes_email;
    private $pes_rg;
    private $pes_cpf;
    private $pes_telefone;
    private $pes_genero;
    private $pes_timestamp;
    
    function getPes_timestamp() {
        return $this->pes_timestamp;
    }

    function setPes_timestamp($pes_timestamp) {
        $this->pes_timestamp = $pes_timestamp;
    }

    function getPes_rg() {
        return $this->pes_rg;
    }
    
    function getPes_cpf() {
        return $this->pes_cpf;
    }

    function getPes_telefone() {
        return $this->pes_telefone;
    }

    function getPes_genero() {
        return $this->pes_genero;
    }

    function setPes_rg($pes_rg) {
        $this->pes_rg = $pes_rg;
    }

    function setPes_cpf($pes_cpf) {
        $this->pes_cpf = $pes_cpf;
    }
    
    function setPes_cep($pes_cep) {
        $this->pes_cep = $pes_cep;
    }

    function setPes_telefone($pes_telefone) {
        $this->pes_telefone = $pes_telefone;
    }

    function setPes_genero($pes_genero) {
        $this->pes_genero = $pes_genero;
    }

    function getPes_id() {
        return $this->pes_id;
    }

    function getPes_nome() {
        return $this->pes_nome;
    }

    function getPes_email() {
        return $this->pes_email;
    }

    function setPes_id($pes_id) {
        $this->pes_id = $pes_id;
    }

    function setPes_nome($pes_nome) {
        $this->pes_nome = $pes_nome;
    }

    function setPes_email($pes_email) {
        $this->pes_email = $pes_email;
    }
}
