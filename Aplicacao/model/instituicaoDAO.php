<?php
    include('bd.php');

    function inserir(){

        $con=getConexao();
        $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $dataN = $_POST['dataN'];
        $genero = $_POST['genero'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $email = $_POST['email'];
        $tellefone = $_POST['tellefone'];
        $unidade_h = $_POST['unidade_h'];
        $nome_u = $_POST['nome_u'];
        $senha = $_POST['senha'];
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
                            <a class="btn cor-verde"  href="../model/profissionalDAO.php?id='.$linha['idInstituicao'].'">
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

    


?>