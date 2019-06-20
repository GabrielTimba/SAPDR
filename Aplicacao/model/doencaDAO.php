<?php
    include('bd.php');

    //registar ou inserir dados de uma doenca na bd (BASE de DADOS)
    if((isset($_GET['acao'])) && ($_GET['acao'] == 'inserir')){
        inserir();
    }
    
    //editar uma doenca (usa o mesmo formulario de registo, mas carrega os dados correspodentes ao id)
    if(isset($_GET['id'])) {
        $id = $_GET['id'];       
       header('Location:../admin/registar-doencas.php?idDoenca='.$id);
    }

    //cancelar a edicao de uma doenca
    if(isset($_GET['cancelar'])) {
        unset($_SESSION['idDoenca']);
        header('Location: ../admin/lista-de-doencas.php');
    }

    //actualizar dados de uma doenca 
    if((isset($_GET['acao'])) && ($_GET['acao'] == 'actualizar')){
        actualizar($_GET['idUpdate']);
    }

    //apagar doenca na bd
    if((isset($_GET['acao'])) && ($_GET['acao'] == 'apagar')){
        apagar();
    }
    
    //consulta doencas depios de se eliminar uma doenca da bd class="text-center" 
    if((isset($_GET['acao'])) && ($_GET['acao'] == 'lerNomeTipo')){
        lerNomeTipo();
    }
    
    //consulta lista de doencas para o usuario (doente, visitante)
    if((isset($_GET['acao'])) && ($_GET['acao'] == 'lerDoencas')){
        lerDoencas($_GET['tipo']);
    }

    //consulta doenca em funcoa do nome pesquisado
    if((isset($_GET['acao'])) && ($_GET['acao'] == 'lerDoencaNome')){
        lerDoencaNome($_POST['pesquisa']);
    }

    //consulta doenca em funcoa do nome pesquisado no rodape
    if((isset($_GET['acao'])) && ($_GET['acao'] == 'pesquisarRodape')){
        $n = $_POST['pesqRodape'];
        header("Location:../doencas-raras.php?pesquisar=$n");
    }

    //insere dados na bd 
    function inserir() {
        $conexao = getConexao();  //faz conexao com bd (metodo defenido no ficheiro bd.php)  

        //recebendo dados do formulario de registo enviados pelo metodo POST
        $nome= $_POST['nome'];
        $tipo= $_POST['tipo'];
        $causas= $_POST['causas'];
        $sintomas= $_POST['sintomas'];
        $tratamentos= $_POST['tratamentos'];
        $prevencao= $_POST['prevencao'];

        //defenindo uma constante que contem uma instrucao sql (opcional)
        define('SQL',"CALL inserirDoenca(?,?,?,?,?,?);"); // '?' indicam o uso de prepared statment 
                                                          //para controlar injencoes sql

        //captura qualquer erro que pode ocorrer no prepared statment 
        if(!($stmt = $conexao->prepare(SQL))) { //'prepare()' prepara a insercao
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 

        //'bind_param' define variaveis que vao receber os dados 
        //Nota: nunca inserir dados diretamente ao inveis de definir vairiaveis, pode ocorrer um erro
        if(!($stmt->bind_param('ssssss',$nome1,$tipo1,$causas1, $sintomas1, $tratamentos1, $prevencao1))) { //captura qualquer erro que pode ocorrer
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }

        //Atribuindo valores as variaveis;
        $nome1 = $nome;
        $tipo1 = $tipo;
        $causas1 = $causas;
        $sintomas1 = $sintomas;
        $tratamentos1 = $tratamentos;
        $prevencao1 = $prevencao;
        
        //executando
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        //Nota: apos a instrucao execute() pode-se atribuir novos valores as variaveis e executar novamente. 

        $stmt->close(); //fecha o prepared statment
        fechaConexao($conexao); //fecha a conexao com a bd (metodo defenido no ficheiro bd.php)

        header('Location:../admin/registar-doencas.php');//redirecionando  
    }

    //le nome e tipo de uma doenca na bd e cria linhas de uma tabela HTML com dados
    function lerNomeTipo() {
        $conexao = getConexao();
        define('SQL',"CALL lerDoencas(?);");
        
        if(!($stmt = $conexao->prepare(SQL))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('i',$n))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }
        
        $n = 2;
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        $resposta = $stmt->get_result();

        //criar tabela 
        if($resposta->num_rows>0) {
            $cb = 1;
            while($linha = $resposta->fetch_assoc()) {
                echo'
                    <tr>
                        <td class="text-center">
                            <input type="checkbox" id="cb-'.$cb.'" value="'.$linha['id'].'">
                        </td>
                        <td>'.$linha['nome'].'</td>
                        <td>'.$linha['tipo'].'</td>
                        <td> 
                            <a class="btn cor-verde"  href="../model/doencaDAO.php?id='.$linha['id'].'" data-toggle="tooltip" title="Editar">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                        </td>
                    </tr>
                ';
                $cb++;
            }
        }
        
        $stmt->close();
        fechaConexao($conexao);
    }

    //le todos dados de uma doenca em funcao do id e cria formulario para edicao dos mesmos
    function lerDoencaID($id) {
        $conexao = getConexao();
        define('SQL', "CALL lerDoencaID(?);");
        
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
                    <h5 class="ml-3">Doenças Raras</h5>
                    <p class="ml-5 dir"><a href="#">Inicio</a> >> Doenças Raras >> <span class="text-sucess"> Editar Doença</span></p>
                </div>

                <div class="row my-2 justify-content-center">
                    <div class="col-sm-11">
                        <a class="btn btn-light bg-white cor-borda2 float-right" href="../model/doencaDAO.php?cancelar=true"><i class="fa fa-reply"></i></a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-11 borda-titulo">
                        <label><i class="fa fa-pencil-alt mr-1"></i>Editar de Doença</label>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class=" border col-sm-11 bg-white pb-3" id="cadastro">
                        <form  action="../model/doencaDAO.php?acao=actualizar&&idUpdate=<?php echo $id; ?>" id="myForm" role="form"  method="POST" accept-charset="utf-8">

                            <!-- SmartWizard html -->
                            <div id="smartwizard">
                                <ul class="mt-2">
                                    <li><a href="#step-1">Passo 1<br /><small>Nome e Tipo</small></a></li>
                                    <li><a href="#step-2">Passo 2<br /><small>Causas e Sintomas</small></a></li>
                                    <li><a href="#step-3">Passo 3<br /><small>Tratamentos e Prevenção</small></a></li>
                                    
                                </ul>
                    
                                <div>
                                    <div id="step-1">
                                        <div id="form-step-0" role="form" data-toggle="validator">
                                            <legend>Dados </legend>
                                            <div class="form-row">
                                                    <div class="form-group col-sm-5 mt-2 ml-3">
                                                        <label for="NomeDoenca" >Nome da Doença:</label>
                                                        <input type="text"   class="form-control" id="NomeDoenca" name="nome"  placeholder="Nome da Doenca" value="<?php echo "".$linha['nome'].""; ?>" required>
                                                    </div>
                        
                                                </div> 
                                
                                                <div class="form-row">
                                                
                                                    <div class="form-group col-sm-5 mt-2 ml-3">
                                                        <label for="Tipo" >Tipo de Doença:</label>
                                                        <select class="form-control" id="Tipo" name="tipo" required>
                                                            <option value="">...</option>
                                                            <option <?php if( $linha['tipo']=='Proliferativa') echo"selected"; ?> >Proliferativa</option>
                                                            <option <?php if( $linha['tipo']=='Degenerativa') echo"selected"; ?> >Degenerativa</option>
                                                        </select>
                                                        
                                                        <!--<input class="form-control" id="Tipo" name="tipo" list="tipos" required>
                                                        <datalist  id="tipos">
                                                            <option selected>...</option>
                                                            <option >Proliferativas</option>
                                                            <option >Degenerativas</option>
                                                        </datalist>-->
                                                    </div>
                                                </div> 
                    
                                        </div>
                    
                                    </div>
                                    <div id="step-2">
                                        <div id="form-step-1" role="form" data-toggle="validator">
                                            <legend>Causas e Sintomas</legend>
                                            
                                            <div class="form-row justify-content-center">
                                                <div class="form-group col-sm-11">
                                                    <label for="causas">Causas:</label>
                                                    <textarea id="causas" name="causas" class="form-control editor" required><?php echo $linha['causa'];?></textarea>                         
                                                </div>
                                            </div>
                    
                                            <div class="form-row justify-content-center">
                                                <div class="form-group col-sm-11">
                                                    <label for="Sintomas">Sintomas:</label>
                                                    <textarea id="Sintomas" name="sintomas" class="form-control" required><?php echo $linha['sintoma'];?></textarea>                         
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="step-3">
                                        <div id="form-step-2" role="form" data-toggle="validator">
                                            <legend>Tratamentos e Prevenção</legend>
                                            <div class="form-row justify-content-center">
                                                <div class="form-group col-sm-11">
                                                    <label for="trat">Tratamentos:</label>
                                                    <textarea id="trat" name="tratamentos" class="form-control" required><?php echo $linha['tratamento'];?>
                                                    </textarea>                         
                                                </div>
                                            </div>
                    
                                            <div class="form-row justify-content-center">
                                                <div class="form-group col-sm-11">
                                                    <label for="prev">Prevenção:</label>
                                                    <textarea id="prev" name="prevencao" class="form-control" required><?php echo $linha['prevencao']; ?></textarea>                         
                                                </div>
                                            </div>
                                        </div>
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

    //actualiza os dados de uma doenca em funcao do id
    function actualizar($idDoenca) {
        $conexao = getConexao(); 
        define('SQL','CALL actualizaDoencaID(?,?,?,?,?,?,?);');
        
        if(!($stmt = $conexao->prepare(SQL))) {
            echo"Preparo do update Falhou: (".$conexao->errno.") ".$conexao->error;
        }
        
        if(!($stmt->bind_param('issssss',$id,$nome,$tipo,$causas,$sintomas,$tratamentos,$prevencao))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }
        $id = $idDoenca;
        $nome= $_POST['nome'];
        $tipo= $_POST['tipo'];
        $causas= $_POST['causas'];
        $sintomas= $_POST['sintomas'];
        $tratamentos= $_POST['tratamentos'];
        $prevencao= $_POST['prevencao'];

        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }

        $stmt->close();
        fechaConexao($conexao);

        header('Location:../admin/lista-de-doencas.php');
    }

    function apagar() {
        $conexao = getConexao(); 
        define('SQL','CALL apagarDoenca(?);');
        
        if(!($stmt = $conexao->prepare(SQL))) {
            echo"Preparo do sql Falhou: (".$conexao->errno.") ".$conexao->error;
        }
        
        if(!($stmt->bind_param('i',$id))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }

        for($i=1; $i<= $_GET['cont']; $i++){
            $id = $_POST["cb-$i"];
            if(!($stmt->execute()))
                echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        
        $stmt->close();
        fechaConexao($conexao);
    }

    $cont = 1; //contador gblobal usado no metodo lerDoencas

    //devolve lista de doencas consoante o tipo
    function lerDoencas($tipo) {
        $conexao = getConexao();
        //define('SQL',"CALL lerDoencas(?);");
        $sql = "CALL lerDoencas(?);";

        if(!($stmt = $conexao->prepare($sql))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('i',$n))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }
        
        $n = 1;
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        $resposta = $stmt->get_result();

        //criar tabela 
        if($resposta->num_rows>0) {
            global $cont;
            $cont2 = 1;
            while($linha = $resposta->fetch_assoc()) {
                if($linha['tipo'] == $tipo) {
?>
                <div class="cor-borda2 mb-5">
                    <div class="card-header">
                        
                        <h6><span class="text-success"><?php echo $cont2; ?> - </span><?php echo $linha['nome']; ?></h6>

                        <nav class="navbar navbar-primary">
                            <ul class="nav nav-pills" id="nav-doenca" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-success" id="ca-<?php echo $cont; ?>" data-toggle="pill"
                                        href="#c-<?php echo $cont; ?>">Causas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-success" id="si-<?php echo $cont; ?>" data-toggle="pill" href="#s-<?php echo $cont; ?>">Sintomas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-success" id="tr-<?php echo $cont; ?>" data-toggle="pill" href="#t-<?php echo $cont; ?>">Tratamento</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-success" id="pr-<?php echo $cont; ?>" data-toggle="pill" href="#p-<?php echo $cont; ?>">Prevenção</a>
                                </li>
                            </ul>
                        </nav>
        
                    </div>
        
                    <div class="card-body tab-content" id="nav-pills-conteudo">

                        <div class="tab-pane fade show active" id="c-<?php echo $cont; ?>" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                        <?php echo $linha['causa']; ?>
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="s-<?php echo $cont; ?>" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                        <?php echo $linha['sintoma']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="t-<?php echo $cont; ?>" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                        <?php echo $linha['tratamento']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="p-<?php echo $cont; ?>" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                    <?php echo $linha['prevencao']; ?>
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
<?php
                    $cont++;
                    $cont2++;
                }
            }
        }
        
        $stmt->close();
        fechaConexao($conexao);
    }

    //consulta doenca pelo nome doenca pelo nome
    function lerDoencaNome($nome) {
        $conexao = getConexao();
        //define('SQL',"CALL lerDoencaNome(?);"
         $sql = "CALL lerDoencaNome(?);";

        if(!($stmt = $conexao->prepare($sql))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('s',$n))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }
        
        $n = "%$nome%";
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        $resposta = $stmt->get_result();

        //criar tabela 
        if($resposta->num_rows>0) {
            global $cont;
            $cont2 = 1;
            while($linha = $resposta->fetch_assoc()) {
?>
                <?php if($cont2 == 1) echo'<a href="doencas-raras.php" class="btn btn-primary my-3">Listar Doencas Raras</a> <br>';?>
                <div class="cor-borda2 mb-5">
                    <div class="card-header">
                        
                        <h6><span class="text-success"><?php echo $cont2; ?> - </span><?php echo $linha['nome']; ?></h6>

                        <nav class="navbar navbar-primary">
                            <ul class="nav nav-pills" id="nav-doenca" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-success" id="ca-<?php echo $cont; ?>" data-toggle="pill"
                                        href="#c-<?php echo $cont; ?>">Causas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-success" id="si-<?php echo $cont; ?>" data-toggle="pill" href="#s-<?php echo $cont; ?>">Sintomas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-success" id="tr-<?php echo $cont; ?>" data-toggle="pill" href="#t-<?php echo $cont; ?>">Tratamento</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-success" id="pr-<?php echo $cont; ?>" data-toggle="pill" href="#p-<?php echo $cont; ?>">Prevenção</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-success" id="pr-<?php echo $cont; ?>" data-toggle="pill" href="#p-<?php echo $cont; ?>">Tipo</a>
                                </li>
                            </ul>
                        </nav>
        
                    </div>
        
                    <div class="card-body tab-content" id="nav-pills-conteudo">

                        <div class="tab-pane fade show active" id="c-<?php echo $cont; ?>" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                        <?php echo $linha['causa']; ?>
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="s-<?php echo $cont; ?>" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                        <?php echo $linha['sintoma']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="t-<?php echo $cont; ?>" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                        <?php echo $linha['tratamento']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="p-<?php echo $cont; ?>" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                    <?php echo $linha['prevencao']; ?>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="p-<?php echo $cont; ?>" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                    <?php echo $linha['tipo']; ?>
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                
<?php
                    $cont++;
                    $cont2++;

            }
        } else {
?>
            <div class="row justify-content-center">
                <h2 style="color:red">Ops, Doença Não Encontrada!</h2>
                <img class="img-thumbnail" src="imgs/nao-encotrada.png">
            </div>
<?php
        }
        
        $stmt->close();
        fechaConexao($conexao);
    }
?>