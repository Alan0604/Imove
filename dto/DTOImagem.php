<?php

/**
 * Description of DTOImagem
 *
 * @author Bruno Henrique
 */
class DTOImagem {
    private $img_id;
    private $img_nome;
    private $imo_id;
    
}

function getImg_id() {
    return $this->img_id;
}

 function getImg_nome() {
    return $this->img_nome;
}

 function getImo_id() {
    return $this->imo_id;
}

 function setImg_id($img_id) {
    $this->img_id = $img_id;
}

 function setImg_nome($img_nome) {
    $this->img_nome = $img_nome;
}

 function setImo_id($imo_id) {
    $this->imo_id = $imo_id;
}


