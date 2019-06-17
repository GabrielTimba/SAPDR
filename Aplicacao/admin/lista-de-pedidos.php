<?php
    include('header-footer.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Pedidos de apoio | Admin</title>
        
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
                    <h5 class="ml-3">Pedidos de Apoio</h5>
                    <p class="ml-5 dir"><a href="#">Inicio</a> >> Mensagens >> <span class="text-sucess"> Pedidos de Apoio</span></p>
                </div>
                
                <div class="row mt-2 justify-content-center">
                    <div class="col-sm-11 ml-3">
                        <div class="float-right">
                            <a class="btn btn-danger my-2" href="">
                                <i class="fa fa-trash"></i>
                            </a>   
                        </div>
                    </div>     
                </div>
               
          
                <div class="row mb-5 justify-content-center"> 
                    <div class="col-sm-11 border">
                            <div class="row justify-content-center bg-white">
                                <div class="col-sm-12 borda-titulo border mb-2">
                                    <label><i class=""></i>Gerir Pedidos</label>
                                </div>
                                <!--lista do tipo -->
                                <ul class="col-sm-11 nav nav-tabs ml-2 mb-3 bg-white" id="tipo" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active active1 texto-verde" id="" data-toggle="pill" href="#tipo1">Pendentes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link texto-verde" id="" data-toggle="pill" href="#tipo2">Pubicados</a>
                                    </li>
                                
                                    </li>
                                </ul>
                            </div>

                            <!--conteudo da lista tipo -->
                            <div class = "row justify-content-center bg-white">

                                <div class="col-sm-11 tab-content" id="nav-pills-tipo">
                                    
                                    <div class="tab-pane fade show active" id="tipo1" role="tabpanel">
                                        <div class="">
                                            <table class="table table-bordered table-hover col-12 tabela mt-2" id="i1">
                                                <thead>
                                                    <tr class="cor-creme">
                                                        <td class="titulo-tabela" colspan="4"><i class="fa fa-list mr-2"></i>Pendentes</td>
                                                    </tr>
                                                    <tr>
                                                    <th class="texto-verde text-center" style="width:2px;">
                                                        <input type="checkbox" onclick="selecionar()">
                                                    </th>
                                                    <th class="texto-verde">Benificiario</th>
                                                    <th class="texto-verde">Pedido</th>
                                                    <th class="texto-verde" >
                                                        <a href="">Acção</a>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tbody id="tabela-corpo"> 
                                                <?php
                                                    include_once("../model/pedidosDAO.php");
                                                    listaPedidos("Pendente");
                                                ?> 
                                            
                                            </tbody>
                                            </table>   
                                        </div>
                                        
                                        
                                    </div>
                            
                                    <div class="tab-pane fade" id="tipo2" role="tabpanel">
                                        <div class="">
                                            <table class="table table-bordered table-hover col-12 tabela mt-2" id="i2">
                                                <thead >
                                                    <tr class="cor-creme">
                                                        <td class="titulo-tabela" colspan="4"><i class="fa fa-list mr-2"></i>Publicados</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                    <tr>
                                                    <th class="texto-verde text-center" style="width:2px;">
                                                        <input type="checkbox" onclick="selecionar()">
                                                    </th>
                                                    <th class="texto-verde">Benificiario</th>
                                                    <th class="texto-verde">Pedido</th>
                                                    <th class="texto-verde" >
                                                        <a href="">Acção</a>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tbody id="tabela-corpo"> 
                                                <?php
                                                    include_once("../model/pedidosDAO.php");
                                                    listaPedido("Publicado");
                                                ?> 
                                            
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                
                                    <div class="tab-pane fade" id="tipo3" role="tabpanel">
                                        <div class="">
                                            <table class="table table-bordered table-hover col-12 tabela mt-2" id="i3">
                                                <thead >
                                                    <tr class="cor-creme">
                                                        <td class="titulo-tabela" colspan="4"><i class="fa fa-list mr-2"></i>Associacoes</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <th class="texto-verde text-center" style="width:2px;">
                                                            <input type="checkbox" onclick="selecionar()">
                                                        </th>
                                                        <th class="texto-verde">Nome</th>
                                                        <th class="texto-verde">Localizacao</th>
                                                        <th class="texto-verde">Tipo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        //include_once("model/instituicaoDAO.php");
                                                        //instituicao(2);
                                                    ?>   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

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