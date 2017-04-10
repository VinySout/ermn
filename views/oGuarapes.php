<!DOCTYPE html>
<?php 
session_start();

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
                        <p class="styleTitulo" id="oGuarapesRef">O Guarapes</p>                          
                        <section id="oGuarapes">                            
                            <div>
                            <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario'] != ""){
                              echo '<hr/>';
                              echo '<form action="../servers/serverGuarapes.php" method="POST" enctype="multipart/form-data">';
                              echo '<label> Selecione a Imagem: </label><input type="file" class="btn" name="imagem"/>';
                              echo '<label> Selecione o arquivo PDF: </label><input type="file" class="btn" name="pdf"/>';
                              echo '<input class="form-control" type="text" name="edicao" placeholder="Edição do Informativo. Ex: 1º Edição O Guarapes">';
                              echo '<input type="submit" class="btn btn-xs btn-primary" value="inserir"/>';                           
                              echo '<input type="reset" class="btn btn-xs btn-default" value="cancelar">';
                              echo '</form>';
                              echo '<hr/>';
                            }?>                                
                            </div>
                        </section>                        
                    </div>
                </div>
        </section>
            <?php 
            include 'footer.php';
            ?>
    </body>
</html>
