<!DOCTYPE html>
<?php 
session_start();

?>
<html lang="pt-br">
    <head lang=pt-br"">
        <title>Estação Radiogoniométrica da Marinha em Natal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Css -->
        <link rel="icon" type="image/png" href="../img/brasaoErmn.png">
        <link href="../css/bootstrap.min.css" rel="stylesheet">        
        <link rel="stylesheet" href="../css/index.css"/> 
        <link rel="stylesheet" href="../css/estilos.css"/> 
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
                        <p class="styleTitulo" id="stiRef">STI</p>
                        <table>
                            <tr>
                                <td class="tbSti"><a href="#">Fainas realizadas</a></td>
                                <td class="tbSti"><a href="#">Ferramentas</a></td>
                                <td class="tbSti"><a href="#">Publicações</a></td>
                                <td class="tbSti"><a href="#">Solicitar um chamado</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
        </section>
            <?php 
            include 'footer.php';
            ?>
    </body>
</html>
