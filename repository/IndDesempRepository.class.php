<?php

class IndDesempRepository {
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    public function inserir($indDesemp){
        $query = "INSERT INTO inddesemp (id, nome) values(?,?)";
      
        if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            $stmt->bind_param("is", $indDesemp->getId(), $indDesemp->getNome());
            $stmt->execute();
        }else{
            
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
    }
    public function listarIndDesemp(){
        $retorno = array();
        $query = "SELECT id, nome FROM inddesemp ORDER BY id DESC limit 1";
        
          if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            
            $stmt->execute();
            $stmt->bind_result($id, $nome);
            
          
            while ($stmt->fetch()) {
                $retorno[] = new IndDesemp($id, $nome);
            }
        }else{
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
        
        return $retorno;
    }
    
}