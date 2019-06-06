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
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/campanhas.css">
    <?php
        favicon();
    ?>
    
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
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
     
        <?php lerCampanhas(2); ?>
        
        <div class="row mb-5">
            <div class="col-sm-12">
                <hr class="cor-verde">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-circle pg-blue">
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
    </div>    

    <!--Rodape-->
    <?php
        rodape();
    ?>

</body>

</html>