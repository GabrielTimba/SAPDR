<?php
     include('bd.php');

    if (isset($_GET['acao']) && $_GET['acao'] == 1) {
        publicarPed($_GET['idPed']);
    }

    if (isset($_POST['submeter'])){
        inserir();
    }

    function inserir() {
        $conexao = getConexao();  //faz conexao com bd (metodo defenido no ficheiro bd.php)  

        //defenindo uma constante que contem uma instrucao sql (opcional)
        define('SQL',"CALL inserirPedido(?,?,?,?,?);");

        //captura qualquer erro que pode ocorrer no prepared statment 
        if(!($stmt = $conexao->prepare(SQL))) { 
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('ssssi',$pedido,$benf,$contacto,$msg,$id))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }

        //Atribuindo valores as variaveis;
        session_start();
        $id = $_SESSION['id'];
        $pedido = $_POST['pedido'];
        $benf = $_POST['beneficiario'];
        $contacto = $_POST['contacto'];
        $msg= $_POST['descricao'];
    
        //executando
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }

        echo "<script>alert('pedido efectuado com sucsso! /n Aguarde pela publicacao do administrador.')</script>";
        header('Location:../index.php');
    }

    function listaPedidos($estado){
        $conexao = getConexao();
        define('SQL',"CALL lista_de_pedidos('$estado');");
        
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
                            <input type="checkbox" id="cb-'.$cb.'" value="'.$linha['idapoio'].'">
                        </td>
                        <td>'.$linha['benefeciario'].'</td>
                        <td>'.$linha['pedido'].'</td>
                        <td> 
                            <a class="btn cor-verde" href="../model/pedidosDAO.php?idPed='.$linha['idapoio'].'&&acao=1">
                                Publicar
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

    function listaPedido($estado){
        $conexao = getConexao();
        define('SQ',"CALL lista_de_pedidos('$estado');");
        
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
                            <input type="checkbox" id="cb-'.$cb.'" value="'.$linha['idapoio'].'">
                        </td>
                        <td>'.$linha['benefeciario'].'</td>
                        <td>'.$linha['pedido'].'</td>
                        <td> 
                            <a class="btn cor-verde"  href="#">
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


    function publicarPed($idPedido) {
        $conexao = getConexao(); 
        define('SQL','CALL publicarPed(?);');
        
        if(!($stmt = $conexao->prepare(SQL))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 

        if(!$stmt) {
            echo"Preparo da Insercao Falhou: (".$con->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('i',$id))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }
        $id = $idPedido;
        //executando
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }

        $stmt->close();
        fechaConexao($conexao);

        header('Location:../admin/lista-de-pedidos.php');
    }


?>