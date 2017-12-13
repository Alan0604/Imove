<?php
    require_once ('bo/BOUsuario.php');
    require_once ('bo/BOImovel.php');
    require_once ('bo/BOLogradouro.php');
    require_once ('bo/BOCidade.php');
    require_once ('bo/BOendereco.php');
    require_once ('DTO/DTOEndereco.php');
    

//Felipe Nazario
class CImovel {
    
    function __construct() {
        $processo = filter_input(INPUT_POST, 'processo') ? filter_var($_POST['processo'], FILTER_SANITIZE_STRING) : "";
        $processo = empty($processo) && filter_input(INPUT_GET, 'processo') ? filter_var($_GET['processo'], FILTER_SANITIZE_STRING) : $processo;
        
        switch ($processo){
            case 'criar':{
                $usuarioSessao = isset($_SESSION['usu_email']) ? $_SESSION['usu_email'] : NULL;
                
                //if($usuarioSessao != NULL){
                    $numero = filter_input(INPUT_POST, 'numero') ? filter_var($_POST['numero'], FILTER_SANITIZE_STRING) : "";
                    $endereco = filter_input(INPUT_POST, 'endereco') ? filter_var($_POST['endereco'], FILTER_SANITIZE_STRING) : "";
                    $bairro = filter_input(INPUT_POST, 'bairro') ? filter_var($_POST['bairro'], FILTER_SANITIZE_STRING) : "";
                    $cidade = filter_input(INPUT_POST, 'cidade') ? filter_var($_POST['cidade'], FILTER_SANITIZE_STRING) : "";
                    $descricao = filter_input(INPUT_POST, 'descricao') ? filter_var($_POST['descricao'], FILTER_SANITIZE_STRING) : "";
                    $preco = filter_input(INPUT_POST, 'preco') ? filter_var($_POST['preco'], FILTER_SANITIZE_STRING) : "";
                    $tipo = filter_input(INPUT_POST, 'tipo') ? filter_var($_POST['tipo'], FILTER_SANITIZE_STRING) : "";
                    $quartos = filter_input(INPUT_POST, 'quartos') ? filter_var($_POST['quartos'], FILTER_SANITIZE_STRING) : "";
                    $cozinhas = filter_input(INPUT_POST, 'cozinhas') ? filter_var($_POST['cozinhas'], FILTER_SANITIZE_STRING) : "";
                    $salasestar = filter_input(INPUT_POST, 'salasestar') ? filter_var($_POST['salasestar'], FILTER_SANITIZE_STRING) : "";
                    $banheiros = filter_input(INPUT_POST, 'banheiros') ? filter_var($_POST['banheiros'], FILTER_SANITIZE_STRING) : "";
                    $suites = filter_input(INPUT_POST, 'suites') ? filter_var($_POST['suites'], FILTER_SANITIZE_STRING) : "";
                    $churrasqueiras = filter_input(INPUT_POST, 'churrasqueiras') ? filter_var($_POST['churrasqueiras'], FILTER_SANITIZE_STRING) : "";
                    $jardins = filter_input(INPUT_POST, 'jardins') ? filter_var($_POST['jardins'], FILTER_SANITIZE_STRING) : "";
                    $dispensas = filter_input(INPUT_POST, 'dispensas') ? filter_var($_POST['dispensas'], FILTER_SANITIZE_STRING) : "";
                    $salastv = filter_input(INPUT_POST, 'salastv') ? filter_var($_POST['salastv'], FILTER_SANITIZE_STRING) : "";
                    $escritorios = filter_input(INPUT_POST, 'escritorios') ? filter_var($_POST['escritorios'], FILTER_SANITIZE_STRING) : "";
                    $empregadas = filter_input(INPUT_POST, 'empregadas') ? filter_var($_POST['empregadas'], FILTER_SANITIZE_STRING) : "";
                    $porao = filter_input(INPUT_POST, 'porao') ? filter_var($_POST['porao'], FILTER_SANITIZE_STRING) : "";
                    $piscinas = filter_input(INPUT_POST, 'piscinas') ? filter_var($_POST['piscinas'], FILTER_SANITIZE_STRING) : "";
                    $estado = filter_input(INPUT_POST, 'estado') ? filter_var($_POST['estado'], FILTER_SANITIZE_STRING) : "";
                    $cep = filter_input(INPUT_POST, 'cep') ? filter_var($_POST['cep'], FILTER_SANITIZE_STRING) : "";
                    require_once('uploadIMG.php');
                    if(!empty($numero) && !empty($endereco) && !empty($bairro) && !empty($cidade) && !empty($descricao) && !empty($preco)
                            && !empty($tipo) && !empty($quartos) && !empty($estado) && !empty($cep)){
                        //Salvar dados de cidade
                        $boCid = new BOCidade($_POST);
                        $dtoCid = $boCid->arrayToObjCidade($_POST);
                        $cidId = $boCid->salvarDadosCidade($dtoCid);

                        //Salvar dados de logradouro
                        $boLog = new BOLogradouro($_POST);
                        $dtoLog = $boLog->arrayToObjLogradouro($_POST);
                        $logId = $boLog->salvarDadosLogradouro($dtoLog);

                        //salvar dados do endereco
                        $boEnd = new BOEndereco($_POST);
                        $boEnd->endDTO->setLog($logId);
                        $endId = $boEnd->salvarDadosEndereco();

                        $boUsu = new BOUsuario();
                        $usuId = $boUsu->buscarUsuarioLogado($usuarioSessao); //pode ter logado pelo usuario e pelo email
                        $boimovel = new BOImovel();
                        $dtoimovel = $boimovel->arrayToDTOImovel($_POST);
                        $dtoimovel->setPes_id($usuId);
                        $dtoimovel->setEnd_id($endId);

                        $boimovel->salvarImovel($dtoimovel);
                        $imo_id = $boimovel->buscarImovelDescricao($descricao);

                        //$boImg = new BOImagem();
                        //ajustar o cadastro da imagem

                        require_once('uploadIMG.php');
                    }
                
                header('Location: index.php');    
                //}   
                
                break;
            }
            default :{
                $boImo = new BOImovel();
                $listaImo = $boImo->listarImoveis(0, 10);
                $linhasTabela = $boImo->montarLinhasTabelaImoveis($listaImo);
                echo($linhasTabela);
            }
        }
    }
}

$imoveis = new CImovel();
