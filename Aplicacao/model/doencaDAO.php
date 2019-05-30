<?php
    include('../bd.php');
    
    if(isset($_POST['nome']))
        inserir();
    
    if(isset($_GET['editar'])) {
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
        
        header('Location:../admin/registar-doencas.php');
    }

    if(isset($_GET['cancelar'])) {
        session_destroy();
        header('Location: ../admin/lista-de-doencas.php');
    }

    
    function inserir() {
        

        $nome= $_POST['nome'];
        $tipo= $_POST['tipo'];
        $causas= $_POST['causas'];
        $sintomas= $_POST['sintomas'];
        $tratamentos= $_POST['tratamentos'];
        $prevencao= $_POST['prevencao'];

        // prepared statment
        $sql = "CALL inserirDoenca(?,?,?,?,?,?);"; 

        if(!($stmt = $conexao->prepare($sql))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('ssssss',$nome1,$tipo1,$causas1, $sintomas1, $tratamentos1, $prevencao1)
        )) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }

        //colocando valores nos parametros;
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

        $stmt->close();
        $conexao->close();

        header('Location:../admin/registar-doencas.php');
    }

    //
    function lerNomeTipo() {
        include('../bd.php');
        
        $sql = "CALL lerDoencas(?);";
        
        if(!($stmt = $conexao->prepare($sql))) {
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
            
            while($linha = $resposta->fetch_assoc()) {
                echo'
                    <tr>
                        <th class="texto-verde">
                            <input type="checkbox" value="'.$linha['id'].'">
                        </th>
                        <td>'.$linha['nome'].'</td>
                        <td>'.$linha['tipo'].'</td>
                        <td> 
                            <a class="btn cor-verde"  href="../model/doencaDAO.php?editar=true&&id='.$linha['id'].'">
                                <i class="fa fa-pencil-alt"></i> Editar
                            </a>
                        </td>
                    </tr>
                ';
            }
        }
        
        $stmt->close();
        $conexao->close();
    }

    function lerDoencaID($id) {
        include('../bd.php');
        
        $sql = "CALL lerDoencaID(?);";
        
        if(!($stmt = $conexao->prepare($sql))) {
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
                        <label><i class="fa fa-pencil-square-o mr-1"></i>Editar de Doença</label>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class=" border col-sm-11 bg-white " id="cadastro">
                        <form  action="../model/doencaDAO.php?acao=inserir" id="myForm" role="form"  method="POST" accept-charset="utf-8">

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
                                                        <input type="text"   class="form-control" id="NomeDoenca" name="nome"  placeholder="Nome da Doenca" value="<?php $linha['nome'] ?>" required>
                                                    </div>
                        
                                                </div> 
                                
                                                <div class="form-row">
                                                
                                                    <div class="form-group col-sm-5 mt-2 ml-3">
                                                        <label for="Tipo" >Tipo de Doença:</label>
                                                        <select class="form-control" id="Tipo" name="tipo">
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
                                                    <textarea id="causas" name="causas" class="form-control editor" required><?php $linha['causa']?></textarea>                         
                                                </div>
                                            </div>
                    
                                            <div class="form-row justify-content-center">
                                                <div class="form-group col-sm-11">
                                                    <label for="Sintomas">Sintomas:</label>
                                                    <textarea id="Sintomas" name="sintomas" class="form-control" required><?php $linha['sintoma']?></textarea>                         
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
                                                    <textarea id="trat" name="tratamentos" class="form-control" required><?php $linha['tratamento']?></textarea>                         
                                                </div>
                                            </div>
                    
                                            <div class="form-row justify-content-center">
                                                <div class="form-group col-sm-11">
                                                    <label for="prev">Prevenção:</label>
                                                    <textarea id="prev" name="prevencao" class="form-control" required><?php $linha['prevencao'] ?></textarea>                         
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
        
        $stmt->close();
        $conexao->close();
    }
?>