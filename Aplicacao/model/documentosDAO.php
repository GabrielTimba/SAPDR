<?php
     include('bd.php');

    function listaDoc(){
        $conexao = getConexao();
        define('SQL',"CALL lista_de_documentos();");
        
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
                            <input type="checkbox" id="cb-'.$cb.'" value="'.$linha['idDoc'].'">
                        </td>
                        <td>'.$linha['titulo'].'</td>
                        <td>'.$linha['descricao'].'</td>
                        <td>'.$linha['arquivo'].'</td>
                       
                        <td> 
                            <a class="btn cor-verde"  href="../model/profissionalDAO.php?id='.$linha['idDoc'].'">
                                Ler Mais
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

    define('INSERIR',' call inserirDocumento(?,?,?,?,?)');

    if(isset($_POST['submeter'])){
        inserirDoc();
    }
    
    function inserirDoc(){
        $con=getConexao();

        // prepared statment 
        $stmt = $con->prepare(INSERIR);
        if(!$stmt) {
            echo"Preparo da Insercao Falhou: (".$con->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('ssbss',$titulo,$descricao,$arquivo,$user,$senha))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }

        $titulo= $_POST['titulo'];
        $descricao= $_POST['descricao'];
        $arquivo= $_POST['arquivo'];

        session_start();
	    if(isset($_SESSION['nomeAdmin'])){
            $user=$_SESSION['nomeAdmin'];
            $senha=$_SESSION['senhaAdmin']; 
        }
        
        //executando
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }

        fechaConexao($con);

       header('Location:../admin/index.php');
    }


?>