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
                            <tr><p class="styleTitulo" id="seComRef">Secretaria de Comunicações</p></tr>                           
                            <tr>
                                <td class="tbSubTitle"><a href="#">Notícias</a></td>
                                <td class="tbSubTitle"><a href="publicacoes.php#seComRef">Publicações</a></td>
                                <td class="tbSubTitle"><a href="#">Informativos</a></td>
                                <td class="tbSubTitle"><a href="#">Programações</a></td>                                                                
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
            include '../views/footer.php';
            ?>
    </body>
</html>
