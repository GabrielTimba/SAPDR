<?php
     include('bd.php');

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
                            <a class="btn cor-verde"  href="">
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

?>