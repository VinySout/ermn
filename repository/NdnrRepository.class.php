<?php

class NdnrRepository {
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    public function inserir($ndnr){
        $query = "INSERT INTO ndnr (id, nome) values(?,?)";
      
        if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            $stmt->bind_param("is", $ndnr->getId(), $ndnr->getNome());
            $stmt->execute();
        }else{
            
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
    }
    public function listarNdnr(){
        $retorno = array();
        $query = "SELECT id, nome FROM ndnr ORDER BY id DESC";
        
          if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            
            $stmt->execute();
            $stmt->bind_result($id, $nome);
            
          
            while ($stmt->fetch()) {
                $retorno[] = new Ndnr($id, $nome);
            }
        }else{
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
        
        return $retorno;
    }
    
}