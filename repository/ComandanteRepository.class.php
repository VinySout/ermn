<?php

    header('Content-Type: text/html; charset=utf-8',true);
class ComandanteRepository {
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    public function inserir($comandante){
        $query = "INSERT INTO comandantes (id, foto, nome, periodo) values(?,?,?,?)";
      
          
        if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            $stmt->bind_param("isss", $comandante->getId(),$comandante->getFoto(),$comandante->getNome(), $comandante->getPeriodo());
            $stmt->execute();
        }else{
            
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
    }

    
}
