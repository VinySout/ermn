<!DOCTYPE html>
<?php 
session_start();
 header('Content-Type: text/html; charset=utf-8',true);

include_once '../entity/ChamadoSti.class.php';
include_once '../entity/Cardapio.class.php';
include_once '../entity/PlanoDia.class.php'; 
include_once '../util/ConexaoDeInclusao.class.php';
include_once '../repository/ChamadoStiRepository.class.php';
include_once '../repository/PlanoDiaRepository.class.php';
include_once '../repository/CardapioRepository.class.php';

    $conexao = new ConexaoDeInclusao();
    $chamadoStiRepository = new ChamadoStiRepository($conexao);
    $lista = $chamadoStiRepository->listarChamadoSti();
    
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
        include './header.php';
        ?>
        <section class="container" id="main">
            
            <div class="links">
                    <?php 
                    include './navegacao.php';
                    ?>
                    <div class="col-md-9 ">
                        
                        
                        <table>
                            <tr><p class="styleTitulo" id="stiRef">Chamados Realizados</p></tr>
                        </table>
                        <session>
                            <hr/>
                            <table class="tbSolicitacao">
                                    <tr>
                                        <td>Nome do Usuário</td>
                                        <td>Data da Solicitação</td>                                        
                                        <td>Status</td>
                                    </tr>
                            <?php 
                                for($i=0; $i < sizeof($lista); $i++){
                                    $chamadoSti = $lista[$i];
                                 ?>                            
                                    <tr>
                                        <td><?= $chamadoSti->getUsuario()?></td>
                                        <td><?= $chamadoSti->getSData()?></td> 
                                        <td><?= $chamadoSti->getProvidenciado()?></td>
                                        <?php if(isset($_SESSION['usuarioNome']) && $_SESSION['usuarioNome'] != ""){
                                        echo '<td><input type="submit" class="btn btn-xs btn-default editarCall" id="'.$chamadoSti->getId().'" name="editarCall" value="editar">';
                                        echo '<input type="submit" class="btn btn-xs btn-danger excluirCall" id="'.$chamadoSti->getId().'" name="excluirCall" value="excluir"></td>';
                                        }?>
                                        <td class="btnDetalhes"><input type="submit" class="btn btn-xs btn-default detalhesCall" id="<?php echo $chamadoSti->getId()?>" name="detalhesCall" value="Detalhes"</td>
                            <?php }?>
                                 </tr>
                                </table> 
                        </session>                         
                    </div>
                </div>
        </section>
            <?php 
            include 'footer.php';
            ?>
    </body>
</html>
