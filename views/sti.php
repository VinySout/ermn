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
                            <tr><p class="styleTitulo" id="stiRef">STI</p></tr>
                            <tr>
                                <td class="tbSubTitle"><a href="#">Ferramentas</a></td>
                                <td class="tbSubTitle"><a href="#">Publicações</a></td>
                                <td class="tbSubTitle"><a href="#cRealRef">Chamados Realizados</a></td>
                                <td class="tbSubTitle"><a href="#openChamRef">Realizar chamado</a></td>                                                                
                            </tr>
                        </table>                          
                        <session>
                            <hr/>
                            <table class="tbSolicitacao">
                                <tr>
                                    <td class="tbtituloSol" colspan="5" id="cRealRef">Chamados Realizados</td></tr>
                                    <tr>
                                        <td>Nome do Usuário</td>
                                        <td>Data da Solicitação</td>                                        
                                        <td>Status</td>
                                    </tr>
                            <?php 
                                for($i=0; $i < 5; $i++){
                                    $chamadoSti = $lista[$i];
                                 ?>                            
                                    <tr>
                                        <td><?= $chamadoSti->getUsuario()?></td>
                                        <td><?= $chamadoSti->getSData()?></td> 
                                        <td><?= $chamadoSti->getProvidenciado()?></td>
                                        <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario'] != ""){
                                        echo '<td><input type="submit" class="btn btn-xs btn-default editarCall" id="'.$chamadoSti->getId().'" name="editarCall" value="editar">';
                                        echo '<input type="submit" class="btn btn-xs btn-danger excluirCall" id="'.$chamadoSti->getId().'" name="excluirCall" value="excluir"></td>';
                                        }?>
                                        <td class="btnDetalhes"><input type="submit" class="btn btn-xs btn-default detalhesCall" id="<?php echo $chamadoSti->getId()?>" name="detalhesCall" value="Detalhes"</td>
                            <?php }?>
                                 </tr>
                                </table> 
                        </session>
                            
                        <session>
                            <hr/>
                           
                            <table class="tbchamado ">
                                <form action="../servers/serverChamadoSti.php" method="POST" enctype="multipart/form-data">
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
                                </form>
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
