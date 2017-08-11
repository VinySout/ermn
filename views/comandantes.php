<!DOCTYPE html>
<?php 
session_start();
 header('Content-Type: text/html; charset=utf-8',true);

    include_once '../entity/Comandante.class.php';
    include_once '../entity/Cardapio.class.php';
    include_once '../entity/PlanoDia.class.php'; 
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../repository/PlanoDiaRepository.class.php';
    include_once '../repository/CardapioRepository.class.php';
    include_once '../repository/ComandanteRepository.class.php';

    $conexao = new ConexaoDeInclusao();
    $comandanteRepository = new ComandanteRepository($conexao);
    $lista = $comandanteRepository->listarComandantes();
    
    $planoDiaRepository = new PlanoDiaRepository($conexao);
    $pdList = $planoDiaRepository->listarPlanoDia();
    $ultimoPd = $pdList[0];

    $cardapioRepository = new CardapioRepository($conexao);
    $cardapioList = $cardapioRepository->listarCardapio();
    $ultimoCardapio = $cardapioList[0];

?>
<html lang="pt-br">
    <head>
        <title>Estação Radiogoniométrica da Marinha em Natal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <?php 
           include './cssJsImports.php'; 
       ?>
        
    </head>
    <body id="wrapper">
        <?php
            include 'header.php';
        ?>
        <section class="container nav-justified" id="main">
            
            <div class="links">
                    <?php 
                    include './navegacao.php';
                    ?>
                    <div class="col-md-9">
                        
                        <p class="styleTitulo" id="comandantesRef">COMANDANTES</p>
                        <section id="edit">
                            
                            <div class="adminConfig">
                            <?php if(isset($_SESSION['usuarioNome']) && $_SESSION['usuarioNome'] != ""){
                              echo '<hr/>';
                              echo '<form action="../servers/serverComandantes.php" method="POST" enctype="multipart/form-data">';
                              echo '<input type="file" class="btn" name="foto"/>';
                              echo '<input class="form-control" type="text" name="nome" placeholder="Graduação/Nome">';
                              echo '<input class="form-control" type="text" name="periodo" placeholder="Período no Comando">';
                              echo '<input type="submit" class="btn btn-xs btn-primary" value="inserir"/>';                           
                              echo '<input type="reset" class="btn btn-xs btn-default" value="cancelar">';
                              echo '</form>';
                              echo '<hr/>';
                            }?>
                                
                            </div>
                        </section>
                        <section>
                                
                                <?php 
                                $comandante = $lista[0];?>
                                    <div class="atual-comand">                                        
                                        <img  src="../img/fotosDosComandantes/<?= $comandante->getFoto()?> " width="220px" height="280px"/>                                        
                                        <h4 class="legendaAtualCmdt"><?= $comandante->getNome()?></h4>
                                        <h5 class="legendaDtCmdt">Comandante atual</h5>
                                        <?php if(isset($_SESSION['usuarioNome']) && $_SESSION['usuarioNome'] != ""){
                                            echo '<input type="submit" class="btn btn-xs btn-default editarCmdt" id="'.$comandante->getId().'" name="editarCmdt" value="editar">';
                                            echo '<input type="submit" class="btn btn-xs btn-default excluirCmdt" id="'.$comandante->getId().'" name="excluirCmdt" value="excluir">';
                                            }?>
                                        <hr/>
                                    </div>
                                                     
                        </section>
                        <section>
                            <?php 
                                for($i=1; $i < sizeof($lista); $i++){
                                            $comandante = $lista[$i];
                                 ?>
                                    <div class="cmdts-ant">
                                        <figure id="img">
                                            
                                            <img  src="../img/fotosDosComandantes/<?= $comandante->getFoto()?> " width="200px" height="220px"/>
                                        </figure>
                                        <h5 class="legendaNmCmdt"><?= $comandante->getNome()?></h5>
                                        <h6 class="legendaDtCmdt"><?= $comandante->getPeriodo()?></h6>
                                        <?php if(isset($_SESSION['usuarioNome']) && $_SESSION['usuarioNome'] != ""){
                                            echo '<input type="submit" class="btn btn-xs btn-default editarCmdt" id="'.$comandante->getId().'" name="editarCmdt" value="editar">';
                                            echo '<input type="submit" class="btn btn-xs btn-default excluirCmdt" id="'.$comandante->getId().'" name="excluirCmdt" value="excluir">';
                                            }?>
                                        <hr/>
                                    </div>
                                     
                            <?php }?>
                            
                        </section>
                        
                    </div>
                </div>
        </section>
            <?php
                include 'footer.php';
            ?>
    </body>
</html>
