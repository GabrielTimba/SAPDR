<?php
    include('header-footer.php');
    require('../model/estatisticaDAO.php')
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
        <?php
            favicon();
        ?>
        
        <script src="../js/jquery.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/ajax.js"></script>
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
                    <h5 class="ml-3">Painel Administrativo</h5>
                    <p class="ml-5 dir">Inicio >> <span>Painel Administrativo</span></p>
                </div>
                <div class="row justify-content-center">
                    <table class="table col-lg-10 col-md-10 col-sm-10 tabela mt-5">
                        <thead >
                            <tr class="cor-creme">
                                <td class="titulo-tabela" colspan="2"><i class="fa fa-chart-bar mr-2"></i>Estatísticas Globais</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="texto-verde">Categoria</th>
                                <th class="texto-verde">Total</th>
                            </tr>
                            <tr>
                                <td>Doentes/Represententes</td>
                                <td class="contar" id="v1">
                                    <?php
                                        busca(1);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Doenças Raras</td>
                                <td class="contar" id="v2">
                                    <?php
                                        busca(2);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Profissionais da Saúde</td>
                                <td class="contar" id="v3">
                                    <?php
                                        busca(3);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Pedidos Pendetes</td>
                                <td class="contar" id="v4">
                                    <?php
                                        busca(4);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Mensagens Recebidas</td>
                                <td class="contar" id="v5">
                                    <?php
                                        busca(5);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Documentos Publicados</td>
                                <td class="contar" id="v6" >
                                    <?php
                                        busca(6);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Artigos Publicados</td>
                                <td class="contar" id="v7">
                                    <?php
                                        busca(7);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Campanhas Publicados</td>
                                <td class="contar" id="v8">
                                    <?php
                                        busca(8);
                                    ?>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $('.contar').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 1500,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        </script>
    </body>
</html>

