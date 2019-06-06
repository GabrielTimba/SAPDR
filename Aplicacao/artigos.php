<?php
    include('cabecalho-rodape.php');
    include_once('model/postDAO.php');
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Artigos | SAPDR</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/artigos.css">
    <?php
        favicon();
    ?>
    
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>
    <!--Cabecalho -->
    <header class="container-fluid navbar-expand-sm mb-5">
        <?php
            cabecalho();
        ?>

        <div class="container">

            <div class="row mt-3">
                <div class="col-12">
                    <p id="dir"><a href="index.html"><i class="fas fa-home mr-1"></i>Inicio</a> > Publicações > <span class="texto-verde">Artigos</span></p>
                    <hr class="cor-verde">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1>Artigos</h1>
                </div>
            </div>

        </div>
    </header>

    <!--Conteudo-->
    <div class="container">
        <div class="row mb-5">
            
            <div class="col-md-3 col-sm-12">
				<nav id="navbarVertical" class="navbar navbar-light bg-light nav-artigos">
					<nav class="nav nav-pills flex-column ">						
						<?php lerTitulos(2); ?>				
					</nav>
				</nav>	
			</div>


            <div class="col-md-9 col-sm-12">
                <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" id="scrolArtigos"> 
                    <?php lerArtigos(2); ?> 
                </div>
            </div>

        </div>
     </div>    

    <!--Rodape-->
    <?php
        rodape();
    ?>

</body>

</html>