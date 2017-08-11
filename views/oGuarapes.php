<!DOCTYPE html>
<?php
session_start();
    header('Content-Type: text/html; charset=utf-8',true);

    include_once '../entity/Guarapes.class.php';
    include_once '../entity/Cardapio.class.php';
    include_once '../entity/PlanoDia.class.php'; 
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../repository/GuarapesRepository.class.php';
    include_once '../repository/PlanoDiaRepository.class.php';
    include_once '../repository/CardapioRepository.class.php';
    
    $conexao = new ConexaoDeInclusao();
    $guarapesRepository = new GuarapesRepository($conexao);
    $lista = $guarapesRepository->listaGuarapes();
        
    $planoDiaRepository = new PlanoDiaRepository($conexao);
    $pdList = $planoDiaRepository->listarPlanoDia();
    $ultimoPd = $pdList[0];

    $cardapioRepository = new CardapioRepository($conexao);
    $cardapioList = $cardapioRepository->listarCardapio();
    $ultimoCardapio = $cardapioList[0];

?>
<html lang="pt-br">
    <head lang=pt-br"">
        <title>Estação Radiogoniométrica da Marinha em Natal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php
            include './cssJsImports.php';
        ?>
    </head>
    <body id="wrapper">
        <?php
        include './header.php';
        ?>
        <section class="container" id="main">
            
            <div class="links">
                    <?php
                    include './navegacao.php';
                    ?>
                    <div class="col-md-9 ">
                        <div class="styleTitulo" id="informativoRef">Informativo o Guarapes</div>
                        <section id="oGuarapes">
                            <hr/>
                            <?php if(isset($_SESSION['usuarioNome']) && $_SESSION['usuarioNome'] != ""){
                              echo '<form action="../servers/serverGuarapes.php" method="POST" enctype="multipart/form-data">';
                              echo '<label> Selecione a Imagem: </label><input type="file" class="btn" name="imagem"/>';
                              echo '<label> Selecione o arquivo PDF: </label><input type="file" class="btn" name="pdf"/>';
                              echo '<input class="form-control" type="text" name="edicao" placeholder="Edição do Informativo. Ex: 1º Edição O Guarapes">';
                              echo '<input type="submit" class="btn btn-xs btn-primary" value="inserir"/>';                           
                              echo '<input type="reset" class="btn btn-xs btn-default" value="cancelar">';
                              echo '</form>';
                              echo '<hr/>';
                            }?>                                     
                        </section>
                        <section>                                
                                <?php 
                                $guarapes = $lista[0];?>
                                    <div class="atual-comand">                                          
                                        <a href="../img/edicoesOGuarapes/<?= $guarapes->getPdf()?>" target="_blank title="><img  src="../img/edicoesOGuarapes/<?= $guarapes->getImagem()?>" width="220px" height="280px"/></a>
                                        <h4 class="legendaAtualCmdt"><?= $guarapes->getEdicao()?></h4>
                                        <h5 class="legendaDtCmdt">Última Edição</h5>
                                        <?php if(isset($_SESSION['usuarioNome']) && $_SESSION['usuarioNome'] != ""){
                                            echo '<input type="submit" class="btn btn-xs btn-default editarEdc" id="'.$guarapes->getId().'" name="editarEdc" value="editar">';
                                            echo '<input type="submit" class="btn btn-xs btn-default excluirEdc" id="'.$guarapes->getId().'" name="excluirEdc" value="excluir">';
                                            }?>
                                        <hr/>
                                    </div>                                                     
                        </section>
                        <section>
                            <?php 
                                for($i=1; $i < sizeof($lista); $i++){
                                            $guarapes = $lista[$i];
                                 ?>
                                    <div class="cmdts-ant">
                                        <a href="../img/edicoesOGuarapes/<?= $guarapes->getPdf()?>" target="_blank title="><img  src="../img/edicoesOGuarapes/<?= $guarapes->getImagem()?> " width="200px" height="220px"/></a>
                                        <h5 class="legendaNmCmdt"><?= $guarapes->getEdicao()?></h5>
                                        <?php if(isset($_SESSION['usuarioNome']) && $_SESSION['usuarioNome'] != ""){
                                            echo '<input type="submit" class="btn btn-xs btn-default editarEdc" id="'.$guarapes->getId().'" name="editarEdc" value="editar">';
                                            echo '<input type="submit" class="btn btn-xs btn-default excluirEdc" id="'.$guarapes->getId().'" name="excluirEdc" value="excluir">';
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
