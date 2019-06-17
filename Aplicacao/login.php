<?php
    include('cabecalho-rodape.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Entrar | SAPDR</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lib/fontawesome/css/all.css">
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
                    <p id="dir"><a href="index.html"><i class="fas fa-home mr-1"></i>Inicio</a> > Minha Conta > <span
                            class="texto-verde">Entrar</span></p>
                    <hr class="cor-verde">
                </div>
            </div>
    
            <div class="row">
                <div class="col-12">
                    <h1>Entrar</h1>
                </div>
            </div>
    
        </div>
    </header>

    <div class="container">
        
        <div class="row justify-content-center">
            <form class="col-sm-10 col-md-8 col-lg-6" method="post" action="autenticacao.php">
            
                <div class="col-sm-12 border cor-creme cor-borda justify-content-center mb-5" id="geral">
            
                    <div class="form-row justify-content-center">
                        <div class="col-sm-10 mt-2 row justify-content-center">
                            <i class="fa fa-user-circle fa-4x " aria-hidden="true"></i>
                        </div>
                    </div>
            
                    <div class="form-row justify-content-center">
                        <div class="form-group col-sm-10 mt-2">
                            <label for="User">Nome de Usuario Ou Email</label>
                            <input type="text" class="form-control" name="nome" id="User" placeholder="Nome de Usuario ou Email" required>
                        </div>
                    </div>
            
            
                    <div class="form-row justify-content-center">
                        <div class="form-group col-sm-10">
                            <label for="senha">Senha</label>
                            <input type="Password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
                            <label>Esqueceu a senha? <a class="my-1" href="recuperar-senha.php">clique aqui</a> para recuperar<label>
                        </div>
                    </div>
            
            
                    <div class="form-row justify-content-center my-2">
                        <div class="col-sm-10">
                            <button class="btn  btn-primary" name="entrar" type="Submit">Entrar</button>
                        </div>
                    </div>
            
                </div>
            
            </form>
        </div>
        
    </div>
    
    <!--Rodape-->
    <?php
        rodape();
    ?>
    
</body>
</html>