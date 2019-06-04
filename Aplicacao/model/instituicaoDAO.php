<?php
    include('bd.php');

    if(isset($_POST['submeter'])){
        inserirInst();
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
                            <input type="checkbox" id="cb-'.$cb.'" value="'.$linha['idInstituicao'].'">
                        </td>
                        <td>'.$linha['nome'].'</td>
                        <td>'.$linha['bairro'].'</td>
                        <td>'.$linha['tipo'].'</td>
                        <td> 
                            <a class="btn cor-verde"  href="'.$linha['idInstituicao'].'">
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


    


?>