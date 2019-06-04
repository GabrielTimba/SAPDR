<?php
    include('bd.php');
    define('INSERIR',' call inseriMensagem(?,?,?,?,?)');

    if(isset($_POST['submeter'])){
        inserir();
    }
    
    function inserir(){
        $con=getConexao();

        // prepared statment 
        $stmt = $con->prepare(INSERIR);
        if(!$stmt) {
            echo"Preparo da Insercao Falhou: (".$con->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param('sssss',$assunto,$email,$mensagem,$user,$senha))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }

        $assunto= $_POST['assunto'];
        $email= $_POST['email'];
        $mensagem= $_POST['mensagem'];

        session_start();
	    if(isset($_SESSION['nome'])){
            $user=$_SESSION['nome'];
            $senha=$_SESSION['password']; 
        }
        else{
            $user='Visitante';
            $senha='Visitante';
        }
        
        //executando
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }

        fechaConexao($con);

        echo '<script>
             </script>'

       header('Location:../index.php');
    }
