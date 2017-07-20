<!DOCTYPE html>
<?php 
session_start();
 header('Content-Type: text/html; charset=utf-8',true);

include_once '../entity/ChamadoSti.class.php';
include_once '../util/ConexaoDeInclusao.class.php';
include_once '../repository/ChamadoStiRepository.class.php';
    $conexao = new ConexaoDeInclusao();
    $chamadoStiRepository = new ChamadoStiRepository($conexao);
    $lista = $chamadoStiRepository->listarChamadoSti();

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
                    include '../views/navegacao.php';
                    ?>
                    <div class="col-md-9 ">
                        
                        
                        <table>
                            <tr><p class="styleTitulo" id="stiRef">STI</p></tr>
                            <tr>
                                <td class="tbSubTitle"><a href="#">Ferramentas</a></td>
                                <td class="tbSubTitle"><a href="#">Publicações</a></td>
                                <td class="tbSubTitle"><a href="../views/sti.php#cRealRef">Chamados Realizados</a></td>
                                <td class="tbSubTitle"><a href="#stiRef">Realizar chamado</a></td>                                                                
                            </tr>
                        </table>
                        <session>
                            <hr/>
                            <form action="../servers/serverChamadoSti.php" method="POST" enctype="multipart/form-data">
                                <table class="tbchamado ">
                                        <tr>
                                            <td class="tbtituloSol" id="openChamRef">Realizar chamado</td>
                                        </tr>
                                        <tr>                            
                                            <td><input class="form-control" type="text" name="nome" placeholder="Solicitante: Graduação/Nome de guerra"></td>                            
                                        </tr>                                    
                                        <tr> 
                                            <td><input class="form-control" type="text" name="usuario" placeholder="Usuário de Login: 'Ex. ermn-111'"></td>
                                        </tr>                                
                                        <tr>
                                            <td><textarea class="form-control" name="descricao" placeholder="Descrição"></textarea></td>
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
                                            <td>
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
