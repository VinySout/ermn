<?php
class GuarapesService {

    private $incluirGuarapes;
    
    function __construct($conexao) {
        $this->incluirGuarapes = new GuarapesRepository($conexao);
    }
    function inserirGuarapes(Guarapes $guarapes){
        $this->incluirGuarapes->inserir($guarapes);
    }
    function mostrarGuarapesId($id){
        return $this->incluirGuarapes->listaGuarapesId($id);
    }

    
}
