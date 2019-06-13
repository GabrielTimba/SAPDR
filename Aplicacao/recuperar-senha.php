<?php
    include('cabecalho-rodape.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Recuperar Senha | SAPDR</title>
    
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
                    <p id="dir"><a href="index.html"><i class="fas fa-home mr-1"></i>Inicio</a> > Minha Conta > <a href="login.php">Entrar</a> ><span
                            class="texto-verde">Recuperar Senha</span></p>
                    <hr class="cor-verde">
                </div>
            </div>
    
            <div class="row">
                <div class="col-12">
                    <h1>Recuperar Senha</h1>
                </div>
            </div>
    
        </div>
    </header>

    <div class="container">
        
        <div class="row justify-content-center">
            <form class="col-md-10" method="post" action="">
            
                <div class="col-sm-12 border cor-creme cor-borda justify-content-center mb-5" id="geral">
                       
                    <div class="form-row justify-content-center">
                        <div class="form-group col-sm-10 mt-2">
                            <label class="my-5 text-warning" for="email" style="font-size:25px">Informe seu e-mail e aguarde o link para refazer sua senha.</label>
                        </div>
                    </div>

                    <div class="form-row justify-content-center">
                        <div class="form-group col-sm-8 mt-2">
                            <input type="email" class="form-control" name="email" id="email" placeholder="seu email" required>
                        </div>
                    </div>
            
                    <div class="form-row justify-content-center my-2 mb-4">
                        <div class="col-sm-8">
                            <button class="btn  btn-primary col-sm-12" name="entrar" type="Submit">Enviar</button>
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