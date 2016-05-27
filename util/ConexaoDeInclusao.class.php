<?php

class ConexaoDeInclusao {
    
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "intranetermn";
    private $mysqli; 
    
    
    public function __construct() {
        $this->mysqli = new mysqli($this->host, $this->usuario,$this->senha,$this->banco);
        
    }
    
    public function getMysqli(){
        return $this->mysqli;
    }
    
    public function __destruct(){
        $this->mysqli->close();
    }
}
