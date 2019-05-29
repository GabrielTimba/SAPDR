<?php
    include('cabecalho-rodape.php');
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
						<a class="nav-link" href="#artigo-1">Artigo 1</a>				
						<a class="nav-link" href="#artigo-2">Artigo 2</a>
                        <a class="nav-link" href="#artigo-3">Artigo 3 ddddddddddd dddddddddddddd</a>
					</nav>
				</nav>	
			</div>


            <div class="col-md-9 col-sm-12">
                <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" id="scrolArtigos">
                    
                    <article class="col-sm-12 artigo" id="artigo-1">
                        <h2>Artigo 1</h2>
                        <p> Nullam hendrerit justo non leo aliquet imperdiet. Etiam in sagittis lectus. Suspendisse ultrices placerat accumsan.
                            Mauris quis dapibus orci. In dapibus velit blandit pharetra tincidunt. Quisque non sapien nec lacus condimentum
                            facilisis ut iaculis enim. Sed viverra interdum bibendum. Donec ac sollicitudin dolor. Sed fringilla vitae lacus at
                            rutrum. Phasellus congue vestibulum ligula sed consequat.</p>
                        <p>Vestibulum consectetur scelerisque lacus, ac fermentum lorem convallis sed. Nam odio tortor, dictum quis malesuada
                            at, pellentesque vitae orci. Vivamus elementum, felis eu auctor lobortis, diam velit egestas lacus, quis fermentum
                            metus ante quis urna. Sed at facilisis libero. Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Vestibulum bibendum blandit dolor. Nunc orci dolor, molestie nec nibh in, hendrerit
                            tincidunt ante. Vivamus sem augue, hendrerit non sapien in, mollis ornare augue.</p>
                        <ul class="list-unstyled footer-icone" >
                            <li class="list-inline-item cor-cizenta">Partilhar:</li>
                            <li class="list-inline-item"><a href=""><i class="fab  fa-facebook-square text-primary"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fab fa-whatsapp text-success"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fab  fa-instagram text-warning"></i></a></li>
                        </ul>
                        <hr>
                        <small >Actualizado em: 03/06/2019 <br> Autor: Jose Manuel Cossa</small>
                    </article> 
                    

                    <article class="col-sm-12 artigo mt-3" id="artigo-2">
                        <h2 >Artigo 2</h2>
                        <img class="img-thumbnail my-3" id="img-st" src="imgs/pedido-1.png"> 
                        <p> Nullam hendrerit justo non leo aliquet imperdiet. Etiam in sagittis lectus. Suspendisse ultrices placerat accumsan.
                            Mauris quis dapibus orci. In dapibus velit blandit pharetra tincidunt. Quisque non sapien nec lacus condimentum
                            facilisis ut iaculis enim. Sed viverra interdum bibendum. Donec ac sollicitudin dolor. Sed fringilla vitae lacus at
                            rutrum. Phasellus congue vestibulum ligula sed consequat.</p>
                        <p>Vestibulum consectetur scelerisque lacus, ac fermentum lorem convallis sed. Nam odio tortor, dictum quis malesuada
                            at, pellentesque vitae orci. Vivamus elementum, felis eu auctor lobortis, diam velit egestas lacus, quis fermentum
                            metus ante quis urna. Sed at facilisis libero. Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Vestibulum bibendum blandit dolor. Nunc orci dolor, molestie nec nibh in, hendrerit
                            tincidunt ante. Vivamus sem augue, hendrerit non sapien in, mollis ornare augue.</p>
                        <ul class="list-unstyled footer-icone" >
                            <li class="list-inline-item cor-cizenta">Partilhar:</li>
                            <li class="list-inline-item"><a href=""><i class="fab  fa-facebook-square text-primary"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fab fa-whatsapp text-success"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fab  fa-instagram text-warning"></i></a></li>
                        </ul>
                        <hr>
                        <small >Actualizado em: 03/06/2019 <br> Autor: Jose Manuel Cossa</small>
                    </article>

                    <article class="col-sm-12 artigo mt-3" id="artigo-3">
                        <h2 >Artigo 3</h2>
                        <img class="img-thumbnail my-3" id="img-st" src="imgs/pedido-1.png"> 
                        <p> Nullam hendrerit justo non leo aliquet imperdiet. Etiam in sagittis lectus. Suspendisse ultrices placerat accumsan.
                            Mauris quis dapibus orci. In dapibus velit blandit pharetra tincidunt. Quisque non sapien nec lacus condimentum
                            facilisis ut iaculis enim. Sed viverra interdum bibendum. Donec ac sollicitudin dolor. Sed fringilla vitae lacus at
                            rutrum. Phasellus congue vestibulum ligula sed consequat.</p>
                        <p>Vestibulum consectetur scelerisque lacus, ac fermentum lorem convallis sed. Nam odio tortor, dictum quis malesuada
                            at, pellentesque vitae orci. Vivamus elementum, felis eu auctor lobortis, diam velit egestas lacus, quis fermentum
                            metus ante quis urna. Sed at facilisis libero. Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Vestibulum bibendum blandit dolor. Nunc orci dolor, molestie nec nibh in, hendrerit
                            tincidunt ante. Vivamus sem augue, hendrerit non sapien in, mollis ornare augue.</p>
                            <p> Nullam hendrerit justo non leo aliquet imperdiet. Etiam in sagittis lectus. Suspendisse ultrices placerat accumsan.
                            Mauris quis dapibus orci. In dapibus velit blandit pharetra tincidunt. Quisque non sapien nec lacus condimentum
                            facilisis ut iaculis enim. Sed viverra interdum bibendum. Donec ac sollicitudin dolor. Sed fringilla vitae lacus at
                            rutrum. Phasellus congue vestibulum ligula sed consequat.</p>
                        <p>Vestibulum consectetur scelerisque lacus, ac fermentum lorem convallis sed. Nam odio tortor, dictum quis malesuada
                            at, pellentesque vitae orci. Vivamus elementum, felis eu auctor lobortis, diam velit egestas lacus, quis fermentum
                            metus ante quis urna. Sed at facilisis libero. Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Vestibulum bibendum blandit dolor. Nunc orci dolor, molestie nec nibh in, hendrerit
                            tincidunt ante. Vivamus sem augue, hendrerit non sapien in, mollis ornare augue.</p><p> Nullam hendrerit justo non leo aliquet imperdiet. Etiam in sagittis lectus. Suspendisse ultrices placerat accumsan.
                            Mauris quis dapibus orci. In dapibus velit blandit pharetra tincidunt. Quisque non sapien nec lacus condimentum
                            facilisis ut iaculis enim. Sed viverra interdum bibendum. Donec ac sollicitudin dolor. Sed fringilla vitae lacus at
                            rutrum. Phasellus congue vestibulum ligula sed consequat.</p>
                        <p>Vestibulum consectetur scelerisque lacus, ac fermentum lorem convallis sed. Nam odio tortor, dictum quis malesuada
                            at, pellentesque vitae orci. Vivamus elementum, felis eu auctor lobortis, diam velit egestas lacus, quis fermentum
                            metus ante quis urna. Sed at facilisis libero. Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Vestibulum bibendum blandit dolor. Nunc orci dolor, molestie nec nibh in, hendrerit
                            tincidunt ante. Vivamus sem augue, hendrerit non sapien in, mollis ornare augue.</p>
                        <ul class="list-unstyled footer-icone" >
                            <li class="list-inline-item cor-cizenta">Partilhar:</li>
                            <li class="list-inline-item"><a href=""><i class="fab  fa-facebook-square text-primary"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fab fa-whatsapp text-success"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fab  fa-instagram text-warning"></i></a></li>
                        </ul>
                        <hr>
                        <small >Actualizado em: 03/06/2019 <br> Autor: Jose Manuel Cossa</small>
                    </article>
                    
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