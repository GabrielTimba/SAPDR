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
                    <h5 class="ml-3">Doenças Raras</h5>
                    <p class="ml-5 dir"><a href="#">Inicio</a> >><span class="text-sucess"> Doenças Raras</span></p>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-11 ">
                        <div class="float-right">
                            <a class="btn btn-primary ml-5 " href="registar-doencas.php">
                                    <i class="fa fa-plus"></i>
                            </a>
                            <a class="btn btn-danger ml-2" href="">
                                    <i class="fa fa-trash"></i>    
                            </a>   
                        </div>
                        
                    </div>
                     
                </div>
                <div class="row justify-content-center">
    
                    <table class="table col-lg-10 col-md-10 col-sm-10 tabela mt-2">
                        <thead >
                            <tr class="cor-creme">
                                <td class="titulo-tabela" colspan="3"><i class="fa fa-list mr-2"></i>Lista de Doencas</td>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="texto-verde">Nome da Doenca</th>
                                <th class="texto-verde">Tipo</th>
                                <th class="texto-verde" >
                                    <a href="">Accao</a>
                                </th>
                            </tr>
                            <tr>
                                <td>Doenca 1</td>
                                <td>Degenerativa</td>
                                <td> 
                                    <button class="btn cor-verde" >
                                        <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Doenca 2</td>
                                <td>Proliferativa</td>
                                <td> 
                                    <button class="btn cor-verde" >
                                        <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Doenca 3</td>
                                <td>Proliferativa</td>
                                <td> 
                                    <button class="btn cor-verde" >
                                        <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Doenca 4</td>
                                <td>Degenerativa</td>
                                <td> 
                                    <button class="btn cor-verde" >
                                        <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Doenca 5</td>
                                <td>Degenerativa</td>
                                <td> 
                                    <button class="btn cor-verde" >
                                        <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>

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


















