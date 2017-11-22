<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DTOUsuario
 *
 * @author Alan
 */
class DTOUsuario {
    private $pes_id;
    private $pes_nome;
    private $pes_email;
    private $pes_endereco;
    private $pes_cidade;
    private $pes_senha;
    private $pes_cpf;
    private $pes_cep;
    private $pes_telefone;
    private $pes_genero;
    private $pes_bairro;
    
    function getPes_endereco() {
        return $this->pes_endereco;
    }

    function getPes_cidade() {
        return $this->pes_cidade;
    }

    function getPes_senha() {
        return $this->pes_senha;
    }

    function getPes_cpf() {
        return $this->pes_cpf;
    }

    function getPes_cep() {
        return $this->pes_cep;
    }

    function getPes_telefone() {
        return $this->pes_telefone;
    }

    function getPes_genero() {
        return $this->pes_genero;
    }

    function getPes_bairro() {
        return $this->pes_bairro;
    }

    function setPes_endereco($pes_endereco) {
        $this->pes_endereco = $pes_endereco;
    }

    function setPes_cidade($pes_cidade) {
        $this->pes_cidade = $pes_cidade;
    }

    function setPes_senha($pes_senha) {
        $this->pes_senha = $pes_senha;
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

    function setPes_bairro($pes_bairro) {
        $this->pes_bairro = $pes_bairro;
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
