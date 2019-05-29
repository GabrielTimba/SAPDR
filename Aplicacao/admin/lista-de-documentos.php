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

					<div id="icones">
                        
                    </div>   		
							
                    
                    
                    <div class="row justify-content-center">
                            
                            <table class="table col-lg-10 col-md-10 col-sm-10 tabela mt-5">
                                <thead >
                                    <tr class="cor-creme">
                                        <td class="titulo-tabela" colspan="4"><i class="fa fa-futbol-o"></i>Lista de documentos
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-dark " href="pubdocumentos-admin.php" class="ligacoes">
                                                    <i class="fa fa-plus mt-2"></i>
                                            </a>
                                            <i class="fa fa-trash"></i>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="texto-verde">Marca</th>
                                        <th class="texto-verde">Titulo</th>
                                        <th class="texto-verde">Data de publicacao</th>
                                        <th class="texto-verde">Substituir arquivo</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="marcar">
                                        </td>
                                        <td>relatorio 1</td>
                                        <td>xx/xx/20xx</td>
                                        <td><i><i class="fa fa-upload"></i></td>
                                    </tr>
                                    <tr>
                                            <td>
                                                    <input type="checkbox" name="marcar">
                                                </td>
                                                <td>relatorio 1</td>
                                                <td>xx/xx/20xx</td>
                                                <td><i><i class="fa fa-upload"></i></td>
                                    </tr>
                                    <tr>
                                            <td>
                                                    <input type="checkbox" name="marcar">
                                                </td>
                                                <td>relatorio 1</td>
                                                <td>xx/xx/20xx</td>
                                                <td><i><i class="fa fa-upload"></i></td>
                                    </tr>
                                    <tr>
                                            <td>
                                                    <input type="checkbox" name="marcar">
                                                </td>
                                                <td>relatorio 1</td>
                                                <td>xx/xx/20xx</td>
                                                <td><i><i class="fa fa-upload"></i></td>
                                    </tr>
                                    <tr>
                                            <td>
                                                    <input type="checkbox" name="marcar">
                                                </td>
                                                <td>relatorio 1</td>
                                                <td>xx/xx/20xx</td>
                                                <td><i><i class="fa fa-upload"></i></td>
                                    </tr>
                                    <tr>
                                            <td>
                                                    <input type="checkbox" name="marcar">
                                                </td>
                                                <td>relatorio 1</td>
                                                <td>xx/xx/20xx</td>
                                                <td><i><i class="fa fa-upload"></i></td>
                                    </tr>
                                    <tr>
                                            <td>
                                                    <input type="checkbox" name="marcar">
                                                </td>
                                                <td>relatorio 1</td>
                                                <td>xx/xx/20xx</td>
                                                <td><i><i class="fa fa-upload"></i></td>
                                    </tr>
                                    <tr>
                                            <td>
                                                    <input type="checkbox" name="marcar">
                                                </td>
                                                <td>relatorio 1</td>
                                                <td>xx/xx/20xx</td>
                                                <td><i><i class="fa fa-upload"></i></td>
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