<?php
    include('bd.php');
    define('INSERIR',' call inseriDoente(?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
    
    
    if(isset($_GET['submeter'])){
        inserir();
        echo "Bem vindo";
    }
    
    function inserir() {

        $con=getConexao();

        // prepared statment 
        $stmt = $con->prepare(INSERIR);
        if(!$stmt) {
            echo"Preparo da Insercao Falhou: (".$con->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('sssssssssiiiss',$nome,$apelido,$data,$genero,$provincia,$distrito,$bairro,$rua,$email,$tellefone,
                                $doenca,$instituicao,$user,$senha) )) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }

        $nome= $_POST['nome'];
        $apelido= $_POST['apelido'];
        $data= date_format($_POST['data'],"Y-m-d");
        $genero= $_POST['genero'];
        $provincia= $_POST['provincia'];
        $distrito= $_POST['distrito'];
        $bairro= $_POST['bairro'];
        $rua= $_POST['rua'];
        $email= $_POST['email'];
        $tellefone= $_POST['tellefone'];
        $doenca=$_POST['doenca'];
        $instituicao=$_POST['hospital'];
        $user= $_POST['userName'];
        $senha= $_POST['senha'];
        
        //executando
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        
        $stmt->close();
        fechaConexao($con);

        header('Location:../index.php');
    }

    function doencas (){
        $conexao = getConexao();
        
        $querry="select idDoenca,nome from doenca";

        if(!($stmt = $conexao->prepare($querry))) {
            echo "Preparo da busca de instituicoes Falhou: (".$conexao->errno.")".$conexao->error;
        } 
        
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }

        $resposta = $stmt->get_result();

     ?>   
        <select id="doenca" class="form-control" name="doenca">
            <option value="0"></option>
            <?php 
                while($linha = $resposta->fetch_assoc()) {
                    echo "<option value=".$linha['idDoenca'].">". $linha['nome']."</option>";
                }
            ?>
        </select>

       <?php fechaConexao($conexao);
        
    }

    function instituicao (){
        $conexao = getConexao();
        
        $querry="select idInstituicao,nome from instituicao
        where IdTipoI =(select idTipoI from tipoi where nome=?)";

        if(!($stmt = $conexao->prepare($querry))) {
            echo "Preparo da busca de instituicoes Falhou: (".$conexao->errno.")".$conexao->error;
        } 
        
        $a='Hospital';
        $stmt->bind_param('s',$a);
        
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }

        $resposta = $stmt->get_result();

     ?>   
        <select id="hospital" id="hosp" class="form-control" name="hospital">
            <option></option>
           <?php 
                while($linha = $resposta->fetch_assoc()) {
                    echo "<option value=".$linha['idInstituicao'].">". $linha['nome']."</option>";
                }?>
        </select>

       <?php fechaConexao($conexao);
        
    }