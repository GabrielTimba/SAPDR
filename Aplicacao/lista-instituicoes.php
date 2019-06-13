<?php
    include('cabecalho-rodape.php');
?>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instituições e Associações | SAPDR</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lista-instituicoes.css">
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
                    <p id="dir"><a href="index.html"><i class="fas fa-home mr-1"></i>Inicio</a> > <span
                            class="texto-verde">Instituições e Associações</span></p>
                    <hr class="cor-verde">
                </div>
            </div>
    
            <div class="row">
                
                <div class="col-12">
                    <h1 class="float-left">Instituições e Associações</h1>
                    <form class="form-inline float-right">
                        <div class="form-group">
                            <input class="form-control" type="search" name="pesquisa" id="pesquisar-doenca" placeholder="Pesquisar instituicao">
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
                                <h6 class="mt-2">Listar |</h6>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active active1 texto-verde" id="" data-toggle="pill" href="#tipo1">Farmácias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link texto-verde" id="" data-toggle="pill" href="#tipo2">Unidades Hospitalares</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link texto-verde" id="" data-toggle="pill" href="#tipo3">Associações</a>
                            </li>
                            </li>
                        </ul>
                    </div>

                    <!--conteudo da lista tipo -->
                    <div class = "row">

                        <div class="col-12 tab-content" id="nav-pills-tipo">
                            
                            <div class="tab-pane fade show active" id="tipo1" role="tabpanel">
                                <div class="">
                                    <table class="table table-bordered table-hover col-12 tabela mt-2" id="i1">
                                        <thead>
                                            <tr class="cor-creme">
                                                <td class="titulo-tabela" colspan="4"><i class="fa fa-list mr-2"></i>Farmácias</td>
                                            </tr>
                                            <tr>
                                                <th class="texto-verde text-center" style="width:2px;">
                                                    <input type="checkbox" onclick="selecionar()">
                                                </th>
                                                <th class="texto-verde">Nome</th>
                                                <th class="texto-verde">Localizacao</th>
                                                <th class="texto-verde">Tipo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include_once("model/instituicaoDAO.php");
                                                farmacia();
                                            ?>   
                                        </tbody>
                                    </table>   
                                </div>
                                
                                
                            </div>
                    
                            <div class="tab-pane fade" id="tipo2" role="tabpanel">
                                <div class="">
                                    <table class="table table-bordered table-hover col-12 tabela mt-2" id="i2">
                                        <thead >
                                            <tr class="cor-creme">
                                                <td class="titulo-tabela" colspan="4"><i class="fa fa-list mr-2"></i>Unidade Hospitalar</td>
                                                
                                            </tr>
                                            <tr>
                                                <th class="texto-verde text-center" style="width:2px;">
                                                    <input type="checkbox" onclick="selecionar()">
                                                </th>
                                                <th class="texto-verde">Nome</th>
                                                <th class="texto-verde">Localizacao</th>
                                                <th class="texto-verde">Tipo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include_once("model/instituicaoDAO.php");
                                                hospital();
                                            ?>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
        
                            <div class="tab-pane fade" id="tipo3" role="tabpanel">
                                <div class="">
                                    <table class="table table-bordered table-hover col-12 tabela mt-2" id="i3">
                                        <thead >
                                            <tr class="cor-creme">
                                                <td class="titulo-tabela" colspan="4"><i class="fa fa-list mr-2"></i>Associações</td>
                                                
                                            </tr>
                                            <tr>
                                                <th class="texto-verde text-center" style="width:2px;">
                                                    <input type="checkbox" onclick="selecionar()">
                                                </th>
                                                <th class="texto-verde">Nome</th>
                                                <th class="texto-verde">Descricao</th>
                                                <th class="texto-verde">Localizacao</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include_once("model/instituicaoDAO.php");
                                                listaAss();
                                            ?>   
                                        </tbody>
                                    </table>
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