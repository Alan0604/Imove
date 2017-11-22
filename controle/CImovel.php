<?php

    require_once ('../bo/BOImovel.php');

//Felipe Nazario
class CImovel {
    function __construct() {
        $processo = filter_input(INPUT_POST, 'processo') ? filter_var($_POST['processo'], FILTER_SANITIZE_STRING) : "";
        $processo = empty($processo) && filter_input(INPUT_GET, 'processo') ? filter_var($_GET['processo'], FILTER_SANITIZE_STRING) : $processo;
        
        switch ($processo){
            case 'criar':{
                $nome = filter_input(INPUT_POST, 'numero') ? filter_var($_POST['numero'], FILTER_SANITIZE_STRING) : "";
                $endereco = filter_input(INPUT_POST, 'endereco') ? filter_var($_POST['endereco'], FILTER_SANITIZE_STRING) : "";
                $bairro = filter_input(INPUT_POST, 'bairro') ? filter_var($_POST['bairro'], FILTER_SANITIZE_STRING) : "";
                $cidade = filter_input(INPUT_POST, 'cidade') ? filter_var($_POST['cidade'], FILTER_SANITIZE_STRING) : "";
                $descricao = filter_input(INPUT_POST, 'descricao') ? filter_var($_POST['descricao'], FILTER_SANITIZE_STRING) : "";
                
                if(!empty($nome) && !empty($endereco) && !empty($bairro) && !empty($cidade) && !empty($descricao)){
                    $boimovel = new BOImovel();
                    $dtoimovel = $boimovel->arrayToDTOImovel($_POST);
                    $boimovel->salvarImovel($dtoimovel);
                }   
               // header('Location: imoveis.php');
                break;
            }
        }
    }
}

$imoveis = new CImovel();