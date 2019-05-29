<?php
    include('header-footer.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Painel Administrativo | Admin</title>
        
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/fonts.css">
        <link rel="stylesheet" href="../lib/fontawesome/css/all.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/painel-admin.css">
<<<<<<< HEAD
        <?php
            favicon();
        ?>
=======
>>>>>>> f1906dfdfdadf23f96081073fc1e5ff7d5b87b96
        
        <script src="../js/jquery.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/painel-admin.js"></script>
    </head>
    <body>
<<<<<<< HEAD
        <!--Cabecalho-->
=======
    <!--Cabecalho-->
>>>>>>> f1906dfdfdadf23f96081073fc1e5ff7d5b87b96
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
<<<<<<< HEAD
                
                <div class="row conteudo-dir pt-4">
                    <h5 class="ml-3">Campanhas</h5>
                    <p class="ml-5 dir"><a href="painel-admin.html">Inicio</a> >><span class="text-sucess">Campanhas</span></p>
                </div>

                <div class="row mt-2">
                    <div class="col-sm-11 ">
                        <div class="float-right">
                            <a class="btn btn-primary ml-5 " href="adicionar campanha.php">
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
                                <td class="titulo-tabela" colspan="3"><i class="fa fa-list mr-2"></i>Lista de Campanhas</td>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="texto-verde">Tema da Campanha</th>
                                <th class="texto-verde">Autor</th>
                                <th class="texto-verde" >
                                    <a href="">Accao</a>
                                </th>
                            </tr>
                            <tr>
                                <td>Campanha 1</td>
                                <td>Folege</td>
                                <td> 
                                    <button class="btn cor-verde" >
                                        <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Campanha 2</td>
                                <td>Folege</td>
                                <td> 
                                    <button class="btn cor-verde" >
                                        <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Campanha 3</td>
                                <td>Folege</td>
                                <td> 
                                    <button class="btn cor-verde" >
                                        <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Campanha 4</td>
                                <td>Folege</td>
                                <td> 
                                    <button class="btn cor-verde" >
                                        <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Campanha 5</td>
                                <td>Folege</td>
                                <td> 
                                    <button class="btn cor-verde" >
                                        <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
=======
        
        <div class="row conteudo-dir pt-4">
                <h5 class="ml-3">Campanhas</h5>
                <p class="ml-5 dir"><a href="painel-admin.html">Inicio</a> >><span class="text-sucess">Campanhas</span></p>
            </div>
    
            <div class="row mt-2">
                <div class="col-sm-11 ">
                    <div class="float-right">
                        <a class="btn btn-primary ml-5 " href="adicionar campanha.php">
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
                            <td class="titulo-tabela" colspan="3"><i class="fa fa-list mr-2"></i>Lista de Campanhas</td>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="texto-verde">Tema da Campanha</th>
                            <th class="texto-verde">Autor</th>
                            <th class="texto-verde" >
                                <a href="">Accao</a>
                            </th>
                        </tr>
                        <tr>
                            <td>Campanha 1</td>
                            <td>Folege</td>
                            <td> 
                                <button class="btn cor-verde" >
                                    <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Campanha 2</td>
                            <td>Folege</td>
                            <td> 
                                <button class="btn cor-verde" >
                                    <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Campanha 3</td>
                            <td>Folege</td>
                            <td> 
                                <button class="btn cor-verde" >
                                    <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Campanha 4</td>
                            <td>Folege</td>
                            <td> 
                                <button class="btn cor-verde" >
                                    <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Campanha 5</td>
                            <td>Folege</td>
                            <td> 
                                <button class="btn cor-verde" >
                                    <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                                </button>
                            </td>
                        </tr>
    
                    </tbody>
                </table>
    
            </div>
>>>>>>> f1906dfdfdadf23f96081073fc1e5ff7d5b87b96

                <!--Rodape-->
                <?php
                    rodapeAdmin();
                ?>
<<<<<<< HEAD
            </div>

        </div>
=======

            </div>
            
        </div>
    </body>
</html>



>>>>>>> f1906dfdfdadf23f96081073fc1e5ff7d5b87b96
