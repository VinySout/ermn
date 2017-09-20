<!DOCTYPE html>
<?php 
session_start();
 header('Content-Type: text/html; charset=utf-8',true);

include_once '../entity/ChamadoSti.class.php';
include_once '../entity/Cardapio.class.php';
include_once '../entity/PlanoDia.class.php'; 
include_once '../util/ConexaoDeInclusao.class.php';
include_once '../entity/Ndnr.class.php';
include_once '../repository/NdnrRepository.class.php';
include_once '../repository/PlanoDiaRepository.class.php';
include_once '../repository/CardapioRepository.class.php';
include_once '../repository/ChamadoStiRepository.class.php';

    $conexao = new ConexaoDeInclusao();
    $chamadoStiRepository = new ChamadoStiRepository($conexao);
    $lista = $chamadoStiRepository->listarChamadoSti();
    
    $planoDiaRepository = new PlanoDiaRepository($conexao);
    $pdList = $planoDiaRepository->listarPlanoDia();
    $ultimoPd = $pdList[0];

    $cardapioRepository = new CardapioRepository($conexao);
    $cardapioList = $cardapioRepository->listarCardapio();
    $ultimoCardapio = $cardapioList[0];

    $ndnrRepository = new NdnrRepository($conexao);
    $ndnrList = $ndnrRepository->listarNdnr();
    $ultimoNdnr = $ndnrList[0];
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
        <section class="container" id="main">
            
            <div class="links">
                    <?php 
                    include './navegacaoUsoInterno.php';
                    ?>
                    <div class="col-md-9 ">
                        
                        
                        <table>
                            <tr><p class="styleTitulo" id="stiRef">Abrir Chamado de suporte ao STI</p></tr>
                        </table>
                        <session>
                            <hr/>
                            <form action="../servers/serverChamadoSti.php" method="POST" enctype="multipart/form-data">
                                <table class="tbchamado ">
                                        <tr>
                                            <td class="tbtituloSol" id="openChamRef"><label for="nome">Realizar chamado:</label></td>
                                        </tr>
                                        <tr>                                            
                                            <td><input class="form-control" type="text" name="nome" id="nome" placeholder="Solicitante: Graduação/Nome de guerra" autofocus required></td>                            
                                        </tr>                                    
                                        <tr> 
                                            <td><input class="form-control" type="text" name="usuario" placeholder="Usuário de Login: 'Ex. ermn-111'" required></td>
                                        </tr>                                
                                        <tr>
                                            <td><textarea class="form-control" name="descricao" placeholder="Descrição" required></textarea></td>
                                        </tr>                                        
                                        <tr>
                                            <?php $sData = date ("d-m-Y"); 
                                            echo"<input type='hidden' name='sData' value='$sData'>";
                                            ?>                                    
                                            <input type="hidden" name="infPc" value="<?php $ip = getenv("REMOTE_ADDR"); echo $ip;?>">                                 
                                            <input type="hidden" name="infPc2" value="<?php $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']); echo $hostname; ?>">
                                            <input type="hidden" name="providenciado" value="aguardando">
                                            <input type="hidden" name="solucao" value="aguardando">
                                            <input type="hidden" name="substituicao" value="aguardando">
                                            <input type="hidden" name="itemDesc" value="aguardando">
                                            <td><input type="submit" class="btn btn-xs btn-primary" value="Enviar">
                                            <input type="reset" class="btn btn-xs btn-default" value="Cancelar">
                                            </td>
                                        </tr>
                                </table>
                            </form>
                        </session>  
                    </div>
                </div>
        </section>
            <?php 
            include '../views/footer.php';
            ?>
    </body>
</html>
