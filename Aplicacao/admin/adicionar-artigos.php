<?php
    include('header-footer.php');
?>
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
        <link rel="stylesheet" href="../lib/fontawesome/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/painel-admin.css">
        <link rel="stylesheet" href="../lib/summernote/summernote-bs4.css"><!--API para criar editor de texto-->
        
        <script src="../js/jquery.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/painel-admin.js"></script>
        <script src="../js/artigos.js"></script>
        <?php
            favicon();
        ?>
    </head>
    <body>
        <!--Cabecalho-->
        <?php
            cabecalhoAdmin();
        ?>
        
        <!--corpo da pagina-->
        <div id="corpo">

            <!--Menu Lateral Esquerdo-->
            <?php
                menuVertical();

               if(isset($_GET['editar']) && ($_GET['editar'] == true)) {
                    lerPostID($_GET['idPost']);
               } else {
                   
            ?>
                <div class="container-fluid" id="conteudo">
                    
                    <div class="row conteudo-dir pt-4">
                        <h5 class="ml-3">Artigos</h5>
                        <p class="ml-5 dir"><a href="#">Inicio</a> >><span class="text-sucess">Artigos</span></p>
                    </div>

                    <div class="row my-2 justify-content-center">
                        <div class="col-sm-11">
                            <a class="btn btn-light bg-white cor-borda2 float-right" href="lista-de-artigos.php"><i class="fa fa-reply"></i></a>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-11 borda-titulo">
                            <label><i class="fa fa-pencil-square-o mr-1"></i>Adicionar Artigos</label>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class=" border col-sm-11 bg-white " id="cadastro">
                            <form   id="" role="form" action="../model/postDAO.php?acao=inserir&&tipo=Artigo" method="POST" accept-charset="utf-8">

                                <!-- SmartWizard html  -->
                                <div id="smartwizard">
                        
                                    <div id="form-step-0" role="form" data-toggle="validator">
                                       <!-- <div class="form-row">
                                            <div class="form-group col-sm-5 mt-2 ml-3">
                                                <label for="Autor" >Autor:</label>
                                                <input type="text"   class="form-control" name="autor" placeholder="Autor" required>
                                            </div>

                                        </div> -->
                            
                                        <div class="form-row">
                                        
                                            <div class="form-group col-sm-5 mt-2 ml-3">
                                                <label for="Tipo" >Titulo:</label>
                                                <input type="text"   class="form-control" name="titulo" placeholder="Titulo" required>
                                            </div>
                                        </div> 

                                        <div class="form-row">
                                            <div class="form-group col-sm-11 mt-2 ml-3">
                                                <label for="artigo" >Artigo:</label>
                                                <textarea class="form-control" id="artigo" name="artigo"  required></textarea>
                                            </div>
                                            
                                        </div>

                                        <div class="form-row justify-content-center">
                                            
                                            <button class="btn  btn-primary mr-2 mb-3" type="Submit">Submeter</button>
                                            <button type="reset" id="cancelar" class="btn  btn-danger mr-3 mb-3">Cancelar</button>
                                            
                                        </div>
                                    </div>

                                        
                                </div>
                        
                            </form>
                        </div>


                    </div>

                    <!--Rodape-->
                    <?php
                        rodapeAdmin();
                    ?>
                </div>
            <?php
                    if(isset($_GET['inserido']) && ($_GET['inserido'] == true)) {
                        echo "<script> alert('Artigo publicado com sucesso!'); </script>";
                    }
               }
            ?>

        </div>
        
        <script src="../lib/summernote/summernote-bs4.js"></script> <!--API para criar editor de texto-->
        <script src="../lib/summernote/lang/summernote-pt-PT.js"></script>
        <!--Chamando o Eidtor summernote-->
        <script>
            $(document).ready(function(){
                $('#artigo').summernote({ 
                    lang:'pt-PT',
                    height: 300,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false,             // set focus to editable area after initializing summernote
                });
            });
        </script>
    </body>
</html>
