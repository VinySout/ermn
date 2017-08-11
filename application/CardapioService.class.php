<?php

class CardapioService {
    private $incluirCardapio;
    
    function __construct($conexao) {
        $this->incluirCardapio = new CardapioRepository($conexao);
    }
    function inserirCardapio(Cardapio $cardapio){
        $this->incluirCardapio->inserir($cardapio);
    }
    function mostrarCardapio($id){
        return $this->incluirCardapio->listarCardapio($id);
    }

    
}
