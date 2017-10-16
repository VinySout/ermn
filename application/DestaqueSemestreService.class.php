<?php

class DestaqueSemestreService {
    private $incluirDestSem;
    
    function __construct($conexao) {
        $this->incluirDestSem = new DestaqueSemestreRepository($conexao);
    }
    function inserirDestSem(DestaqueSemestre $destSem){
        $this->incluirDestSem->inserir($destSem);
    }
    function mostrarDestSem($id){
        return $this->incluirDestSem->listarDest($id);
    }
    
}
