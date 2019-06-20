<?php
    include('model/bd.php');

    if(isset($_POST['entrar'])){
        inicarSessao();
    }
   
    if(isset($_GET['sair'])){
        terminarSessao();
    }

    function inicarSessao(){
        
        $conexao=getConexao();
        $nome = $_POST["nome"];
        $pass = $_POST["senha"];

        $query = "SELECT idDoente FROM doente WHERE userName='$nome' AND senha=md5('$pass')";
        $dados = mysqli_query($conexao, $query);

        if($dados == true){
            if(mysqli_num_rows($dados) == 0){
                header('Location:login.php');
            }else{
                $linha = mysqli_fetch_assoc($dados);
                session_start();
                $_SESSION['nome'] = $nome;
                $_SESSION['password'] = $pass;
                $_SESSION['id'] = $linha['idDoente'];
    
                header('Location:index.php');
            }
        }else{
            echo "Problemas de conexao com Base de Dados".mysqli_error($conexao);
        }

        fechaConexao($conexao);
    }


    function terminarSessao(){
        session_start();
        session_destroy();
        header('Location:login.php');
    }
?>