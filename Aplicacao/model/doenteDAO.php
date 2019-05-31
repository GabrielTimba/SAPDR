<?php
    include('bd.php');
    define('INSERIR',' call inseriDoente()');
    

  /* if(isset()){
        inserir();
    }
    
    function inserir() {

        $con=getConexao();
        $nome= $_POST['nome'];
        $apelido= $_POST['apelido'];
        $data= $_POST['data'];
        $sintomas= $_POST['genero'];
        $provincia= $_POST['provincia'];
        $distrito= $_POST['distrito'];
        $rua= $_POST['rua'];
        $email= $_POST['email'];
        $tellefone= $_POST['tellefone'];
        $doenca=$_POST['doenca'];

        // prepared statment 
        $stmt = $con->prepare("INSERIR")
        if(!stmt) {
            echo"Preparo da Insercao Falhou: (".$con->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param() )) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }

        //colocando valores nos parametros;
        $tipo1 = $tipo;
        $idDoenca1 = 'NULL';
        $nome1 = $nome;
        $prevencao1 = $prevencao;
        $causa1 = $causas;
        $tratamentos1 = $tratamentos;
        $sintoma1 = $sintomas;
        $idTipo1 = 'NULL';
        
        //executando
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }

        $stmt->close();
        $conexao->close();

        header('Location:../admin/registar-doencas.php');
    }*/

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