<?php
    include('bd.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];       
       header('Location:../admin/mensagens.php?idMensagem='.$id);
    }

    if(isset($_POST['responder'])){
        enviaResposta();
    }

    function listaMsg() {
        $conexao = getConexao();
        define('SQL',"CALL lista_de_Mensagens();");
        
        if(!($stmt = $conexao->prepare(SQL))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 
        
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        $resposta = $stmt->get_result();

        //criar tabela de mensagens de suporte
        if($resposta->num_rows>0) {
            $cb = 1;
            while($linha = $resposta->fetch_assoc()) {
                echo'
                    <tr>
                        <td class="text-center">
                            <input type="checkbox" id="cb-'.$cb.'" value="'.$linha['idMensagem'].'">
                        </td>
                        <td>'.$linha['assunto'].'</td>
                        <td>'.$linha['email'].'</td>
                        <td> 
                            <a class="lerMais" href="../model/mensagemAdminDAO.php?id='.$linha['idMensagem'].'"">Ler mais</a>
                        </td>
                    </tr>
                ';
                $cb++;
            }
        }
        
        $stmt->close();
        fechaConexao($conexao);
    } 
    
    function BuscaMensagemID($id,$t) {
        $conexao = getConexao();
        $sql= "select assunto,email,msg from mensagem where idMensagem=?;";
        
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
        
        if(mysqli_num_rows($resposta) === 1) {
             
        }

        if ($t==1){
            echo $linha['assunto']; 
        }
        elseif($t==2){
            echo $linha['email']; 
        }
        else{
            echo $linha['msg'];   
        }

    }

    function enviaResposta(){

        $assunto="Mensagem de suporte(SAPDR)";
        $msg= "Assunto" .$_POST['assunto'];
        $msg .="Resposta" .$_POST['resposta'];

        $destinatario = $_POST['email'];// email onde a mensagem e enviada;

         // headers que prepara a mensagem
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: <gabrieltimba99@gmail.com>\r\n";
        $headers .= "Reply-To: gabrieltimba99@gmail.com \r\n";

        // envia o email...
        mail($destinatario,$assunto,$msg,$headers);
        //header("Location: ../admin/mensagens.php");
    }