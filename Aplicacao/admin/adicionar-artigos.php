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
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/painel-admin.css">
        
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

            <div class="container-fluid" id="conteudo">
                
            <div class="row conteudo-dir pt-4">
                <h5 class="ml-3">Artigos</h5>
                <p class="ml-5 dir"><a href="#">Inicio</a> >><span class="text-sucess">Artigos</span></p>
            </div>

            <div class="row my-2 justify-content-center">
                <div class="col-sm-11">
                    <a class="btn btn-light bg-white cor-borda2 float-right" href="lista de artigos.php"><i class="fa fa-reply"></i></a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-11 borda-titulo">
                    <label><i class=""></i>Adicionar Artigos</label>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class=" border col-sm-11 bg-white " id="cadastro">
                    <form  action="#" id="" role="form"  method="post" accept-charset="utf-8">

                        <!-- SmartWizard html -->
                        <div id="smartwizard">
                
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-row">
                                    <div class="form-group col-sm-5 mt-2 ml-3">
                                        <label for="Autor" >Autor:</label>
                                        <input type="text"   class="form-control"  placeholder="Autor" required>
                                    </div>

                                </div> 
                    
                                <div class="form-row">
                                
                                    <div class="form-group col-sm-5 mt-2 ml-3">
                                        <label for="Tipo" >Titulo:</label>
                                        <input type="text"   class="form-control"  placeholder="Titulo" required>
                                    </div>
                                </div> 

                                <div class="form-row">
                                    <div class="form-group col-sm-8 mt-2 ml-3">
                                        <label for="Conteudo" >Conteudo:</label>
                                        <textarea class="form-control" id="Caracteristicas" cols="70" rows="7" required></textarea>
                                    </div>
                                    
                                </div>

                                <div class="form-row justify-content-center">
                                    
                                    <button class="btn  btn-primary mr-2 mb-3" type="Submit">Submeter</button>
                                    <button class="btn  btn-danger mr-3 mb-3" type="reset">Cancelar</button>
                                    
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

        <!-- Ler Mais-->

        <div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title">Caracteristicas da Doenca</h1>
                        <button type="button" class="close" data-dismiss="modal">
                            <samp>&times;</samp>
                        </button>
                    </div>

                    <div class="modal-body">
                        Lorem ipsum dolor sit amet consectetur, 
                        adipisicing elit. Ex voluptas suscipit iste sapiente 
                        assumenda cupiditate delectus aliquam dolore culpa officia ratione ipsum tenetur, 
                        similique nemo quam nostrum adipisci, aliquid maxime.

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>

                    </div>

                </div>

            </div>
        </div>
        
    </body>
</html>
