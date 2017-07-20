<?php
header('Content-Type: text/html; charset=utf-8',true);
session_start();
    
    include_once '../entity/ChamadoSti.class.php';
    include_once '../repository/ChamadoStiRepository.class.php';
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../application/ChamadoStiService.class.php';
    
        $conexao = new ConexaoDeInclusao();
        $chamadoStiService = new ChamadoStiService($conexao);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['nome']) && isset($_POST['usuario']) && isset($_POST['descricao']) && isset($_POST['infPc']) && isset($_POST['infPc2']) && isset($_POST['solucao']) && isset($_POST['substituicao']) && isset($_POST['itemDesc']) && isset($_POST['sData'])){
                
                
                $nome = htmlspecialchars($_POST['nome']);
                $usuario = htmlspecialchars($_POST['usuario']);
                $descricao = htmlspecialchars($_POST['descricao']);
                $data = htmlspecialchars($_POST['sData']);
                $infPc = htmlspecialchars($_POST['infPc']);
                $infPc2 = htmlspecialchars($_POST['infPc2']);
                $providenciado = htmlspecialchars($_POST['providenciado']);
                $solucao = htmlspecialchars($_POST['solucao']);
                $substituicao = htmlspecialchars($_POST['substituicao']);
                $itemDesc = htmlspecialchars($_POST['itemDesc']);
                
                $chamadoSti = new ChamadoSti(0, $nome, $usuario, $descricao, $data, $infPc, $infPc2, $providenciado, $solucao, $substituicao, $itemDesc);
                $chamadoStiService->inserirChamadoSti($chamadoSti);
                header('Location: ../views/sti.php#stiRef');
            }
        }