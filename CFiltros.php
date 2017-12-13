<?php
include_once('bo/BOFiltros.php');
include_once('bo/BOImovel.php');
/**
 * Description of CFiltros
 *
 * @author Bruno Henrique
 */
class CFiltros {
    function __construct() {
        $processo = filter_input(INPUT_POST, 'processo') ? filter_var($_POST['processo'], FILTER_SANITIZE_STRING) : "";
        $processo = empty($processo) && filter_input(INPUT_GET, 'processo') ? filter_var($_GET['processo'], FILTER_SANITIZE_STRING) : $processo;
                
        switch ($processo){
            case 'filtrar':{
                $bofiltros = new BOFiltros();
                unset($_POST["processo"]); //remover a chave processo do array
                $dados = json_encode($_POST);
                $dados = str_replace("\"", "aspas", $dados);
                $listarImoveis = $bofiltros->filtrarImoveis($_POST);
                /*$bairro = filter_input(INPUT_POST, 'bairro') ? filter_var($_POST['bairro'], FILTER_SANITIZE_STRING) : "";
                $preco = filter_input(INPUT_POST, 'preco') ? filter_var($_POST['preco'], FILTER_SANITIZE_STRING) : "";

                $boImovel = new BOImovel();
                $linhasTabela = $boImovel->montarLinhasTabelaImoveis($listarImoveis);*/
                $linhasTabela = "teste";
                include_once('index.php');
                break;
            }
            
            default:{
                $boImovel = new BOImovel();
                $listarImoveis = $boImovel->listarImoveis(0, 10);
                $linhasTabela = $boImovel->montarLinhasTabelaImoveis($listarImoveis);
                echo($linhasTabela);            
            }
        }
    }
}
$CFiltros = new CFiltros();