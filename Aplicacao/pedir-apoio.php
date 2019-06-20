<?php
    include('cabecalho-rodape.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pedir Apoio | SAPDR</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lib/summernote/summernote-bs4.css"><!--API para criar editor de texto-->
    <?php
        favicon();
    ?>
    <!--script no fim da pagina-->
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
                    <p id="dir"><a href="index.html"><i class="fas fa-home mr-1"></i>Inicio</a> > Minha Conta > <span class="texto-verde">Pedir Apoio</span></p>
                    <hr class="cor-verde">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                   <h1>Pedir Apoio</h1>
                </div>
            </div>

        </div>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <h5>Formulário Para Pedir Apoio</h5>
                <form class="cor-borda cor-creme my-4 px-2" action="model/pedidosDAO.php" method="POST" role="form">
                    
                    <div class="form-row justify-content-center my-3">
                        <div class="form-group col-sm-10">
                            <label for="pedido">Pedido</label>
                            <input class="form-control" id="pedido" name="pedido" type="text" required>
                        </div>
                    </div>

                    <div class="form-row justify-content-center mb-3">
                        
                        <div class="form-group col-sm-5">
                            <label for="ben">Beneficiário</label>
                            <input class="form-control" id="ben" name="beneficiario" type="text" required>
                        </div>

                        <div class="form-group col-sm-5">
                            <label for="contacto" >Contacto</label>
                            <input class="form-control" id="contacto" name="contacto" type="number" required>
                        </div>
                    </div>
                    <div class="form-row justify-content-center mb-3">
                        <div class="form-group col-sm-10 mt-4">
                            <label for="descricao ">Descrição/Mensagem</label>
                            <textarea rows="7" class="form-control" id="descricao" name="descricao"></textarea required>
                        </div>
                    </div>

                    <div class="form-row justify-content-center">
                        <div class="form-group mt-3">
                            <button class="btn btn-outline-danger botoes mx-3" type="reset">Apagar</button>
                            <button class="btn btn-outline-primary botoes" type="submit" id="submeter" name="submeter">Submeter</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>

    <!--Rodape-->
    <?php
        rodape();
    ?>


    <!--script (apenas seguindo as boas praticas)-->
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="lib/summernote/summernote-bs4.js"></script> <!--API para criar editor de texto-->
    <script src="lib/summernote/lang/summernote-pt-PT.js"></script>

</body>
</html>