<?php
    include('bd.php');

    if(isset($_GET['acao']) && ($_GET['acao'] == 'inserir')) {
        inserir($_GET['tipo']);
    }

    if(isset($_GET['acao']) && ($_GET['acao'] == 'editar')) {
        $id = $_GET['idPost'];
        header("Location: ../admin/adicionar-artigos.php?editar=true&&idPost=$id");
    }

    if(isset($_GET['acao']) && ($_GET['acao'] == 'lerArtigos')) {
        lerArtigos(1);
    }

   /* if(isset($_GET['acao']) && ($_GET['acao'] == 'apagar')) {
        apagar();
    }*/

    function inserir($tipo) {
        $conexao = getConexao();  //faz conexao com bd (metodo defenido no ficheiro bd.php)  

        //defenindo uma constante que contem uma instrucao sql (opcional)
        define('SQL',"CALL inserirPost(?,?,?,?);"); // '?' indicam o uso de prepared statment 
                                                          //para controlar injencoes sql

        //captura qualquer erro que pode ocorrer no prepared statment 
        if(!($stmt = $conexao->prepare(SQL))) { //'prepare()' prepara a insercao
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 

        //'bind_param' define variaveis que vao receber os dados 
        //Nota: nunca inserir dados diretamente ao inveis de definir vairiaveis, pode ocorrer um erro
        if(!($stmt->bind_param('ssss',$autor,$titulo,$artigo,$tipoPost))) { //captura qualquer erro que pode ocorrer
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }

        //Atribuindo valores as variaveis;
        //echo $_POST['artigo'];
        
        session_start();
        $autor = $_SESSION['nomeAdmin'];
        $titulo = $_POST['titulo'];
        $artigo = $_POST['artigo'];
        $tipoPost = $tipo;
    
        //executando
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        //Nota: apos a instrucao execute() pode-se atribuir novos valores as variaveis e executar novamente. 

        $stmt->close(); //fecha o prepared statment
        fechaConexao($conexao); //fecha a conexao com a bd (metodo defenido no ficheiro bd.php)
        if ($tipo == 'Artigo')
            header('Location:../admin/adicionar-artigos.php?inserido=true');
        elseif ($tipo == 'Campanha') {
            header('Location:../admin/adicionar-campanha.php?inserido=true');
        }
    }

    
    function lerPostID($id) {
        $conexao = getConexao();
        define('SQL', "CALL lerPosts(?,?);");
        
        if(!($stmt = $conexao->prepare(SQL))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('i',$n))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }
        
        $n = $id;
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        $resposta = $stmt->get_result();
        
        if(mysqli_num_rows($resposta) === 1) {
            $linha = $resposta->fetch_assoc();
        //contruindo interface com dados
?>
            <!--Conteudo-->
            <div class="container-fluid" id="conteudo">
                    
                    <div class="row conteudo-dir pt-4">
                        <h5 class="ml-3">Editar Artigo</h5>
                        <p class="ml-5 dir"><a href="#">Inicio</a> >><span class="text-sucess">Artigos</span></p>
                    </div>

                    <div class="row my-2 justify-content-center">
                        <div class="col-sm-11">
                            <a class="btn btn-light bg-white cor-borda2 float-right" href="lista de artigos.php"><i class="fa fa-reply"></i></a>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-11 borda-titulo">
                            <label><i class="fa fa-pencil-alt mr-1"></i>Editar Artigo</label>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class=" border col-sm-11 bg-white " id="cadastro">
                            <form   id="" role="form" action="../model/artigosDAO.php?acao=actualizar" method="POST" accept-charset="utf-8">

                                <!-- SmartWizard html  -->
                                <div id="smartwizard">
                        
                                    <div id="form-step-0" role="form" data-toggle="validator">
                                        <div class="form-row">
                                            <div class="form-group col-sm-5 mt-2 ml-3">
                                                <label for="Autor" >Autor:</label>
                                                <input type="text"   class="form-control" name="autor" value="<?php echo $linha['autor'];?>" placeholder="Autor" required>
                                            </div>

                                        </div> 
                            
                                        <div class="form-row">
                                        
                                            <div class="form-group col-sm-5 mt-2 ml-3">
                                                <label for="Tipo" >Titulo:</label>
                                                <input type="text"   class="form-control" name="titulo" value="<?php echo $linha['titulo'];?> placeholder="Titulo" required>
                                            </div>
                                        </div> 

                                        <div class="form-row">
                                            <div class="form-group col-sm-8 mt-2 ml-3">
                                                <label for="artigo" >Artigo:</label>
                                                <textarea class="form-control" id="artigo" name="artigo" cols="100" rows="7" required><?php echo $linha['msg'];?></textarea>
                                            </div>
                                            
                                        </div>

                                        <div class="form-row justify-content-center">
                                            
                                            <button class="btn  btn-primary mr-2 mb-3" type="Submit">Submeter</button>
                                            <button type="reset" id="cancelar" class="btn  btn-danger mr-3 mb-3">Cancelar</button>
                                            
                                        </div>
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
<?php
        }   
        $stmt->close();
        fechaConexao($conexao);
    }

    
    function lerArtigos($dados) {
        $conexao = getConexao();
       
        $sql = "CALL lerPosts(?,?);";

        if(!($stmt = $conexao->prepare($sql))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('si',$tipo,$n))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }
        
        $tipo = "Artigo";
        $n = $dados;

        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        $resposta = $stmt->get_result();

        if($resposta->num_rows>0) {
            //global $cont;
            $cont = 1;
            switch ($dados) {
                case 1:
                    $cb = 1;
                    while($linha = $resposta->fetch_assoc()) {
                        echo'
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="cb-'.$cb.'" value="'.$linha['idPost'].'">
                                </td>
                                <td>'.$linha['titulo'].'</td>
                                <td>'.$linha['autor'].'</td>
                                <td> 
                                    <a class="btn cor-verde"  href="../model/postDao.php?id='.$linha['idPost'].'">
                                        <i class="fa fa-pencil-alt"></i> Editar
                                    </a>
                                </td>
                            </tr>
                
                        ';
                        $cb++;
                    }
                    break;
                case 2:
                    while($linha = $resposta->fetch_assoc()) {
?>
                        <article class="col-sm-12 artigo my-3 py-4" id="artigo-<?php echo $linha['idPost']; ?>">
                        <h2 class="mb-3"><?php echo $linha['titulo']; ?></h2>
                        <?php echo $linha['msg']; ?>
                        
                        <ul class="list-unstyled footer-icone mt-2" >
                            <li class="list-inline-item cor-cizenta">Partilhar:</li>
                            <li class="list-inline-item"><a href="#"><i class="fab  fa-facebook-square text-primary"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-whatsapp text-success"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab  fa-instagram text-warning"></i></a></li>
                        </ul>
                        <hr>
                        <h5 class="cor-cizenta">Actualizado em: <?php echo $linha['dataHora']; ?> <br> Autor: <?php echo $linha['autor']; ?></h5>
                    </article>                               
<?php
                    }
                    break;
                case 3:
                    # code...
                    break;
            }
            
?>
              
<?php             
        }
        $stmt->close();
        fechaConexao($conexao);
    }

    function lerTitulos($dados) {
        $conexao = getConexao();
       
        $sql = "CALL lerPosts(?,?);";

        if(!($stmt = $conexao->prepare($sql))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('si',$tipo,$n))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }
        
        $tipo = "Artigo";
        $n = $dados;

        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        $resposta = $stmt->get_result();

        if($resposta->num_rows>0) {
            //global $cont;
            $cont = 1;
            switch ($dados) {
                case 1:
                    
                    break;
                case 2:
                    while($linha = $resposta->fetch_assoc()) {
?>
                        <a class="nav-link" href="#artigo-<?php echo $linha['idPost']; ?>"><?php echo $linha['titulo']; ?></a>	                              
<?php
                    }
                    break;
                case 3:
                    # code...
                    break;
            }
            
?>
              
<?php             
        }
        $stmt->close();
        fechaConexao($conexao);
    }

    function lerCampanhas($dados) {
        $conexao = getConexao();
       
        $sql = "CALL lerPosts(?,?);";

        if(!($stmt = $conexao->prepare($sql))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('si',$tipo,$n))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }
        
        $tipo = "Campanha";
        $n = $dados;

        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        $resposta = $stmt->get_result();

        if($resposta->num_rows>0) {
            //global $cont;
            $cont = 1;
            switch ($dados) {
                case 1:
                    
                    break;
                case 2:
                    while($linha = $resposta->fetch_assoc()) {
?>
                        <div class="row mb-5">
            <article class="col-sm-12">
                <header class="mb-5">
                    <h1 class="mb-4 display-4 campanha-titulo"><?php echo $linha['titulo']; ?></h1>
                    <p >Actualizado em: <?php echo $linha['dataHora']; ?> <br> Autor: <?php echo $linha['autor']; ?></p>
                </header>
                
                <?php echo $linha['msg']; ?>

                <ul class="list-unstyled footer-icone" >
                    <li class="list-inline-item cor-cizenta">Partilhar:</li>
                    <li class="list-inline-item"><a href="#"><i class="fab  fa-facebook-square text-primary"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-whatsapp text-success"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab  fa-instagram text-warning"></i></a></li>
                </ul>

                <hr class="cor-verde mb-5">
            </article>
        </div>                               
<?php
                    }
                    break;
                case 3:
                    # code...
                    break;
            }
            
?>
              
<?php             
        }
        $stmt->close();
        fechaConexao($conexao);

    }

?>