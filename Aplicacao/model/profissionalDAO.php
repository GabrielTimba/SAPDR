<?php
    include('bd.php');

    function inserir(){

        $con=getConexao();
        define('INSERIR',' call inserirProf(?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

        // prepared statment 
        $stmt = $con->prepare(INSERIR);
        if(!$stmt) {
            echo"Preparo da Insercao Falhou: (".$con->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('sssssssssiiss',$nome,$apelido,$data,$genero,$provincia,$distrito,$bairro,$rua,$email,$tellefone,
                                $unidade,$user,$senha) )) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }

        $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $data = $_POST['dataN'];
        $genero = $_POST['genero'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $email = $_POST['email'];
        $tellefone = $_POST['tellefone'];
        $unidade = $_POST['unidade_h'];
        $nome = $_POST['nome_u'];
        $senha = $_POST['senha'];

        //executando
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        
        $stmt->close();
        fechaConexao($con);

        header('Location:../index.php');
    }

    function listaProf(){
        $conexao = getConexao();
        define('SQL',"CALL lista_de_profissionais();");
        
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
                            <input type="checkbox" id="cb-'.$cb.'" value="'.$linha['idProf'].'">
                        </td>
                        <td>'.$linha['nome'].'</td>
                        <td>'.$linha['email'].'</td>
                        <td>'.$linha['unidade'].'</td>
                        <td> 
                            <a class="btn cor-verde"  href="../model/profissionalDAO.php?id='.$linha['idProf'].'">
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


?>