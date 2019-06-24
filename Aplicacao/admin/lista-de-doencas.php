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
        <link rel="stylesheet" href="../css/painel-admin.css">
        <?php
            favicon();
        ?>
        
        <script src="../js/jquery.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/ajax.js"></script>
        <script src="../js/painel-admin.js"></script>
        <script src="../js/tabelas.js"></script>
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
                    <h5 class="ml-3">Doenças Raras</h5>
                    <p class="ml-5 dir"><a href="#">Inicio</a> >><span class="text-sucess"> Doenças Raras</span></p>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 ">
                        <div class="float-right">
                            <!--<button class="navbar-toggler btn-light" id="menu-btn" type="button" data-toggle="collapse" data-target="#filtros">
                                <span class="fa fa-filter"></span>
                            </button>-->
                            <a class="btn btn-primary ml-5 " href="registar-doencas.php" data-toggle="tooltip" title="Adicionar Nova">
                                    <i class="fa fa-plus"></i>
                            </a>
                            <a class="btn btn-danger ml-2" onclick="apagarDoenca('../model/doencaDAO.php?acao=apagar&&cont=','../model/doencaDAO.php?acao=lerNomeTipo')" data-toggle="tooltip" title="Apagar">
                                    <i class="fa fa-trash"></i>    
                            </a>   
                        </div>
                    </div>
                     
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-sm-7 mt-3">
                        <div class="col-sm-12 cor-creme borda-titulo">
                            <legend class="titulo-tabela"><i class="fa fa-list mr-2"></i>Lista de Doenças</legend>
                        </div> 
                        <div class="col-sm-12 cor-borda py-2">
                            <div class="table-responsive cor-borda3 pb-0">
                                <table class="table table-bordered table-hove mb-0" id="tabela-doencas">
                                    <thead >
                                        <tr>
                                            <th class="texto-verde text-center" style="width:2px;">
                                                <input type="checkbox" onclick="selecionar()">
                                            </th>
                                            <th class="texto-verde">Nome da Doença</th>
                                            <th class="texto-verde">Tipo</th>
                                            <th class="texto-verde" >Acção</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabela-corpo"> 
                                        <?php
                                            include_once("../model/doencaDAO.php");
                                            lerNomeTipo();
                                        ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3  col-sm-5 mt-3">
                        <div class="col-sm-12 cor-creme borda-titulo">
                            <legend class="titulo-tabela"><i class="fa fa-filter mr-2"></i>Filtros</legend>
                        </div> 
                        <div class="col-sm-12 cor-borda px-0">
                            <form method="POST">
                                <div class="form-row px-2 pt-2">
                                    <div class="form-group col-12">
                                        <label for="doenca">Nome da Doença</label>
                                        <input type="text" class="form-control" name="doenca" id="doenca" placeholder="Nome da Doença">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="tipo">Tipo</label>
                                        <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="reset" class="btn btn-warning" value="Limpar">
                                        <input type="submit" class="btn btn-info" value="Filtrar">
                                    </div>
                                </div>
                            </form>
                            
                        </div>
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


















