<?php

    if(isset($_POST['entrar'])){
        inicarSessao();
    }
        
    if(isset($_POST['sair'])){
        terminarSessao();
    }

    if(isset($_POST['registar'])){
        registar();
    }

    function inicarSessao(){
        include('bd.php');

        $nome = $_POST["nome"];
        $pass = $_POST["senha"];

        $query = "SELECT * FROM doente WHERE userName='$nome' AND senha='$pass'";
        $dados = mysqli_query($conexao, $query);

        if($dados == true){
            if(mysqli_num_rows($dados) == 0){
                header('Location:login.php');
            }else{
                session_start();
                $_SESSION['nome'] = $nome;
                $_SESSION['password'] = $pass;

                header('Location:index.php');
            }
        }else{
            echo "Problemas de conexao com Base de Dados".mysqli_error($conexao);
        }
    }

    function registar(){
        include('bd.php');
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        
        $query = "INSERT INTO users (nome , email, password) 
        VALUES ('$nome' , '$email', '$pass')";

        if (mysqli_query($conexao, $query) === TRUE) {
            header("Location:login.php");
        } else {
        echo "Ha problemas".mysqli_error($conexao);
        }
    }

    function terminarSessao(){
        session_start();
        session_destroy();
        header('Location:login.php');
    }
?>