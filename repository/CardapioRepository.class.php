<?php

class CardapioRepository {
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    public function inserir($cardapio){
        $query = "INSERT INTO cardapio (id, nome) values(?,?)";
      
        if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            $stmt->bind_param("is", $cardapio->getId(), $cardapio->getNome());
            $stmt->execute();
        }else{
            
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
    }
    public function listarCardapio(){
        $retorno = array();
        $query = "SELECT id, nome FROM cardapio ORDER BY id DESC";
        
          if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            
            $stmt->execute();
            $stmt->bind_result($id, $nome);
            
          
            while ($stmt->fetch()) {
                $retorno[] = new Cardapio($id, $nome);
            }
        }else{
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
        
        return $retorno;
    }
    
}