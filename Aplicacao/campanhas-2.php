<?php
    include('cabecalho-rodape.php');
    include_once('model/postDAO.php')
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Campanhas | SAPDR</title>
    
  <!--  <link rel="stylesheet" href="css/bootstrap-3.3.7.min.css"> <!--contem um tipo especifico de paginacao, foi descontinuado -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/campanhas.css">
    <?php
        favicon();
    ?>
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="lib/twbspagination/jquery.twbsPagination.js"></script>
    <script src="js/campanhas.js"></script>
    
</head>

<body>
    <!--Cabecalho -->
    <header class="container-fluid navbar-expand-sm mb-5">
        <?php
            cabecalho();
        ?>

        <div class="container">

            <div class="row mt-3">
                <div class="col-12">
                    <p id="dir"><a href="index.html"><i class="fas fa-home mr-1"></i>Inicio</a> > Publicações > <span
                            class="texto-verde">Campanhas</span></p>
                    <hr class="cor-verde">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1>Campanhas</h1>
                </div>
            </div>

        </div>
    </header>

    <!--Conteudo-->
    <div class="container">
     
        <?php //lerCampanhas(2); ?>
        
        <div class="row mb-5">
            <div class="col-sm-12">
                <hr class="cor-verde">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-circle pg-blue" id="pagination-demo">
                        <li class="page-item disabled"><a class="page-link">Primeira</a></li>
                        <li class="page-item disabled">
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Anterior</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Anterior</span>
                            </a>
                        </li>
                        <li class="page-item disabled"><a class="page-link">Ultima</a></li>
                    </ul>
                </nav>
                <hr class="cor-verde">
            </div>
           
        </div>
        
        <!--Swap out the content with your own-->
        <div class="container">
            <div class="jumbotron page" id="page1">
                <div class="container">
                    <h1 class="display-3">Adding Pagination to your Website</h1><br>
                <p class="lead">In this article we teach you how to add pagination, an excellent way to navigate large amounts of content, to your website using a jQuery Bootstrap Plugin.</p><br>
                <p><a class="btn btn-lg btn-success" href="#" role="button">Learn More</a></p>
                </div>
            </div>
            <div class="jumbotron page" id="page2">
                <h1 class="display-3">Not Another Jumbotron</h1>
                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
            </div>
            <div class="jumbotron page" id="page3">
                <h1 class="display-3">Data. Data. Data.</h1>
                <p>This example is a quick exercise to illustrate how the default responsive navbar works. It's placed within a <code>.container</code> to limit its width and will scroll with the rest of the page's content.</p>
                <p>
                    <a class="btn btn-lg btn-primary" href="../../components/navbar" role="button">View navbar docs »</a>
                </p>
            </div>
            <div class="jumbotron page" id="page4">
                <h1 style="-webkit-user-select: auto;">Buy Now!</h1>
                <p class="lead" style="-webkit-user-select: auto;">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
                <p style="-webkit-user-select: auto;"><a class="btn btn-lg btn-success" href="#" role="button" style="-webkit-user-select: auto;">Get started today</a></p>
            </div>
            <div class="jumbotron page" id="page5">
                <h1 class="cover-heading">Cover your page.</h1>
                <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
                <p class="lead">
                    <a href="#" class="btn btn-lg btn-primary">Learn more</a>
                </p>
            </div>
            <ul id="pagination-demo" class="pagination pull-right"></ul>
            </div>

        </div>    

    <!--Rodape-->
    <?php
        rodape();
    ?>
    
</body>

</html>