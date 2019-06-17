<?php
    include('header-footer.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Publicações | Admin</title>
        
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/fonts.css">
        <link rel="stylesheet" href="../lib/fontawesome/css/all.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/painel-admin.css">
        <link rel="stylesheet" href= "../css/publicar-admin.css">
        <?php
            favicon();
        ?>
        
        <script src="../js/jquery.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/painel-admin.js"></script>
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
            ?>

            <!--Conteudo-->
            <div class="container-fluid" id="conteudo">
                
                <div class="row conteudo-dir pt-4">
                    <h5 class="ml-3">Publicações</h5>
                    <p class="ml-5 dir"><a href="#">Inicio</a> >> Publicações >><span class="text-sucess"> Documentos</span></p>
                </div>					
	
                <div class="row my-2 justify-content-center">
                    <div class="col-sm-11">
                        <a class="btn btn-light bg-white cor-borda2 float-right" href="lista-de-documentos.php"><i class="fa fa-reply"></i></a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-11 borda-titulo">
                        <label><i class="fas fa-plus mr-1"></i>Adicionar Documento</label>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class=" border col-sm-11 bg-white " id="cadastro">
                        <form  action="../model/documentosDAO.php" id="" role="form"  method="POST" accept-charset="utf-8">

                            <!-- SmartWizard html -->
                            <div id="smartwizard">
                    
                                <div id="form-step-0" role="form" data-toggle="validator">
                                    <div class="form-row">
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="titulo" >Titulo:</label>
                                            <input type="text" id="titulo" name="titulo" class="form-control"  placeholder="Titulo" required>
                                        </div>

                                    </div> 

                                    <div class="form-row">
                                        <div class="form-group col-sm-8 mt-2 ml-3">
                                            <label for="Descricao" >Descricao:</label>
                                            <textarea class="form-control" id="descricao" name="descricao" cols="70" rows="7" required></textarea>
                                        </div>
                                        
                                    </div>

                                    <div class="form-row ml-3">
                                        <div class="image-upload">
                                                <input  type="file" id="arquivo" name="arquivo" class="cor-verde"/>
                                                <label for="file-input"></label>
                                        </div>
                                    </div>

                                    <div class="form-row justify-content-center">
                                        
                                        <button class="btn  btn-primary mr-2 mb-3" id="submeter" name="submeter" type="Submit">Submeter</button>
                                        <button class="btn  btn-danger mr-3 mb-3" id="cancelar" name="cancelar" type="reset">Cancelar</button>
                                        
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

        </div>
        
    </body>
</html>