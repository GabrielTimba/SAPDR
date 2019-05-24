 <?php
    include('cabecalho-rodape.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacte-nos | SAPDR</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Contacte-nos.css">
    <link rel="stylesheet" href="lib/fontawesome/css/all.css">
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
                    <p id="dir"><a href="index.html"><i class="fas fa-home mr-1"></i>Inicio</a> > <span
                            class="texto-verde">Contacte-nos</span></p>
                    <hr class="cor-verde">
                </div>
            </div>
    
            <div class="row">
                <div class="col-12">
                    <h1>Contacte-nos</h1>
                </div>
            </div>
    
        </div>
    </header>
    <div id="geral" class="container  border col-8 my-5 bg-light borda-form ">
        <form action="" method="post"  class="ml-5">
                
            <h2 class="control-form mt-2">CONTACTE-NOS</h2>
            <div class="form-row ">
                <div class="form-group col-sm-6 ">
                    <label for="Assunto" >Assunto:</label>
                    <input type="text"   class="form-control"  placeholder="Assunto" required>
                </div>
                
            </div> 
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="Email" >Email:</label>
                    <input type="email" class="form-control" placeholder="Email" required>
                </div>
            </div>
            <div class="form-row">

                <div class="form-group col-8">
                    <label for="Messagem">Messagem:</label>
                    <textarea class="form-control" id="Messagem" cols="70" rows="7" required></textarea>
                </div>

            </div>
 
            <p class="row justify-content-center">
                <button class="btn btn-outline-danger botoes mr-3" type="reset">Apagar</button>
                <button class="btn btn-outline-primary botoes" type="submit">Enviar</button>
            </p>
            
        </form>
    </div>
    
    <!--Rodape-->
    <?php
        rodape();
    ?>
</body>
</html>