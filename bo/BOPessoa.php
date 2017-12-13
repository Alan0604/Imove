<?php
    require_once ('./dto/DTOPessoa.php');
    require_once ('./dao/DAOPessoa.php');

/**
 * Description of BOPessoa
 *
 * @author Alan
 */
class BOPessoa {
    public function __construct(){}

    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método usado para salvar os dados no banco.
     * @data: 08/11/2017.
     * @alterada em: 14/11/17, 17/11/17, dd/mm/aaaa, etc.
     * @alterada por: Alan.
     */
    public function salvarPessoa($dtoUsu){
        $usuId = '';
        $daoUsu = new DAOPessoa();
        $nrReg = $daoUsu->salvarPessoa($dtoUsu);
        if($nrReg>0){
            $usuOBJ = $daoUsu->buscarPessoaPorEmailDocNome($dtoUsu->getPes_nome(), $dtoUsu->getPes_rg(),
                        $dtoUsu->getPes_cpf(), $dtoUsu->getPes_email());
            $usuId = $usuOBJ->pes_id;
        }
        return $usuId;
    }
    
    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para criar um objeto DTO a partir de um array.
     * @data: 08/11/2017.
     * @alterada em: 14/11/17, 17/11/17, 29/11/17, etc.
     * @alterada por: Alan.
     */
    public function arrayParaDTOPessoa($arrayUsu){
        $dtoUsu = new DTOPessoa();
        $dtoUsu->setPes_nome($arrayUsu["nome"]);
        $dtoUsu->setPes_email($arrayUsu["email"]);
        $dtoUsu->setPes_rg($arrayUsu["rg"]);
        $dtoUsu->setPes_cpf($arrayUsu["cpf"]);
        $dtoUsu->setPes_telefone($arrayUsu["telefone"]);
        $dtoUsu->setPes_genero($arrayUsu["genero"]);
        
        return $dtoUsu;
    }
    
    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para buscar os dados de um usuário através do id.
     *             Retorna um objeto enquete do banco.
     * @data: 17/11/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function buscarPessoaPorId($usuId){
        $daoUsu = new DAOPessoa();
        $objUsu = $daoUsu->buscarPessoaPorId($usuId);
        return $objUsu;
    }
    
    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para editar usuário.
     * @data: 17/11/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function editarPessoa($usuId){
        $daoUsu = new DAOPessoa();
        $objUsu = $daoUsu->editarPessoa($usuId);
        return $objUsu;
    }
    
    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para excluir um usuário.
     * @data: 17/11/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function excluirPessoa($usuId){
        $daoUsu = new DAOPessoa();
        $objUsu = $daoUsu->excluirPessoa($usuId);
        return $objUsu;
    }
    
    

    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para buscar N usuários, para paginação.
     *             Retorno uma lista de objetos pessoas do banco.
     * @data: 08/11/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function listarPessoa($apartir, $quantidade){
        $this->daoUsu = new DAOPessoa();
        return $this->daoUsu->listarPessoa($apartir, $quantidade);
    }
}
