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
    private $usu_nome;
    private $usu_senha;
    private $usu_status;
    function getUsu_nome() {
        return $this->usu_nome;
    }

    function getUsu_senha() {
        return $this->usu_senha;
    }

    function getUsu_status() {
        return $this->usu_status;
    }

    function setUsu_nome($usu_nome) {
        $this->usu_nome = $usu_nome;
    }

    function setUsu_senha($usu_senha) {
        $this->usu_senha = $usu_senha;
    }

    function setUsu_status($usu_status) {
        $this->usu_status = $usu_status;
    }
}