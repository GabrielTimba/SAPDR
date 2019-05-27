<?php
    include('cabecalho-rodape.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Relatorio</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="lib/fontawesome/css/all.css">
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/relatorio.css">
    
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>

    <header class="container-fluid navbar-expand-sm">
        <?php
            cabecalho();
        ?>  
    </header>
    <div class="container border my-5 py-3">
        <label class="text-success">Relatorios</label><br/>
        <div class="row justify-content-center">
            <div class="col-10 border ml-2 text-center cor-verde">
                <label class=" py-1 text-white " >Ano 2019</label>
            </div>
        </div>
        
        <div id="janeiro">
            <label class="border py-1 px-3 ml-4 my-2 bg-primary text-light" >Janeiro</label>
            <div class="border ml-5 py-3">
                <div class="row ml-2">
                    <div class="col-7 ">
                        Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="col-3">
                        <i class=" far fa-file-pdf fa-3x icon"></i>
                    </div>
                </div>
                <div class="row mt-2 ml-3">
                    <div class="col-2">
                        <button class="btn botao" data-toggle="modal" data-target="#siteModal">Descricao</button>
                    </div>
                    <div class="col-2">
                        <button class="btn botao">Baixar</button>
                    </div>
                </div>
            </div>

            <div class="border ml-5 py-3 my-2">
                <div class="row ml-2">
                    <div class="col-7 ">
                        Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="col-3">
                        <i class=" far fa-file-pdf fa-3x icon"></i>
                    </div>
                </div>
                <div class="row mt-2 ml-3">
                    <div class="col-2">
                        <button class="btn botao" data-toggle="modal" data-target="#siteModal">Descricao</button>
                    </div>
                    <div class="col-2">
                        <button class="btn botao">Baixar</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="fevereiro">
        <label class="border py-1 px-3 ml-4 my-2 bg-primary text-light " >Fevereiro</label>
            <div class="border ml-5 py-3">
                <div class="row ml-2">
                    <div class="col-7 ">
                        Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="col-3">
                        <i class=" far fa-file-pdf fa-3x icon"></i>
                    </div>
                </div>
                <div class="row mt-2 ml-3">
                    <div class="col-2">
                        <button class="btn botao">Descricao</button>
                    </div>
                    <div class="col-2">
                        <button class="btn botao">Baixar</button>
                    </div>
                </div>
            </div>

            <div class="border ml-5 py-3 my-2">
                <div class="row ml-2">
                    <div class="col-7 ">
                        Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="col-3 my-auto">
                        <i class=" far fa-file-pdf fa-3x icon "></i>
                    </div>
                </div>
                <div class="row mt-2 ml-3">
                    <div class="col-2">
                        <button class="btn botao">Descricao</button>
                    </div>
                    <div class="col-2">
                        <button class="btn botao">Baixar</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="marco">
        </div>
    </div>

    <!--Rodape-->
    <?php
        rodape();
    ?>

    <div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title">Relatorio 01</h1>
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