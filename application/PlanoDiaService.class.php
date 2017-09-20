<?php

class PlanoDiaService {
    private $incluirPlanoDia;
    
    function __construct($conexao) {
        $this->incluirPlanoDia = new PlanoDiaRepository($conexao);
    }
    function inserirPlanoDia(PlanoDia $planoDia){
        $this->incluirPlanoDia->inserir($planoDia);
    }
    function mostrarPlanoDia($id){
        return $this->incluirPlanoDia->listarPlanoDia($id);
    }

    
}
