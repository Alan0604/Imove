<?php 
require_once('./dto/DTOCidade.php');
require_once('./dao/DAOCidade.php');

require_once('BOEstado.php');

class BOCidade{
    public $cidDTO;
    private $cidDAO;

    public function __construct($arrayCid){
        $this->arrayToObjCidade($arrayCid);
    }

    public function arrayToObjCidade($arrayCid){
         $this->cidDTO = new DTOCidade();
        $estBO = new EstadoBO($arrayCid);
           if($arrayCid['cidade']){
               $cidade = $this->buscarCidadePorNome($arrayCid['cidade']);
               $this->cidDTO->setCidId($cidade->cid_id);
           }else{
               $this->cidDTO->setCidId($arrayCid['cid_id'] ?? 0);
           }
        $this->cidDTO->setCidNome($arrayCid['cidade'] ?? '');
        $this->cidDTO->setEst($estBO->estDTO);
        return $this->cidDTO;
    }

    public function validarDadosCidade($cidDTO){
        $erros = "";
        $erros.= ($cidDTO->getCidNome()=="" ? "'Cidade' é obrigatório." : "");

        return $erros;
    }

    /* 
     * @autor: Denis Lucas Silva.
     * @descrição: Método para salvar os dados do objeto cidade preenchido pelo usuario. 
     *             Se a cidade já existir, através do nome, ela será usada.
     *             Retorna a cidade id.
     * @data: 08/06/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function salvarDadosCidade($cidDTO){
        $this->cidDAO = new CidadeDAO();
        $cidOBJ = $this->cidDAO->buscarCidadePorNome($cidDTO->getCidNome());
        if($cidOBJ == NULL){
            $cidDTO->setCidCepUnico($cidDTO->getCidCepUnico()=="on"? 'S' : 'N');
            $nrReg = $this->cidDAO->salvarDadosCidade($this->cidDTO);
            var_dump($nrReg);
            if($nrReg>0){
                $cidOBJ = $this->cidDAO->buscarCidadePorNome($this->cidDTO->getCidNome());
                
            }
        }
        return $cidOBJ->cid_id;
        
    }
    
    /* 
     * @autor: Denis Lucas Silva.
     * @descrição: Método para buscar os dados de uam cidade através de um nome informado pelo usuario.
     *             Retorna um objeto cidade do banco.
     * @data: 22/06/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function buscarCidadePorNome($cidNome){
        $this->cidDAO = new CidadeDAO();
        $cidOBJ = $this->cidDAO->buscarCidadePorNome($cidNome);
        return $cidOBJ;
    }

    /* 
     * @autor: Denis Lucas Silva.
     * @descrição: Método para buscar os dados de uam cidade através do seu id.
     *             Retorna um objeto cidade do banco.
     * @data: 22/06/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function buscarCidadePorId($cidId){
        $this->cidDAO = new CidadeDAO();
        $cidOBJ = $this->cidDAO->buscarCidadePorId($cidId);
        return $cidOBJ;
    }
}