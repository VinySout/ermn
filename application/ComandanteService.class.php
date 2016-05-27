<?php

class ComandanteService {
    private $incluirComandante;
    
    function __construct($conexao) {
        $this->incluirComandante = new ComandanteRepository($conexao);
    }
    function inserirComandante(Comandante $comandante){
        $this->incluirComandante->inserir($comandante);
    }

    
}
