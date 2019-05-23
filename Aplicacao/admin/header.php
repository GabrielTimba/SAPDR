<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Lista de Doenças | Admin</title>
        
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/fonts.css">
        <link rel="stylesheet" href="../lib/fontawesome/css/all.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/painel-admin.css">
        
        <script src="../js/jquery.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/painel-admin.js"></script>
    </head>
    <body>
        <!--Cabecalho-->
        <header class="navbar navbar-expand-lg borda-baixo">
            <div class="col-sm-12">
        
                <button class="navbar-toggler cor-verde" id="menu-btn" type="button" data-toggle="collapse" >
                    <span class="fa fa-bars"></span>
                </button>
        
                <div class="collapse navbar-collapse float-left">
                    <a href="../index.html"><img class="img-fluid" src="../imgs/icone-sapdr.png" alt="Icone SAPDR"></a>
                </div>
        
                <div class="float-right borda-esquerda">
                    <ul class="navbar-nav mr-4 ml-3 mt-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown">Nome de Usuario <i class="fas fa-angle-down ml-2"></i></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="perrfil.html">Perfil</a>
                                <a class="dropdown-item" href="../index.html">Pagina Inicial</a>
                                <a class="dropdown-item" href="index.html">Sair</a>
                            </div>
                        </li>
                    </ul>
                </div>
        
            </div>
        </header>
        
        <!--corpo da pagina-->
        <div id="corpo">

            <!--Menu Lateral Esquerdo-->
            <nav  class="overflow-auto" id="menu">
                <div  id="menu-cabecalho">
                    <h3 class="ml-5">Menu</h3>
                </div>

                <ul class="list-unstyled menu-componetes menu-switch">
                    <p>Navegação</p>
                    <hr class="linha">
                    <li>
                        <a href="painel-admin.html"><i class="fa fa-chart-bar mr-2"></i>Painel Administrativo</a>
                    </li>
                    <hr class="linha">
                    <li>
                        <a class="dropdown-toggle" data-toggle="collapse" aria-expanded="false" href="#menu-usuarios"><i class="fas fa-users mr-2"></i>Usuários</a>
                        <ul class="collapse list-unstyled menu-dropdown" id="menu-usuarios">
                            <li><a href="Registar Profissional.html"><i class="fas fa-angle-double-right mr-2"></i>Profissional da Saúde</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right mr-2"></i>Doente/Represetante</a></li>
                        </ul>
                    </li>
                    <hr class="linha">
                    <li><a href="Lista de Doencas.html"><i class="fas fa-list-ul mr-2"></i>Doenças Raras</a></li>
                    <hr class="linha">
                    <li><a href="#"><i class="fas fa-cogs mr-2"></i>Administrar Forum</a></li>
                    <hr class="linha">
                    <li>
                        <a class="dropdown-toggle" data-toggle="collapse" aria-expanded="false" href="#menu-publicacoes"><i class="fas fa-newspaper mr-2"></i>Publicações</a>
                        <ul class="collapse list-unstyled menu-dropdown" id="menu-publicacoes">
                            <li><a href="documentos-admin.html"><i class="fas fa-angle-double-right mr-2"></i>Documentos</a></li>
                            <li><a href="lista de artigos.php"><i class="fas fa-angle-double-right mr-2"></i>Artigos</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right mr-2"></i>Campanhas</a></li>
                        </ul>
                    </li>
                    <hr class="linha">
                    <li><a href="#"><i class="fas fa-h-square mr-2"></i> Instituicoes da Saude</a></li>
                    <hr class="linha">
                    <li>
                        <a class="dropdown-toggle" data-toggle="collapse" aria-expanded="false" href="#menu-mensagens"><i class="fa fa-envelope mr-2"></i> Mensagens</a>
                        <ul class="collapse list-unstyled menu-dropdown" id="menu-mensagens">
                            <li><a href="#"><i class="fas fa-angle-double-right mr-2"></i>Pedidos de Apoio</a></li>
                            <li><a href="mensagens.php"><i class="fas fa-angle-double-right mr-2"></i>Mensagens de Doentes</a></li>
                        </ul>
                    </li>
                    <hr class="linha">
                </ul>
            </nav>