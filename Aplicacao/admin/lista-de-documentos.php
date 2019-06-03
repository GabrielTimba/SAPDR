<?php
    include('header-footer.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Documentos | Admin</title>
        
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/fonts.css">
        <link rel="stylesheet" href="../lib/fontawesome/css/all.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/painel-admin.css">
		<link rel="stylesheet" href= "../css/documentos-admin.css">
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
                    <h5 class="ml-3">Documentos</h5>
                    <p class="ml-5 dir"><a href="#">Inicio</a> >> Publicações >><span class="text-sucess"> Documentos</span></p>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-11 ">
                        <div class="float-right">
                            
                            <a class="btn btn-primary ml-5 " href="pub-documentos.php">
                                    <i class="fa fa-plus"></i>
                            </a>
                            <a class="btn btn-danger ml-2" href="">
                                    <i class="fa fa-trash"></i>    
                            </a>   
                        </div>
                        
                    </div>
                     
                </div>
                <div class="row justify-content-center">
                    <div class="table-responsive col-sm-10">
                        <table class="table table-bordered table-hover tabela mt-2">
                            <thead >
                                <tr class="cor-creme">
                                    <td class="titulo-tabela" colspan="5"><i class="fa fa-list mr-2"></i>Lista de Documentos</td>
                                    
                                </tr>
                                <tr>
                                    <th class="texto-verde text-center" style="width:2px;">
                                        <input type="checkbox" onclick="selecionar()">
                                    </th>
                                    <th class="texto-verde">Titulo</th>
                                    <th class="texto-verde">Descricao</th>
                                    <th class="texto-verde">Arquivo</th>
                                    <th class="texto-verde" >
                                        <a href="">Acção</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody id="tabela-corpo"> 
                                <?php
                                    include_once("../model/documentosDAO.php");
                                    listaDoc();
                                ?> 
                            
                            </tbody>
                        </table>
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