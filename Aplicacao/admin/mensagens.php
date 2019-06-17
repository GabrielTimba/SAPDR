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
        <link rel="stylesheet" href="../css/painel-admin.css">
        <?php
            favicon();
        ?>
        
        <script src="../js/jquery.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.js"></script>
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

            <div class="container-fluid" id="conteudo">
                
                <div class="row conteudo-dir pt-4">
                    <h5 class="ml-3">Mensagens</h5>
                    <p class="ml-5 dir"><a href="#">Inicio</a> >><span class="text-sucess">Mensagens</span></p>
                </div>

                

               <div id="conteudo1">
                    <div class="row mt-2">
                        <div class="col-sm-11 ">
                            <div class="float-right">
                                <a class="btn btn-danger ml-2" href="">
                                        <i class="fa fa-trash"></i>    
                                </a>   
                            </div>
                            
                        </div>
                            
                    </div>
                    <div class="row justify-content-center">

                        <table class="table table-bordered table-hover tabela col-lg-10 col-md-10 col-sm-10 tabela mt-2">
                            <thead >
                                <tr class="cor-creme">
                                    <td class="titulo-tabela " colspan="4"><i class="fa fa-list mr-2"></i>Lista de Mensagens</td>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="texto-verde text-center" style="width:2px;">
                                        <input type="checkbox" onclick="selecionar()">
                                    </th>
                                    <th class="texto-verde">Email</th>
                                    <th class="texto-verde">Assunto</th>
                                    <th class="texto-verde" >
                                        <a href="">Accao</a>
                                    </th>
                                </tr>
                                <?php
                                    include_once("../model/mensagemAdminDAO.php");
                                    listaMsg();
                                ?>

                            </tbody>
                        </table>

                    </div>
               </div>

               <!--interfaca para responder mensagens de suporte-->
                <div id="conteudo2" class="mt-4">
                    <div class="row justify-content-center">
                        
                    
                        <form action="../model/mensagemAdminDAO.php" method="POST">
                            <div class="form-row mt-3">
                                <div class="form-group col-sm-6 ">
                                    <label for="Assunto" >Assunto:</label>
                                    <input type="text" name="assunto" class="form-control" 
                                    value="<?php
                                               BuscaMensagemId($_GET['idMensagem'],1);
                                            ?>"
                                     placeholder="Assunto" readonly>
                                </div>
                                
                            </div> 
                            <div class="form-row" id="email">
                                <div class="form-group col-sm-6">
                                    <label for="Email" >Email:</label>
                                    <input type="email" name="email" class="form-control" 
                                    value="<?php
                                                BuscaMensagemId($_GET['idMensagem'],2);
                                            ?>"
                                    placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="Messagem">Messagem:</label>
                                    <textarea class="form-control" name="mensagem" id="Messagem" cols="100" rows="7" readonly>
                                        <?php
                                            BuscaMensagemId($_GET['idMensagem'],3);
                                        ?>
                                    </textarea>
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="form-group col-12">
                                    <label for="resposta">Resposta:</label>
                                    <textarea class="form-control" name="resposta" id="resposta" cols="100" rows="7" placeholder="Responda a mensagem neste campo"></textarea>
                                </div>

                            </div>

                            <div class="row float-right">
                                <div class="col-5">
                                    <button class="btn btn-outline-danger botoes" name="submeter">
                                        <a href="mensagens.php">Voltar</a> 
                                    </button>
                                </div>
                                <div class="col-5">
                                    <input type="submit" class="btn btn-outline-primary" name="responder" value="responder">
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

        <script>
            $(document).ready(function(){
                $('#conteudo2').hide();
                $('#email').hide();
               // $('.lerMais').click(function(){
                    <?php
                        if(isset($_GET['idMensagem'])) {
                    ?>
                            $('#conteudo2').show();
                            $('#conteudo1').hide();
                    <?php
                        }
                    ?>
                     
               // });

            });
        </script>
    </body>
 </html>   