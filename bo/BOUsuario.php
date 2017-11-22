<?php
    require_once ('../dto/DTOUsuario.php');
    require_once ('../dao/DAOUsuario.php');

/**
 * Description of BOUsuario
 *
 * @author Alan
 */
class BOUsuario {
    private $usuId;
    
    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método usado para salvar os dados no banco.
     * @data: 08/11/2017.
     * @alterada em: 14/11/17, 17/11/17, dd/mm/aaaa, etc.
     * @alterada por: Alan.
     */
    public function salvarUsuario($dtoUsu){
        $usuId = 0;
        $daoUsu = new DAOUsuario();
        $nrReg = $daoUsu->salvarUsuario($dtoUsu);
        if($nrReg>0){
            $usuOBJ = $daoUsu->buscarUsuarioPorId($dtoUsu->getPes_id());
            $usuId = $usuOBJ->pes_id;
        }
        return $usuId;
    }
    
    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para criar um objeto DTO a partir de um array.
     * @data: 08/11/2017.
     * @alterada em: 14/11/17, 17/11/17, dd/mm/aaaa, etc.
     * @alterada por: Alan.
     */
    public function arrayParaDTOUsuario($arrayUsu){
        $dtoUsu = new DTOUsuario();
        $dtoUsu->setPes_nome($arrayUsu["nome"]);
        $dtoUsu->setPes_email($arrayUsu["email"]);
        $dtoUsu->setPes_bairro($arrayUsu["bairro"]);
        $dtoUsu->setPes_cidade($arrayUsu["cidade"]);
        $dtoUsu->setPes_cpf($arrayUsu["cpf"]);
        $dtoUsu->setPes_cep($arrayUsu["cep"]);
        $dtoUsu->setPes_senha($arrayUsu["senha"]);
        $dtoUsu->setPes_telefone($arrayUsu["telefone"]);
        $dtoUsu->setPes_genero($arrayUsu["genero"]);
        $dtoUsu->setPes_endereco($arrayUsu["endereco"]);
        
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
    public function buscarUsuarioPorId($usuId){
        $daoUsu = new DAOUsuario();
        $objUsu = $daoUsu->buscarUsuarioPorId($usuId);
        return $objUsu;
    }
    
    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para editar usuário.
     * @data: 17/11/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function editarUsuario($usuId){
        $daoUsu = new DAOUsuario();
        $objUsu = $daoUsu->editarUsuario($usuId);
        return $objUsu;
    }
    
    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para excluir um usuário.
     * @data: 17/11/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function excluirUsuario($usuId){
        $daoUsu = new DAOUsuario();
        $objUsu = $daoUsu->excluirUsuario($usuId);
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
    public function listarUsuarios($apartir, $quantidade){
        $this->daoUsu = new DAOUsuario();
        return $this->daoUsu->listarUsuarios($apartir, $quantidade);
    }
}
