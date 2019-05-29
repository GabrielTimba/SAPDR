<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Painel Administrativo</title>

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
<body class="cor-creme">
    
    <!--Cabecalho-->
    <header class="navbar navbar-expand-lg borda-baixo">
        <div class="col-sm-12">
            <div class="collapse navbar-collapse float-left">
                <a href="../index.html"><img class="img-fluid" src="../imgs/icone-sapdr.png" alt="Icone SAPDR"></a>
            </div>     
        </div>
    </header>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6 ">
                
                <form class="cor-borda" action="autenticacaoAdmin.php">
                    <div class="form-row justify-content-center mt-4" >
                        <div class="form-group col-5 mt-2">
                            <i class="fas fa-user-circle display-2 ml-5"></i>
                        </div>                       
                    </div>
                    <div class="form-row justify-content-center" >
                        <div class="form-group col-10">
                            <label for="usuario">Usuario</label>
                            <input class="form-control" id="usuario" name="nome" type="text" placeholder="seu nome de usario" required>
                        </div> 
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-10">
                            <label for="senha">Senha</label>
                            <input class="form-control" id="senha" name="senha" type="password" placeholder="sua senha" required>
                        </div>                        
                    </div>
                    <div class="form-row justify-content-center my-1">
                        <div class="form-group col-10">
                            <input class="btn cor-verde" name="entrar" type="submit" value="Acessar">
                        </div>
                    </div>
                    <div class="form-row justify-content-end">
                        <div class="form-group mr-5">
                            <a class="texto-azul" href="#">Recuperar senha.</a>
                        </div>      
                    </div>
                 </form>
            </div>
        </div>
    </div>
</body>