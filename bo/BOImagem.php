<?php

/**
 * Description of BOImagem
 *
 * @author Bruno Henrique
 */
class BOImagem {
    
    public function arrayToDTOImagem($arrayImg){
        
        $dtoimg = new DTOImgagem();
        
        $dtoimg->setImg_nome($arrayImg['nome']);
        
        return $dtoimg;
        
    }
}
