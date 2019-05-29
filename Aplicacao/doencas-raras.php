<?php
    include('cabecalho-rodape.php');
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
                            <input class="form-control" type="search" name="pesquisa" id="pesquisar-doenca" placeholder="Pesquisar doenca...">
                            <button class="btn btn-primary ml-1" type="submit"><i class="fas fa-search"></i></button>
                        </div> 
                    </form>
                </div>
            </div>
    
        </div>
    </header>

    <!--conteudo-->
    <div class="container">
          
        <div class="row mb-5" >
            <div class="col-12">
                
                    <div class="row">
                        <!--lista do tipo -->
                        <ul class="nav nav-pills ml-3 mb-3" id="tipo" role="tablist">
                            <li class="nav-item">
                                <h6 class="mt-2">Tipo |</h6>
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
                                <div class="card">
                                    <div class="card-header">
                    
                                        <h6><span class="text-success">1 - </span>Paralesia celebral</h6>
                    
                                        <nav class="navbar bg-light navbar-primary">
                                            <ul class="nav nav-pills" id="nav-doenca" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active text-success" id="ca-1" data-toggle="pill"
                                                        href="#c-1">Causas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-success" id="si-1" data-toggle="pill" href="#s-1">Sintomas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-success" id="tr-1" data-toggle="pill" href="#t-1">Tratamento</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-success" id="pr-1" data-toggle="pill" href="#p-1">Prevenção</a>
                                                </li>
                                            </ul>
                                        </nav>
                    
                                    </div>
                    
                                    <div class="card-body tab-content " id="nav-pills-conteudo">
                    
                                        <div class="tab-pane fade show active" id="c-1" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>
                                                        11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111
                                                    </p>
                                                </div>
                    
                                            </div>
                                        </div>
                    
                                        <div class="tab-pane fade" id="s-1" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>
                                                        222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222
                                                    </p>
                                                </div>
                    
                                            </div>
                                        </div>
                    
                                        <div class="tab-pane fade" id="t-1" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>
                                                        333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333
                                                    </p>
                                                </div>
                    
                                            </div>
                                        </div>
                    
                                        <div class="tab-pane fade" id="p-1" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>
                                                        444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444
                                                    </p>
                                                </div>
                    
                                            </div>
                                        </div>
                    
                                    </div>
                                </div>
                            </div>
                    
                            <div class="tab-pane fade" id="tipo2" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                    
                                        <h6><span class="text-success">1 - </span>Cancro de Cabelo</h6>
                    
                                        <nav class="navbar bg-light navbar-primary">
                                            <ul class="nav nav-pills" id="nav-doenca" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active text-success" id="tp2-ca-1" data-toggle="pill"
                                                        href="#tp2-c-1">Causas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-success" id="tp2-si-1" data-toggle="pill"
                                                        href="#tp2-s-1">Sintomas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-success" id="tp2-tr-1" data-toggle="pill"
                                                        href="#tp2-t-1">Tratamento</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-success" id="tp2-pr-1" data-toggle="pill"
                                                        href="#tp2-p-1">Prevenção</a>
                                                </li>
                                            </ul>
                                        </nav>
                    
                                    </div>
                    
                                    <div class="card-body tab-content" id="nav-pills-conteudo">
                    
                                        <div class="tab-pane fade show active" id="tp2-c-1" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>
                                                        11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111
                                                    </p>
                                                </div>
                    
                                            </div>
                                        </div>
                    
                                        <div class="tab-pane fade" id="tp2-s-1" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>
                                                        222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222
                                                    </p>
                                                </div>
                    
                                            </div>
                                        </div>
                    
                                        <div class="tab-pane fade" id="tp2-t-1" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>
                                                        333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333
                                                    </p>
                                                </div>
                    
                                            </div>
                                        </div>
                    
                                        <div class="tab-pane fade" id="tp2-p-1" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>
                                                        444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444
                                                    </p>
                                                </div>
                    
                                            </div>
                                        </div>
                    
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                    </div>

                </div>
                
            </div>
    </div>

    <!--Rodape-->
    <?php
            rodape();
    ?>
    
</body>
</html>