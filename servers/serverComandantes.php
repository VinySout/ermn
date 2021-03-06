<?php
session_start();
if(isset($_SESSION['usuarioID']) && isset($_SESSION['usuarioNome'])){
    
    include_once '../entity/Comandante.class.php';
    include_once '../repository/ComandanteRepository.class.php';
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../application/ComandanteService.class.php';
    
        $conexao = new ConexaoDeInclusao();
        $comandanteService = new ComandanteService($conexao);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['nome']) && isset($_POST['periodo'])){
                
                $uploadfile = $_FILES['foto']['name'];
                $ext = strtolower(strrchr($uploadfile,"."));
                $nome_atual = time().$ext;
                     //directório onde será gravado a imagem
                move_uploaded_file($_FILES['foto']['tmp_name'], "../img/fotosDosComandantes/".$nome_atual);                  
                    
                $nome = htmlspecialchars($_POST['nome']);
                $periodo = htmlspecialchars($_POST['periodo']);
                $comandante = new Comandante(0, $nome_atual, $nome, $periodo);
                $comandanteService->inserirComandante($comandante);
                header('Location: ../views/comandantes.php');
            }
        }
}else{
    header("Location: ../index.php");
    exit;
}