<?php
    function cabecalho(){
        session_start();
	    if(!isset($_SESSION['nome'])){
		    cabecalhoVisitante();  
        }
        else{
            cabecalhoAutenticado();
        }
    }
	

    
    //metodo que faz o cabecalho
    function cabecalhoVisitante() {
?>
        <div class="row">
            <div class="col-12">
                <div class="collapse navbar-collapse float-left ml-3">
                    <a href="index.php"><img src="imgs/icone-sapdr.png">
                </div>
                
                <div class="float-right mr-3">
                    <ul class="navbar-nav list-group-horizontal float-right mt-2">
                        <li class="nav-item mt-2">
                            <a href="contacte-nos.htmlphp" class="link texto-verde"><i class="fas fa-envelope mr-1"></i>Contacte-nos</a>
                        </li>
                        <li class="nav-item dropdown ml-3">
                
                            <a class="nav-link dropdown-toggle texto-verde" href="#" data-toggle="dropdown"><i
                                    class="fas fa-user mr-1"></i>Minha conta</a>
                            <div class="dropdown-menu cor-verde">
                                <a class="dropdown-item" href="login.php">Entrar</a>
                                <a class="dropdown-item" href="RegistarDoentes.php">Registar</a>
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
                      <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Doencas Raras.php">Doenças Raras</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Publicações</a>
                        <div class="dropdown-menu cor-verde">
                            <a class="dropdown-item" href="campanhas.php">Campanhas</a>
                            <a class="dropdown-item" href="">Artigos</a>
                            <a class="dropdown-item" href="">Pedidos de apoio</a>
                            <a class="dropdown-item" href="">Testemunhos</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Instituições e Associações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="relatorio.php">Relatórios</a>
                    </li>
                      
                </ul>
            </div>
           
        </nav>
<?php
    }
?> 

<?php
    //metodo que faz o cabecalho do user depois do login
    function cabecalhoAutenticado() {
?>
    <div class="row">
        <div class="col-12">
            <div class="collapse navbar-collapse float-left ml-3">
                <a href="index.php"><img src="imgs/icone-sapdr.png">
            </div>
            
            <div class="float-right mr-3">
                <ul class="navbar-nav list-group-horizontal float-right mt-2">
                    <li class="nav-item mt-2">
                        <a href="contacte-nos.php" class="link texto-verde"><i class="fas fa-envelope mr-1"></i>Contacte-nos</a>
                    </li>
                    <li class="nav-item dropdown ml-3">
            
                        <a class="nav-link dropdown-toggle texto-verde" href="#" data-toggle="dropdown"><i
                                class="fas fa-user mr-1"></i>Minha conta</a>
                        <div class="dropdown-menu cor-verde">
                            <a class="dropdown-item" href="perfil-user.php">Perfil</a>
                            <a class="dropdown-item" href="pedir-apoio.php">Pedir Apoio</a>
                            <a class="dropdown-item" href="pub-testemunho.php">Publicar Testemunho</a>
                            <a class="dropdown-item" href="">Sair</a>
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
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Doencas Raras.php">Doenças Raras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Foruns</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Publicações</a>
                    <div class="dropdown-menu cor-verde">
                        <a class="dropdown-item" href="campanhas.php">Campanhas</a>
                        <a class="dropdown-item" href="">Artigos</a>
                        <a class="dropdown-item" href="">Pedidos de apoio</a>
                        <a class="dropdown-item" href="">Testemunhos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Instituições e Associações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="relatorio.php">Relatórios</a>
                </li>
                    
            </ul>
        </div>
        
    </nav>
<?php
    }
?>

<?php
    //metodo que faz o rodape
    function rodape() {
?>
    <footer class="container-fluid page-footer footer-cor">
        
        <div class="row mt-2 p-3 footer-border bgfooter dark-grey-text">
            <div class="col-12 ">
                <div class="row">
                    
                    <div class="col-3 d-none d-sm-none d-md-block">
                        <h4>Categorias</h4>
                        <ul>
                            <li><a href="doencas-raras.html">Doenças Raras </a></li>
                            <li><a href="">Foruns </a></li>
                            <li><a href="">Relatórios </a></li>
                            <li><a href="">Instituições e Associações </a></li>
                        </ul>
                    </div>
                    
                    <div class="col-3 d-none d-sm-none d-md-block">
                        <h4>Publicações</h4>
                        <ul>
                            <li><a href="">Campanhas</a></li>
                            <li><a href="">Artigos</a></li>
                            <li><a href="">Pedidos de Apoio</a></li>
                            <li><a href="">Instituicoes &<br> Associacoes</a></li>
                        </ul>
          
                    </div>
                    
                    <div class="col-md-3 ">
                        <form class="form-inline">
                            <label class="mb-2 mr-2" for="pesquisar">Pesquise por uma doenca rara</label>
                            <input class="form-control mr-1" id="pesquisar" type="search" placeholder="Buscar..." required>
                            <button class="btn btn-dark" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                   
                    <div class="col-md-3">
                        <h5>Siga-nos/Contactacte-nos</h5>
                        <ul class="list-unstyled footer-icone" >
                            <li class="list-inline-item"><a href=""><i class="fab  fa-facebook-square"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="contacte-nos.html"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row justify-content-center footer-copyright py-1 border-top-1 bg-dark" >
             SAPDR &copy; 2019 - Todos Direitos Reservados
        </div>

    </footer>
<?php        
    }
?>