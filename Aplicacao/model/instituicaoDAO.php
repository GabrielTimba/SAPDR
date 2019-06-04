<?php
    include('bd.php');

    if(isset($_POST['submeter'])){
        inserirInst();
    }

    if(isset($_POST['submeterUpdate'])){
        actualizarInst();
    }

    if(isset($_GET['idInst'])){
        $id = $_GET['idInst']; 
        //echo $id;      
        header("Location: ../admin/registar-instituicoes.php?idInstituicao=$id");
    }

    function listaInst(){
        $conexao = getConexao();
        define('SQL',"CALL lista_de_instituicoes();");
        
        if(!($stmt = $conexao->prepare(SQL))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 
        
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
                            <input type="checkbox" id="cb-'.$cb.'" value="'.$linha['idInst'].'">
                        </td>
                        <td>'.$linha['nome'].'</td>
                        <td>'.$linha['bairro'].'</td>
                        <td>'.$linha['tipo'].'</td>
                        <td> 
                            <a class="btn cor-verde"  href="../model/instituicaoDAO.php?idInst='.$linha['idInst'].'">
                                <i class="fa fa-pencil-alt"></i> Editar
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

    function hospital(){
        $conexao = getConexao();
        define('SQL',"CALL lista_hospital();");
        
        if(!($stmt = $conexao->prepare(SQL))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 
        
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
                            <input type="checkbox" id="cb-'.$cb.'" value="'.$linha['idInstituicao'].'">
                        </td>
                        <td>'.$linha['nome'].'</td>
                        <td>'.$linha['bairro'].'</td>
                        <td>'.$linha['tipo'].'</td>
                        
                    </tr>
                ';
                $cb++;
            }
        }

        
        
        $stmt->close();
        fechaConexao($conexao);
    }

    function farmacia(){
        $conexao = getConexao();
        define('SQ',"CALL lista_farmacias();");
        
        if(!($stmt = $conexao->prepare(SQ))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 
        
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
                            <input type="checkbox" id="cb-'.$cb.'" value="'.$linha['idInstituicao'].'">
                        </td>
                        <td>'.$linha['nome'].'</td>
                        <td>'.$linha['bairro'].'</td>
                        <td>'.$linha['tipo'].'</td>
                        
                    </tr>
                ';
                $cb++;
            }
        }

        
        
        $stmt->close();
        fechaConexao($conexao);
    }

    function listaAss(){
        $conexao = getConexao();
        define('S',"CALL lista_Associacoes();");
        
        if(!($stmt = $conexao->prepare(S))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 
        
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
                            <input type="checkbox" id="cb-'.$cb.'" value="'.$linha['idAssociacao'].'">
                        </td>
                        <td>'.$linha['nome'].'</td>
                        <td>'.$linha['descricao'].'</td>
                        <td>'.$linha['bairro'].'</td>
                        
                    </tr>
                ';
                $cb++;
            }
        }

        
        
        $stmt->close();
        fechaConexao($conexao);
    }


    function inserirInst(){
        $con=getConexao();
        define('INSERIR',' call inserirInstituicao(?,?,?,?,?,?)');
        // prepared statment 
        $stmt = $con->prepare(INSERIR);
        if(!$stmt) {
            echo"Preparo da Insercao Falhou: (".$con->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('ssssss',$nome,$tipo,$provincia,$distrito,$bairro,$rua))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }

        $nome= $_POST['nome'];
        $tipo= $_POST['tipo'];
        $provincia= $_POST['provincia'];
        $distrito= $_POST['distrito'];
        $bairro= $_POST['bairro'];
        $rua= $_POST['rua'];

        //executando
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }

        fechaConexao($con);

       header('Location:../admin/lista-de-instituicoes.php');
    }



    function lerInstituicaoID($id) {
        $conexao = getConexao();
        define('SQL', "CALL lerInstituicaoID(?);");
        
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
                        <h5 class="ml-3">Instituicoes e Associacoese</h5>
                        <p class="ml-5 dir"><a href="#">Inicio</a>  >> Usuários >> <span class="text-sucess"> Instituicoes e Associacoes</span></p>
                    </div>

                    <div class="row my-2 justify-content-center">
                        <div class="col-sm-11">
                            <a class="btn btn-light bg-white cor-borda2 float-right" href="lista-de-instituicoes.php"><i class="fa fa-reply"></i></a>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-11 borda-titulo">
                            <label><i class="fas  fa-user-plus mr-2"></i>Editar Instituicao e Associacao</label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-11  cor-borda2 bg-white" id="cadastro">
                            <form  action="../model/instituicaoDAO.php" id="myForm" role="form"  method="post" accept-charset="utf-8">

                                <!-- SmartWizard html -->
                                <div id="smartwizard">
                                    <legend>Dados</legend>
                                    <div class="form-row" >
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="nome" >Nome:</label>
                                            <input type="text" name="nome" id="nome"  class="form-control"  placeholder="Nome" value="<?php echo "".$linha['nome'].""; ?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="tipo" >Tipo:</label>
                                            <select class="form-control valid" name="tipo" id="tipo"  required>
                                                <option disable value="0" >...</option>
                                                <option  <?php if( $linha['tipo']=='Associacao') echo"selected"; ?> >Associacao</option>
                                                <option <?php if( $linha['tipo']=='Hospital') echo"selected"; ?>>Hospital</option>
                                                <option  <?php if( $linha['tipo']=='Farmacia') echo"selected"; ?>>Farmacia</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">

                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="provincia" >Provincia:</label>
                                            <select class="form-control valid" name="provincia" id="provincia" required>
                                                <option value="0">...</option>
                                                <option  <?php if( $linha['provincia']=='Maputo') echo"selected"; ?> >Maputo</option>
                                                <option <?php if( $linha['provincia']=='Gaza') echo"selected"; ?>>Gaza</option>
                                                <option <?php if( $linha['provincia']=='Inhambane') echo"selected"; ?>>Inhambane</option>
                                                <option <?php if( $linha['provincia']=='Sofala') echo"selected"; ?>>Sofala</option>
                                                <option <?php if( $linha['provincia']=='Manica') echo"selected"; ?>>Manica</option>
                                                <option <?php if( $linha['provincia']=='Zambezia') echo"selected"; ?>>Zambezia</option>
                                                <option <?php if( $linha['provincia']=='Tete') echo"selected"; ?>>Tete</option>
                                                <option <?php if( $linha['provincia']=='Nampula') echo"selected"; ?>>Nampula</option>
                                                <option <?php if( $linha['provincia']=='Niassa') echo"selected"; ?>>Niassa</option>
                                                <option <?php if( $linha['provincia']=='Cabo Delgado') echo"selected"; ?>>Cabo Delgado</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="distrito" >Distrito:</label>
                                            <input list="distritos" name="distrito" id ="distrito" class="form-control" id="Distrito"  value="<?php echo "".$linha['distrito'].""; ?>" required>
                                            <datalist id="distritos">
                                                <option value="Matola">Matola</option>
                                                <option value="Maputo">Maputo</option>
                                                <option value="Xai-xai">Xai-xai</option>
                                                <option value="Chibuto">Chibuto</option>
                                                <option value="Chokwé">Chokwé</option>
                                                <option value="Inhambane">Inhambane</option>
                                                <option value="Maxixe">Maxixe</option>
                                                <option value="Manica">Manica</option>
                                                <option value="Chimoio">Chimoio</option>
                                                <option value="Beira">Beira</option>
                                                <option value="Dondo">Dondo</option>
                                                <option value="Zambezia">Zambezia</option>
                                                <option value="Quelimane">Quelimane</option>
                                                <option value="Mocuba">Mocuba</option>
                                                <option value="Gurué">Gurué</option>
                                                <option value="Tete">Tete</option>
                                                <option value="Nampula">Nampula</option>
                                                <option value="Nacala">Nacala</option>
                                                <option value="Ilha de Moçambique">Ilha de Moçambique</option>
                                                <option value="Pemba">Pemba</option>
                                                <option value="Montepuez">Montepuez</option>
                                                <option value="Lichinga">Lichinga</option>
                                                <option value="Cuamba">Cuamba</option>
                                            </datalist>
                                        </div>

                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="bairro" >Bairro:</label>
                                            <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro"  value="<?php echo "".$linha['bairro'].""; ?>" required>
                                        </div>

                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="rua" >Rua:</label>
                                            <input type="text" name="rua" id="rua" class="form-control" placeholder="Rua"  value="<?php echo "".$linha['rua'].""; ?>" required>
                                        </div>
                                        
                                    </div> 
                                    <div class="form-row">
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <p class="row justify-content-center">
                                                <button class="btn btn-outline-danger botoes mr-3" type="reset" id="apagar" mame="apagar">Apagar</button>
                                                <button class="btn btn-outline-primary botoes" type="submit" onclick="validar()" id="submeterUpdate" name="submeter">Submeter</button>
                                            </p>
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


    function actualizarInst($idInstituicao) {
        $conexao = getConexao(); 
        define('SQL','CALL actualizaDoencaID(?,?,?,?,?,?,?);');
        
        if(!$stmt) {
            echo"Preparo da Insercao Falhou: (".$con->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('issssss',$id,$nome,$tipo,$provincia,$distrito,$bairro,$rua))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }
        $id = $idInstituicao;
        $nome= $_POST['nome'];
        $tipo= $_POST['tipo'];
        $provincia= $_POST['provincia'];
        $distrito= $_POST['distrito'];
        $bairro= $_POST['bairro'];
        $rua= $_POST['rua'];

        //executando
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }

        fechaConexao($con);

       header('Location:../admin/lista-de-instituicoes.php');
    }


    


?>