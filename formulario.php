<?php

    session_start(); // Inicia a sessão

    if (isset($_POST['submit'])) {
        include_once('config.php');
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $data_nasc = $_POST['data_nasc'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, senha, email, telefone, sexo, data_nasc, cidade, estado, endereco) 
        VALUES ('$nome', '$senha', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");

        // Define uma mensagem de sucesso na sessão
        if ($result) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
        } else {
            $_SESSION['mensagem'] = "Ocorreu um erro ao cadastrar. Por favor, tente novamente.";
        }
    
        header('Location: index.php');
        exit();
    }
