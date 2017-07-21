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
                                <td class="tbSubTitle"><a href="#ferramentaRef">Ferramentas</a></td>
                                <td class="tbSubTitle"><a href="#">Publicações</a></td>
                                <td class="tbSubTitle"><a href="#cRealRef">Chamados Realizados</a></td>
                                <td class="tbSubTitle"><a href="../usoInterno/abrirChamadoSti.php#stiRef">Realizar chamado</a></td>                                                                
                            </tr>
                        </table>
                        <session>
                            <hr/>
                                        
                            <table class="table">  
                                <tr class="subTituloSti" colspan="2" id="ferramentaRef"><th>Ferramentas</th><th></th></tr>   
                                <tr><th>Cartilha de Segurança</th><th></th></tr>
                                <tr><th></th><th><a href="../img/cartilha/cartilha-checklist.pdf" target="_blanktitle=">Checklist</a></th></tr>
                                <tr><th>Parte I</th><th><a href="../img/cartilha/cartilha-01-conceitos.pdf" target="_blanktitle=">Conceitos de Segurança</a></th></tr>
                                <tr><th>Parte II</th><th><a href="../img/cartilha/cartilha-02-prevencao.pdf" target="_blanktitle=">Riscos Envolvidos no Uso da Internet e Métodos de Prevenção</a></th></tr>
                                <tr><th>Parte III</th><th><a href="../img/cartilha/cartilha-03-privacidade.pdf" target="_blanktitle=">Privacidade</a></th></tr>
                                <tr><th>Parte IV</th><th><a href="../img/cartilha/cartilha-04-fraudes.pdf" target="_blanktitle=">Fraudes na Internet</a></th></tr>
                                <tr><th>Parte V</th><th><a href="../img/cartilha/cartilha-05-banda-larga-wireless.pdf" target="_blanktitle=">Redes de Banda Larga e Redes Sem Fio (Wireless)</a></th></tr>
                                <tr><th>Parte VI</th><th><a href="../img/cartilha/cartilha-06-spam.pdf" target="_blanktitle=">Spam</a></th></tr>
                                <tr><th>Parte VII</th><th><a href="../img/cartilha/cartilha-07-incidentes.pdf" target="_blanktitle=">Incidentes de Segurança e Uso Abusivo da Rede</a></th></tr>
                                <tr><th>Parte VIII</th><th><a href="../img/cartilha/cartilha-08-malware.pdf" target="_blanktitle=">Códigos Maliciosos (Malware)</a></th></tr>
                                <tr><th></th><th><a href="../img/cartilha/cartilha-glossario.pdf" target="_blanktitle=">Glossário</a></th></tr>
                                <tr><th></th><th><a href="../img/cartilha/cartilha-folheto-a4.pdf" target="_blanktitle=">Dicas de Segurança</a></th></tr>
                            </table>
                        </session>
                        <session>
                            <hr/>
                            <table class="tbSolicitacao">
                                <tr>
                                    <td class="subTituloSti" colspan="5" id="cRealRef">Chamados Realizados</td></tr>
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
