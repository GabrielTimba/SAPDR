<?php
    include('cabecalho-rodape.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Inicio</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    
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
        </ol>
    
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgs/slide-01.jpg" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h1>Lorem ipsum dolor</h1>
                    <p class="leed">Mauris dictum, nulla sed placerat sodales, diam augue sollicitudin dui</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/slide-02.jpg" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h1>Aliquam in malesuada neque</h1>
                    <p class="leed">Mauris dictum, nulla sed placerat sodales, diam augue sollicitudin dui.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/slide-03.jpg" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h1>Pellentesque ultricies facilisis ultrices</h1>
                    <p class="leed">Mauris dictum, nulla sed placerat sodales, diam augue sollicitudin dui.</p>
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

    <!--Conteudo-->
    <div class="container" id="conteudo">
        
        <div class="row my-5">
            <div class="col-12" id="descricao-spdr">
                <h2>Sistema de Apoio a Portadores de Doenças Raras (SAPDR)</h2>
                <p>
                    As doenças raras são caracterizadas por uma ampla diversidade de sinais e sintomas e
                    variam não só de doença para doença, mas também de pessoa para pessoa acometida pela
                    mesma condição. Manifestações relativamente frequentes podem simular doenças comuns,
                    dificultando o seu diagnóstico, causando elevado sofrimento clínico e psicossocial aos afetados,
                    bem como para suas famílias.
                    As doenças raras são caracterizadas por uma ampla diversidade de sinais e sintomas e
                    variam não só de doença para doença, mas também de pessoa para pessoa acometida pela
                    mesma condição. Manifestações relativamente frequentes podem simular doenças comuns,
                    dificultando o seu diagnóstico, causando elevado sofrimento clínico e psicossocial aos afetados,
                    bem como para suas famílias.
                </p>
            </div>
        </div>
       
        <div class="row my-5">
            <div class="col-12" id="campanha">
                <h2>Campanha xxx</h2>
                <p>
                    As doenças raras são caracterizadas por uma ampla diversidade de sinais e sintomas e
                    variam não só de doença para doença, mas também de pessoa para pessoa acometida pela
                    mesma condição. Manifestações relativamente frequentes podem simular doenças comuns,
                    dificultando o seu diagnóstico, causando elevado sofrimento clínico e psicossocial aos afetados,
                    bem como para suas famílias.
                    As doenças raras são caracterizadas por uma ampla diversidade de sinais e sintomas e
                    variam não só de doença para doença, mas também de pessoa para pessoa acometida pela
                    mesma condição. Manifestações relativamente frequentes podem simular doenças comuns,
                    dificultando o seu diagnóstico, causando elevado sofrimento clínico e psicossocial aos afetados,
                    bem como para suas famílias.
                </p>
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