<?php

class PlanoDiaRepository {
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    public function inserir($planoDia){
        $query = "INSERT INTO planodia (id, nome) values(?,?)";
      
        if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            $stmt->bind_param("is", $planoDia->getId(), $planoDia->getNome());
            $stmt->execute();
        }else{
            
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
    }
    public function listarPlanoDia(){
        $retorno = array();
        $query = "SELECT id, nome FROM planodia ORDER BY id DESC";
        
          if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            
            $stmt->execute();
            $stmt->bind_result($id, $nome);
            
          
            while ($stmt->fetch()) {
                $retorno[] = new PlanoDia($id, $nome);
            }
        }else{
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
        
        return $retorno;
    }
    
}
