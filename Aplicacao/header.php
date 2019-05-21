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

        <div class="row">
            <div class="col-12">
                <div class="collapse navbar-collapse float-left ml-3">
                    <img src="imgs/icone-sapdr.png">
                </div>
                
                <div class="float-right mr-3">
                    <ul class="navbar-nav list-group-horizontal float-right mt-2">
                        <li class="nav-item mt-2">
                            <a href="contacte-nos.html" class="link texto-verde"><i class="fas fa-envelope mr-1"></i>Contacte-nos</a>
                        </li>
                        <li class="nav-item dropdown ml-3">
                
                            <a class="nav-link dropdown-toggle texto-verde" href="#" data-toggle="dropdown"><i
                                    class="fas fa-user mr-1"></i>Minha conta</a>
                            <div class="dropdown-menu cor-verde">
                                <a class="dropdown-item" href="login.html">Entrar</a>
                                <a class="dropdown-item" href="#">Registar</a>
                            </div>
                
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
        
        <nav class="row navbar navbar-expand-lg navbar-light mt-2 cor-verde">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menubar">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="menubar">
                <ul class="navbar-nav container">
                    <li class="nav-item">
                      <a class="nav-link" href="index.html"><i class="fas fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Doencas Raras.html">Doenças Raras</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Foruns</a>
                    </li>
                 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Publicações</a>
                        <div class="dropdown-menu cor-verde">
                            <a class="dropdown-item" href="#">Campanhas</a>
                            <a class="dropdown-item" href="#">Artigos</a>
                            <a class="dropdown-item" href="#">Pedidos de apoio</a>
                            <a class="dropdown-item" href="#">Testemunhos</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Instituições e Associações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Relatórios</a>
                    </li>
                      
                </ul>
            </div>
           
        </nav>
    </header>