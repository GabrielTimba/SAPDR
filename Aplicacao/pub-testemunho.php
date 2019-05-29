<?php
    include('cabecalho-rodape.php');
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Publicar Testemunho | SAPDR</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="lib/summernote/summernote-bs4.css">
    <?php
        favicon();
    ?>
    <!--API para criar editor de texto-->
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
                            class="texto-verde">Publicar Testemunho</span></p>
                    <hr class="cor-verde">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1>Publicar Testemunho</h1>
                </div>
            </div>

        </div>
    </header>

    <!--Conteudo-->
    <div class="container">

        <div class="row justify-content-center mb-3">
            <div class="col-sm-10 mr-3">
                <h5>Formulário para Publicar um Testemunho</h5>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <form class="form col-sm-10 cor-creme cor-borda2">
                
                <div class="form-row justify-content-center my-3">
                    <div class="form-group col-sm-8">
                        <label for="assunto">Assunto</label>
                        <input type="text" class="form-control" id="assunto" maxlength="50" required>
                    </div>
                </div>

                <div class="form-row justify-content-center mb-3">
                    <div class="form-group col-sm-8">
                        <label for="testemunho">Testemunho</label>
                        <textarea class="form-control" id="testemunho" required minlength="10"></textarea>
                    </div>
                </div>

                <div class="form-row justify-content-center">
                    <div class="form-group col-sm-8">
                        <input class="btn btn-outline-primary" type="submit" value="Publicar">
                        <input class="btn btn-outline-danger" type="reset" value="Apagar">
                    </div>
                </div>

            </form>
        </div>
    </div>

    <!--Rodape-->
    <?php
        rodape();
    ?>

    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="lib/summernote/summernote-bs4.js"></script>
    <!--API para criar editor de texto-->
    <script src="lib/summernote/lang/summernote-pt-PT.js"></script>
    
    <!--Chamando o Eidtor summernote-->
    <script>
        $(document).ready(function () {
            $('textarea#testemunho').summernote({
                lang: 'pt-PT',
                height: 200,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false             // set focus to editable area after initializing summernote
            });
        });
    </script>
</body>