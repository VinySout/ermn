<!DOCTYPE html>
<?php
session_start();
 header('Content-Type: text/html; charset=utf-8',true);
 
if(isset($_SESSION['usuarioID']) && isset($_SESSION['usuarioNome'])){

    include_once '../entity/ChamadoSti.class.php';
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../repository/ChamadoStiRepository.class.php';
    include_once '../application/ChamadoStiService.class.php';

    $conexao = new ConexaoDeInclusao();
    $chamadoStiService = new ChamadoStiService($conexao);    
    
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['id'])){        
    $idChamadoSti = htmlspecialchars($_GET['id']);
    $lista = $chamadoStiService->mostrarChamadoStiId($idChamadoSti);    
    }
}

?>  
<html lang="pt-br">
    <head>
        <title>Estação Radiogoniométrica da Marinha em Natal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
         <?php 
            include '../views/cssJsImports.php'; 
        ?>
    </head>
    <body id="wrapper">
        <?php 
            include '../views/header.php';
        ?>
        <section class="container nav-justified" id="main">
            
            <div class="links">
                    <?php 
                    include '../views/navegacao.php';
                    ?>
                    <div class="col-md-9">
                        <p class="styleTitulo" id="stiRef">STI</p>
                        <hr/>
                        <div class="tbtituloSol" colspan="5" id="cEditRef">Editar Chamado</div>
                        <section>    
                            <?php
                                for($i=0; $i<1; $i++){
                                    $chamadoSti = $lista[0];
                                    ?>        
                                <form action="../repository/editarChamadoStiRepository.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $chamadoSti->getId()?>" />                                    
                                    Nome: <input class="form-control" type="text" name="nome" value="<?= $chamadoSti->getNome()?>" />
                                    Usuario: <input class="form-control" type="text" name="usuario" value="<?= $chamadoSti->getUsuario()?>" />
                                    Descrição: <input class="form-control" type="text" name="descricao" value="<?= $chamadoSti->getDescricao()?>" />
                                    *Data: <input class="form-control" type="text" name="sData" value="<?= $chamadoSti->getSdata()?>" />
                                    *Ip: <input class="form-control" type="text" name="infPc" value="<?= $chamadoSti->getInfPc()?>">
                                    *Nome Pc<input class="form-control" type="text" name="infPc2" value="<?= $chamadoSti->getInfPc2()?>">
                                    Status: <input class="form-control" type="text" name="providenciado" value="<?= $chamadoSti->getProvidenciado()?>">
                                    Solução: <input class="form-control" type="text" name="solucao" value="<?= $chamadoSti->getSolucao()?>"/>                                   
                                    Substituição:<input class="form-control" type="text" name="substituicao" value="<?= $chamadoSti->getSubstituicao()?>">
                                    Descrição Item: <input class="form-control" type="text" name="itemDesc" value="<?= $chamadoSti->getItemDesc()?>">
                                    <input type="submit" class="btn btn-xs btn-primary" value="salvar"/>
                                    <input type="button" class="btn btn-xs btn-default" value="cancelar" onClick="history.go(-1)"> 
                                </form>           
                                <?php } ?>
                        </section>
                    </div>
                </div>
        </section>
            <?php
            include '../views/footer.php';
            ?>
    </body>
</html>
<?php
}else{
    header("Location: ../views/sti.php");
    exit;
}