<!DOCTYPE html>
<?php 
session_start();

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
                            <tr><p class="styleTitulo" id="netunoRef">Programa Netuno</p></tr>                           
                            <tr>
                                <td class="tbSubTitle"><a href="#">Planejamento Estratégico Organizacional</a></td>
                                <td class="tbSubTitle"><a href="#">Cartas de Serviços</a></td>
                                <td class="tbSubTitle"><a href="#">Gestão de Riscos</a></td>
                                <td class="tbSubTitle"><a href="#">Indicadores de Desenpenhos</a></td>
                                <td class="tbSubTitle"><a href="#">Planos de Melhoria da Gestão</a></td>
                            </tr>
                        </table>                          
                        <session>
                            <hr/>
                        </session>
                            
                        <session>
                            <hr/>                           
                        </session>  
                    </div>
                </div>
        </section>
            <?php 
            include 'footer.php';
            ?>
    </body>
</html>
