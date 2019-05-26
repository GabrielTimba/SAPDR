<?php
    include('header-footer.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Lista de Profissionais | Admin</title>
        
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

            <!--Conteudo-->
            <div class="container-fluid" id="conteudo">
                <div class="row conteudo-dir pt-4">
                    <h5 class="ml-3">Profissional da Saúde</h5>
                    <p class="ml-5 dir"><a href="#">Inicio</a> >> Usuários >> <span class="text-sucess"> Profissional da Saúde</span></p>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-11 ">
                        <div class="float-right">
                            
                            <a class="btn btn-primary ml-5 " href="registar-profissional.php">
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
                                <td class="titulo-tabela" colspan="4"><i class="fa fa-list mr-2"></i>Lista de Profissionais</td>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="texto-verde">Nome</th>
                                <th class="texto-verde">Email</th>
                                <th class="texto-verde">Unidade Hospitalar</th>
                                <th class="texto-verde">Accao</th>
                            </tr>
                            <tr>
                                <td>Nome 1</td>
                                <td>follegelricardo@gmail.com</td>
                                <td>Hospital 1</td>
                                <td> 
                                    <a href="Registar Profissional.html" class="btn cor-verde">Editar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nome 2</td>
                                <td>follegelricardo@gmail.com</td>
                                <td>Hospital 2</td>
                                <td> 
                                    <a href="Registar Profissional.html" class="btn cor-verde">Editar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nome 3</td>
                                <td>follegelricardo@gmail.com</td>
                                <td>Hospital 3</td>
                                <td> 
                                    <a href="Registar Profissional.html" class="btn cor-verde">Editar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nome 4</td>
                                <td>follegelricardo@gmail.com</td>
                                <td>Hospital 4</td>
                                <td> 
                                    <a href="Registar Profissional.html" class="btn cor-verde">Editar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nome 5</td>
                                <td>follegelricardo@gmail.com</td>
                                <td>Hospital 4</td>
                                <td> 
                                    <a href="Registar Profissional.html" class="btn cor-verde">Editar</a>
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
        
    </body>
</html>



