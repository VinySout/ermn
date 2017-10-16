<!DOCTYPE html>
<?php 
    session_start();
    header('Content-Type: text/html; charset=utf-8',true);

    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../entity/Cardapio.class.php';
    include_once '../entity/PlanoDia.class.php'; 
    include_once '../entity/DestaqueSemestre.class.php';
    include_once '../entity/Ndnr.class.php';
    include_once '../entity/IndDesemp.class.php';
    include_once '../repository/PlanoDiaRepository.class.php';
    include_once '../repository/CardapioRepository.class.php';
    include_once '../repository/NdnrRepository.class.php';
    include_once '../repository/DestaqueSemestreRepository.class.php';
    include_once '../repository/IndDesempRepository.class.php';
    
    $conexao = new ConexaoDeInclusao();
    
    $destSemRepository = new DestaqueSemestreRepository($conexao);
    $destSemList = $destSemRepository->listarDestSem();
    
    
    $planoDiaRepository = new PlanoDiaRepository($conexao);
    $pdList = $planoDiaRepository->listarPlanoDia();
    $ultimoPd = $pdList[0];

    $cardapioRepository = new CardapioRepository($conexao);
    $cardapioList = $cardapioRepository->listarCardapio();
    $ultimoCardapio = $cardapioList[0];

    $ndnrRepository = new NdnrRepository($conexao);
    $ndnrList = $ndnrRepository->listarNdnr();
    $ultimoNdnr = $ndnrList[0];
    
    $indDesempRepository = new IndDesempRepository($conexao);
    $indDesempList = $indDesempRepository->listarIndDesemp();
    $ultimoIndDesemp = $indDesempList[0];
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
        include './header.php';
        ?>
        <section class="container" id="main">
            
            <div class="links">
                    <?php 
                    include './navegacao.php';
                    ?>
                    <div class="col-md-9 ">                        
                        <table>
                            <tr><p class="styleTitulo" id="destaqueRef">Destaques do Semestre</p></tr>
                        </table>
                        <session> 
                            <div id="contatoRef">Fale conosco pelo e-mail: <a href="#contatoRef">marques.barreto@marinha.mil.br</a></div>
                        </session>  
                        <section id="oGuarapes">
                            
                            <?php if(isset($_SESSION['usuarioNome']) && $_SESSION['usuarioNome'] != ""){
                            
                            echo '<hr/>'
                            . '<form action="../servers/serverDestaqueSemestre.php" method="POST" enctype="multipart/form-data">';
                            echo '<input type="file" class="btn" id="imagem" name="imagem"/>';
                            echo '  <select name="posto">
                                        <option>======Posto======</option>
                                        <option value="Militar Padrão">Militar Padrão</option>
                                        <option value="Operador Padrão PR">Operador Padrão PR</option>
                                        <option value="Operador Padrão PMO">Operador Padrão PMO</option>                                        
                                        <option value="Marinheiro Padrão">Marinheiro Padrão</option>
                                    </select>';
                            echo '<input class="form-control" type="text" name="militar" placeholder="graduação/Nome de guerra. Ex: 1º SG-ET Fulano">';
                            echo '<input class="form-control" type="text" name="semestre" placeholder="Semestre em destaque. Ex: 1º Semestre de 2017">';
                            echo '<input type="submit" class="btn btn-xs btn-primary" value="inserir"/>';                           
                            echo '<input type="reset" class="btn btn-xs btn-default" value="cancelar">';
                            echo '</form>';
                              
                            }?>                                     
                        </section>
                        <section>
                            <hr/>
                            <?php 
                                for($i=0; $i < sizeof($destSemList); $i++){
                                $destSem = $destSemList[$i];
                                 ?>                            
                            <div class="cmdts-ant">
                                <input type="hidden" name="id" value="<?= $destSem->getId()?>" />
                                <img  src="../img/militarPadrao/<?= $destSem->getImg()?> " width="200px" height="220px"/>
                                <h5 class="legendaNmCmdt"><?= $destSem->getPosto()?></h5>
                                <h5 class="legendaNmCmdt"><?= $destSem->getNome()?></h5>
                                <h5 class="legendaNmCmdt"><?= $destSem->getSemestre()?></h5>                                
                                <?php if(isset($_SESSION['usuarioNome']) && $_SESSION['usuarioNome'] != ""){
                                    echo '<input type="submit" class="btn btn-xs btn-default editarDest" id="'.$destSem->getId().'" name="editarDest" value="editar">';
                                    echo '<input type="submit" class="btn btn-xs btn-default excluirDest" id="'.$destSem->getId().'" name="excluirDest" value="excluir">';
                                    }?>
                                <hr/>
                            </div>
                            <?php } ?>
                                
                        </section>
                        
                    </div>
                </div>
        </section>
            <?php 
            include 'footer.php';
            ?>
    </body>
</html>
