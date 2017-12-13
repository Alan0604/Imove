<?php
    require_once ('bo/BOPessoa.php');
    require_once ('bo/BOUsuario.php');
    require_once ('dto/DTOUsuario.php');
/**
 * Description of CPessoa
 *
 * @author ALAN
 */
class CPessoa {
    function __construct() {
        $processo = filter_input(INPUT_POST, 'processo') ? filter_var($_POST['processo'], FILTER_SANITIZE_STRING) : "";
        $processo = empty($processo) && filter_input(INPUT_GET, 'processo') ? filter_var($_GET['processo'], FILTER_SANITIZE_STRING) : $processo;
        
        switch ($processo){
            case 'criar':{
                $nome = filter_input(INPUT_POST, 'nome') ? filter_var($_POST['nome'], FILTER_SANITIZE_STRING) : "";
                $genero = filter_input(INPUT_POST, 'genero') ? filter_var($_POST['genero'], FILTER_SANITIZE_STRING) : "";
                $rg = filter_input(INPUT_POST, 'rg') ? filter_var($_POST['rg'], FILTER_SANITIZE_STRING) : "";
                $cpf = filter_input(INPUT_POST, 'cpf') ? filter_var($_POST['cpf'], FILTER_SANITIZE_STRING) : "";
                $email = filter_input(INPUT_POST, 'email') ? filter_var($_POST['email'], FILTER_SANITIZE_STRING) : "";
                $telefone = filter_input(INPUT_POST, 'telefone') ? filter_var($_POST['telefone'], FILTER_SANITIZE_STRING) : "";
                $usuario = filter_input(INPUT_POST, 'usuario') ? filter_var($_POST['usuario'], FILTER_SANITIZE_STRING) : "";
                $senha = filter_input(INPUT_POST, 'senha') ? filter_var($_POST['senha'], FILTER_SANITIZE_STRING) : "";
                
                if(!empty($nome) && !empty($genero) && !empty($rg) && !empty($cpf) && !empty($email) && !empty($telefone)){
                    $boPes = new BOPessoa(NULL);
                    $dtoPes = $boPes->arrayParaDTOPessoa($_POST);
                    $idPes = $boPes->salvarPessoa($dtoPes);
                    if(!empty($usuario) && !empty($senha)){
                        $boUsu = new BOUsuario();
                        $dtoUsu = $boUsu->arrayParaDTOUsuario($_POST);
                        //$dtoUsu->setPes_id($idPes);
                        $boUsu->salvarUsuario($dtoUsu);
                    }
                }

                header('Location: usuarios.php');

                break;
            }
            
            case 'editar':{
                $boUsu = new BOPessoa();
                $usuId = isset($_GET['pes']) && !empty($_GET['pes']) ? $_GET['pes'] : 0;
                if($usuId > 0){
                    $jsonDados = $boUsu->buscarPessoaPorId($usuId);
                    //$jsonDados = json_decode($jsonDados, true);
                    var_dump($jsonDados);
                    //unset($jsonDados["pes_senha"]);
                    $jsonDados = json_encode($jsonDados);
                    
                    $dados = str_replace("\"", "aspas", $jsonDados);
                    include_once("usuarios.php");
                }
                
                break;
            }
            
            case 'excluir':{
                $excluiu = 0;
                $usuId = isset($_GET['pes']) && !empty($_GET['pes']) ? $_GET['pes'] : 0;
                if($usuId > 0){
                    $boUsu = new BOPessoa(NULL);
                    $excluiu = $boUsu->excluirPessoa($usuId);
                }
                header("Location: usuarios.php");
                break;
            }

            default :{
                $boUsu = new BOPessoa();
                $listarUsu = $boUsu->listarPessoa(0, 10);
                $linhasTabela = $this->montarLinhasTabelaPessoa($listarUsu);
                echo($linhasTabela);
            }
        }
    }
    
    private function montarLinhasTabelaPessoa($listarUsu){
        $linhasTabela = "";
        foreach ($listarUsu as $pes){
            //Criação da linha da tabela
            $linhasTabela .= "<tr>";
            $linhasTabela .= "<td>:NOME</td>";
            $linhasTabela .= "<td>:GENERO</td>";
            $linhasTabela .= "<td>:RG</td>";
            $linhasTabela .= "<td>:CPF</td>";
            $linhasTabela .= "<td>:EMAIL</td>";
            $linhasTabela .= "<td>:TELEFONE</td>";
            $linhasTabela .= "<td>:LKEDITAR | " .
                                 ":LKEXCLUIR</td>";
            $linhasTabela .= "</tr>";
            //Preenchimento da linha criada com os dados do BD
            $lkeditar = "<a href=\"CPessoa.php?processo=editar&pes=:PESID\">Editar</a>";
            $lkeditar = str_replace(":PESID", $pes['pes_id'], $lkeditar);
            $lkexcluir = "<a href=\"CPessoa.php?processo=excluir&pes=:PESID\">Excluir</a>";
            $lkexcluir = str_replace(":PESID", $pes['pes_id'], $lkexcluir);
            
            $linhasTabela = str_replace(":NOME", $pes['pes_nome'], $linhasTabela);
            $linhasTabela = str_replace(":GENERO", $pes['pes_genero'], $linhasTabela);
            $linhasTabela = str_replace(":RG", $pes['pes_rg'], $linhasTabela);
            $linhasTabela = str_replace(":CPF", $pes['pes_cpf'], $linhasTabela);
            $linhasTabela = str_replace(":EMAIL", $pes['pes_email'], $linhasTabela);
            $linhasTabela = str_replace(":TELEFONE", $pes['pes_telefone'], $linhasTabela);
            $linhasTabela = str_replace(":LKEDITAR", $lkeditar, $linhasTabela);
            $linhasTabela = str_replace(":LKEXCLUIR", $lkexcluir, $linhasTabela);
        }
        return $linhasTabela;
    }
}
$CUsuario = new CPessoa();