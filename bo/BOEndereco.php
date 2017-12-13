<?php 
require_once('./dto/DTOEndereco.php');
require_once('./dao/DAOEndereco.php');

require_once('BOLogradouro.php');

class BOEndereco{
    public $endDTO;
    private $endDAO;

    public function __construct($arrayEnd){
            $this->arrayToObjEndereco($arrayEnd);
    }

    public function arrayToObjEndereco($arrayEnd){
            $logBO = new BOLogradouro($arrayEnd);

            $this->endDTO = new EnderecoDTO();
            $this->endDTO->setEndId($arrayEnd['end_id'] ?? 0);
            $this->endDTO->setEndComplemento($arrayEnd['end_complemento'] ?? '');
            $this->endDTO->setEndNumero($arrayEnd['end_numero'] ?? '');
    }

    /* 
     * @autor: Denis Lucas Silva.
     * @descrição: Método responsável por preparar os dados de endereço para salvar, chamando o salvar do DAO.
     *             Retorna o id do endereço salvo.
     * @data: ~08/06/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function salvarDadosEndereco(){
        $endId = 0;
        $this->endDAO = new DAOEndereco();
        $log_id = $this->endDTO->getLog();
        $numero = $this->endDTO->getEndNumero();
        $complemento = $this->endDTO->getEndComplemento();
        $endOBJ = $this->endDAO->buscarEnderecoPorLogIdNumeroComplemento($log_id, $numero, $complemento);
        if($endOBJ==NULL){
            $nrReg = $this->endDAO->salvarDadosEndereco($this->endDTO);
            if($nrReg>0){
                $endOBJ = $this->endDAO->buscarEnderecoPorLogIdNumeroComplemento($log_id, $numero, $complemento);
                $endId = $endOBJ->end_id;
            }
        }else{
            $endId = $endOBJ->end_id;
        }
        return $endId;
    }
    
    /* 
     * @autor: Denis Lucas Silva.
     * @descrição: Método para buscar os dados de endereço de um participante através do seu id.
     *             Retorna um objeto endereco do banco.
     * @data: 22/06/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function buscarEnderecoPorParticipanteId($parId){
        $this->endDAO = new EnderecoDAO();
        $objEnd = $this->endDAO->buscarEnderecoPorParticipanteId($parId);
        return $objEnd;
    }

    /* 
     * @autor: Denis Lucas Silva.
     * @descrição: Método responsável por preparar os dados de endereço para atualizar, chamando o atualizar do DAO.
     *             Retorna o id do endereço atualizado.
     * @data: 27/06/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function atualizarDadosEndereco(){
        $this->endDAO = new EnderecoDAO();
        $this->endDAO->atualizarDadosEndereco($this->endDTO);
        return $this->endDTO->getEndId();
    }

    /* 
     * @autor: Denis Lucas Silva.
     * @descrição: Método para excluir um endereço por participante id.
     *             Retorna false, se não excluir, e true, se excluir.
     * @data: 27/06/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function excluirEnderecoPorParticipanteId($parId){
        $this->endDAO = new EnderecoDAO();
        return $this->endDAO->excluirEnderecoPorParticipanteId($parId);
    }
}