<?php
    include('header-footer.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Publicações | Admin</title>
        
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/fonts.css">
        <link rel="stylesheet" href="../lib/fontawesome/css/all.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/painel-admin.css">
        <link rel="stylesheet" href= "../css/publicar-admin.css">
        <link rel="icon" type="imagem/png" href="animated_favicon1.gif" type="imagem/gif"/>
        
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
                    <h5 class="ml-3">Publicações</h5>
                    <p class="ml-5 dir"><a href="#">Inicio</a> >> Publicações >><span class="text-sucess"> Documentos</span></p>
                </div>					
	
                <div class="row justify-content-center">
                    <div class= "col-sm-10">
                
                        <h2>Adicionar um documento</h2><br>
                        <form action="" method="post" class="col-sm-12 cor-borda p-3">    
                            Titulo: <br>
                            <input type="text" size="30" name="texto"><br><br>
                            Descricao: <br> 
                            <textarea name="" id="" cols="70" rows="6"></textarea>
                            <!-- <div class="image-upload">
                                <label for="file-input">
                                    <img src="https://goo.gl/pB9rpQ"/>
                                </label>
                                <input type="file"  name="file-651" size="40"  accept=".jpg,
                                .jpeg,.png,.gif,.pdf,.doc,.docx,.ppt,.pptx,.odt,.avi,.ogg,.m4a,.mov,.mp3,.mp4,.mpg,.wav,.wmv" aria-invalid="false" />
                            </div><br />-->
                            <div class="image-upload">
                                <input  type="file"/>
                                <!-- <label for="file-input">
                                    <img src="../media/images.png"/>
                                </label>
                            </div>--><br>
                            <p class="row justify-content-center">
                                    <a class="btn btn-dark btn-large btn-primary mr-3"
                                        href="documentos-admin.html">Cancelar</a>
                                <a class="btn btn-dark btn-large btn-primary" href="#">
                                        Publicar</a>
                            </p>
                        </form>
                         
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