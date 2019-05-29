<?php

    if(isset($_GET['entrar'])){
        inicarSessao();
    }
        
    if(isset($_GET['sair'])){
        terminarSessao();
    }
 
    function inicarSessao(){
        include('../bd.php');

        $nome = $_GET["nome"];
        $pass = $_GET["senha"];

        $query = "SELECT * FROM profissional WHERE userName='$nome' AND senha='$pass'";
        $dados = mysqli_query($conexao, $query);

        if($dados == true){
            if(mysqli_num_rows($dados) == 0){
                header('Location:login.php');
            }else{
                session_start();
                $_SESSION['nome'] = $nome;
                $_SESSION['senha'] = $pass;

                header('Location:index.php');
            }
        }else{
            echo "Problemas de conexao com Base de Dados".mysqli_error($conexao);
        }
    }

    function terminarSessao(){
        session_start();
        session_destroy();
        header('Location:login.php');
    }
?>