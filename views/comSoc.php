<!DOCTYPE html>
<?php 
    session_start();
    header('Content-Type: text/html; charset=utf-8',true);

    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../entity/Cardapio.class.php';
    include_once '../entity/PlanoDia.class.php'; 
    include_once '../repository/PlanoDiaRepository.class.php';
    include_once '../repository/CardapioRepository.class.php';
    
    $conexao = new ConexaoDeInclusao();
    $planoDiaRepository = new PlanoDiaRepository($conexao);
    $pdList = $planoDiaRepository->listarPlanoDia();
    $ultimoPd = $pdList[0];

    $cardapioRepository = new CardapioRepository($conexao);
    $cardapioList = $cardapioRepository->listarCardapio();
    $ultimoCardapio = $cardapioList[0];

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
                            <tr><p class="styleTitulo" id="comSocRef">Notícias</p></tr>
                        </table>                            
                        <session>
                            <hr/>  
                            <span id="contatoRef">Fale conosco pelo e-mail: marques.barreto@marinha.mil.br</span>
                        </session>  
                    </div>
                </div>
        </section>
            <?php 
            include 'footer.php';
            ?>
    </body>
</html>
