<?php
    include('cabecalho-rodape.php');
    include_once('model/doencaDAO.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doenças Raras | SAPDR</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/doencas-raras.css">
    <?php
        favicon();
    ?>
    
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/doencas-raras.js"></script>
</head>
<body>
    <!--Cabecalho -->
    <header class="container-fluid navbar-expand-sm mb-5">
    
        <?php
            cabecalho();
        ?>
    
        <div class="container">
    
            <div class="row mt-3">
                <div class="col-sm-12">
                    <p id="dir"><a href="index.html"><i class="fas fa-home mr-1"></i>Inicio</a> > <span
                            class="texto-verde">Doenças Raras</span></p>
                    <hr class="cor-verde">
                </div>
            </div>
    
            <div class="row">   
                <div class="col-lg-9">
                    <h1>Doenças Raras</h1>
                </div>
                <div class="col-lg-3">
                    <form class="form-inline">
                        <div class="form-group">
                            <?php 
                                if(isset($_GET['pesquisar'])) {
                                    $n = $_GET['pesquisar'];
                                    echo '<input class="form-control" type="search" name="pesquisa" id="pesquisar-doenca" onkeyup="pesquisarDoencas()"  value="'.$n.'" placeholder="Pesquisar doença...">' ;
                                } else {
                            ?>
                                    <input class="form-control" type="search" name="pesquisa" id="pesquisar-doenca" onkeyup="pesquisarDoencas()" placeholder="Pesquisar doença...">
                            <?php
                                }
                            ?>
                            <button class="btn btn-primary ml-1" type="button" onclick="pesquisarDoencas()"><i class="fas fa-search"></i></button>
                        </div> 
                    </form>
                </div>
            </div>
    
        </div>
    </header>

    <!--conteudo-->
    <div class="container">
          
        <div class="row mb-5" >
            <div class="col-12" id="row-pesquisa">
                <?php 
                    if(isset($_GET['pesquisar'])) {
                        lerDoencaNome($_GET['pesquisar']);
                    } else {
                ?>
                    <div class="row">
                        <!--lista do tipo -->
                        <ul class="nav nav-pills ml-3 mb-3" id="tipo" role="tablist">
                            <li class="nav-item">
                                <h6 class="mt-2 mr-3">Tipo |</h6>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active active1 texto-verde" id="" data-toggle="pill" href="#tipo1">Proliferativas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link texto-verde" id="" data-toggle="pill" href="#tipo2">Degenerativas</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="row">
                        <!--conteudo da lista tipo -->
                        <div class="col-12 tab-content" id="nav-pills-tipo">
                    
                            <div class="tab-pane fade show active" id="tipo1" role="tabpanel">
                                <?php lerDoencas("Proliferativa");  ?>
                            </div>
                    
                            <div class="tab-pane fade" id="tipo2" role="tabpanel">
                                
                                <?php lerDoencas("Degenerativa");  ?>
                            </div>
                    
                        </div>
                    </div>
                <?php 
                    }
                ?>
            </div>
                
        </div>
    </div>

    <!--Rodape-->
    <?php
            rodape();
    ?>
    
</body>
</html>