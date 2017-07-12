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
                            <tr><p class="styleTitulo" id="comSocRef">Comunicação Social</p></tr>                           
                            <tr>
                                <td class="tbSubTitle"><a href="#">Destaques do Semestre</a></td>
                                <td class="tbSubTitle"><a href="oGuarapes.php#comSocRef">Informativos</a></td>                               
                                <td class="tbSubTitle"><a href="#">Notícias</a></td>
                                <td class="tbSubTitle"><a href="#">Contato</a></td>                                                              
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
