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
        <?php include './header.php';
        ?>
        <section class="container" id="main">
            
            <div class="links">
                    <?php 
                    include './navegacao.php';
                    ?>
                    <div class="col-md-9">
                        <p class="styleTitulo" id="organogramaRef">ORGANOGRAMA</p>
                        <div id="organograma"></div>
                    </div>
                </div>
        </section>
            <?php 
            include 'footer.php';
            ?>
    </body>
</html>
