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
                    <h5 class="ml-3">Testemunhos</h5>
                    <p class="ml-5 dir"><a href="#">Inicio</a> >><span class="text-sucess"> Testemunhos</span></p>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-11 ">
                        <div class="float-right">
                            <a class="btn btn-danger ml-2">
                                    <i class="fa fa-trash"></i>    
                            </a>   
                        </div>
                        
                    </div>
                     
                </div>
                <div class="row justify-content-center">
                    <div class="table-responsive col-sm-10">
                        <table class="table table-bordered table-hover  tabela mt-2" id="tabela-doencas">
                            <thead >
                                <tr class="cor-creme">
                                    <td class="titulo-tabela" colspan="5"><i class="fa fa-list mr-2"></i>Lista de Testemunhos</td>
                                    
                                </tr>
                                <tr>
                                    <th class="texto-verde text-center" style="width:2px;">
                                        <input type="checkbox" onclick="">
                                    </th>
                                    <th class="texto-verde">Autor</th>
                                    <th class="texto-verde">Assunto</th>
                                    <th class="texto-verde">Data</th>
                                    <th class="texto-verde" >
                                        <a href="">Acção</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="tabela-corpo"> 
                                <tr>
                                    <th class="texto-verde text-center">
                                        <input type="checkbox">
                                    </th>
                                    <td>voce</td>
                                    <td>nao sei</td>
                                    <td>hoje</td>
                                    <td> 
                                        <a class="btn cor-verde"  >
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                    //
                                ?> 
                            </tbody>
                        </table>
                    <div>
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


















