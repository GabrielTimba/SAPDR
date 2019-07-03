<?php
    include('cabecalho-rodape.php');
    include('model/postDAO.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Inicio | SAPDR</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <?php
        favicon();
    ?>
    
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>

    <!--Cabecalho -->
    <header class="container-fluid navbar-expand-sm">
        <?php
            cabecalho();
        ?>  
    </header>

    <!--Slides-->
    <div id="carouselSite" class="carousel slide" data-ride="carousel">
    
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-target-to="0" class="active"></li>
            <li data-target="#carouselSite" data-target-to="1" class="active"></li>
            <li data-target="#carouselSite" data-target-to="2" class="active"></li>
            <li data-target="#carouselSite" data-target-to="3" class="active"></li>
        </ol>
    
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgs/carosel-1.png" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <!--<h1>Lorem ipsum dolor</h1>
                    <p class="leed">Mauris dictum, nulla sed placerat sodales, diam augue sollicitudin dui</p>-->
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/carosel-2.png" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <!--<h1>Aliquam in malesuada neque</h1>
                    <p class="leed">Mauris dictum, nulla sed placerat sodales, diam augue sollicitudin dui.</p>-->
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/carosel-3.png" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-wihte">
                    <!--<h1>Pellentesque ultricies facilisis ultrices</h1>
                    <p class="leed">Mauris dictum, nulla sed placerat sodales, diam augue sollicitudin dui.</p>-->
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/carosel-4.png" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-sucess">
                  <!--  <h1>Pellentesque ultricies facilisis ultrices</h1>
                    <p class="leed">Mauris dictum, nulla sed placerat sodales, diam augue sollicitudin dui.</p>-->
                </div>
            </div>
        </div>
    
        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Avancar</span>
        </a>
    </div>

    <div class="jumbotron jumbotron-fluid bg-white" style="font-size:20px;">
        <div class="container">
           <div class="row my-5">
                <div class="col-12 " id="descricao-spdr">
                    <h1 class="display-4">Sistema de Apoio a Portadores de Doenças Raras (SAPDR)</h1>
                    <p class="text-justify">
                        O sistema tem como objetivo principal permitir a iteração entre portadores de doenças raras ou seus representantes e entidades que possam prover apoio diverso. Este projecto mostra-se importante para os doentes/responsáveis a medida em que vai permitir que estes tenham mais informações úteis do assunto em causa e possam interagir com gente na mesma situação. É uma forma de promover a inclusão social visto que muitas vezes os padecentes de doenças raras acabam sendo excluídos ou esquecidos.<br>  
                        Com esta plataforma os pacientes poderão interagir um com os outros por meio de fóruns embutidos na plataforma; poderão também publicar pedidos de apoio, visualizar campanhas informativas, artigos e relatórios relacionados a doenças raras.
                    </p>
                    <hr>
                </div>
            </div> 
        </div>
    </div>

    
    <!--Conteudo-->
    <div class="container text-justify" id="conteudo">
          
        <div class="row my-5">
            <div class="col-12" id="campanha">
                <?php
                    lerCampanhas(3);
                ?>
            </div>
        </div>
       
        <div class="row my-5">
            <div class="col-12" id="artigo">
                <h2>Artigo</h2>
                <h3>O que são doenças raras?</h3>
                <p>
                    As doenças raras são caracterizadas por uma ampla diversidade de sinais e sintomas e
                    variam não só de doença para doença, mas também de pessoa para pessoa acometida pela
                    mesma condição. Manifestações relativamente frequentes podem simular doenças comuns,
                    dificultando o seu diagnóstico, causando elevado sofrimento clínico e psicossocial aos afetados,
                    bem como para suas famílias.
                </p>
                As doenças raras podem ser:
                <ul>
                    <li>degenerativas;</li>
                    <li>proliferativas.</li>
                </ul>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-12" id="apoio">
                <h2>Pedido de apoio</h2>
                <p>
                    As doenças raras são caracterizadas por uma ampla diversidade de sinais e sintomas e
                    variam não só de doença para doença, mas também de pessoa para pessoa acometida pela
                    mesma condição. Manifestações relativamente frequentes podem simular doenças comuns,
                    dificultando o seu diagnóstico, causando elevado sofrimento clínico e psicossocial aos afetados,
                    bem como para suas famílias.
                </p>
                
            </div>
        </div>

        <div class="row my-5">
            <div class="col-12" id="testemunho">
                <h2>Testemunho</h2>
                <p>
                    As doenças raras são caracterizadas por uma ampla diversidade de sinais e sintomas e
                    variam não só de doença para doença, mas também de pessoa para pessoa acometida pela
                    mesma condição. Manifestações relativamente frequentes podem simular doenças comuns,
                    dificultando o seu diagnóstico, causando elevado sofrimento clínico e psicossocial aos afetados,
                    bem como para suas famílias.
                </p>
            </div>
        </div>
          
    </div>

    <!--Rodape-->
    <?php
        rodape();
    ?>
</body>
</html>