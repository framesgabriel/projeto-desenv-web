<?php
    // Recebe os valores preenchidos no form
    $nome = $_POST ["nome"];
    $email = $_POST ["email"];
    $telefone = $_POST ["telefone"];
    $cidade = $_POST ["cidade"];
    $estado = $_POST ["estado"];
    $dtnasc = $_POST ["idade"];
    $motivo = $_POST ["motivo"];
    $sexo = $_POST ["sexo"];
    $mensagem = $_POST ["mensagem"];

    // Conectando com o localhost - mysql
    $conexao = mysqli_connect("localhost", "root");
    if (!$conexao)
        die ("Erro de conexão com localhost, o seguinte erro ocorreu: ".mysqli_error());

    // Conectando com o banco de dados chamado PessoasDB
    $banco = mysqli_select_db($conexao, "PessoasDB");
    if (!$banco)
        die ("Erro de conexão com o banco de dados, o seguinte erro ocorreu: ".mysqli_error());

    // Inserindo dados na tabela pessoa do banco de dados PessoasDB
    $query = "INSERT INTO `pessoa` (`nome`, `email`, `telefone`, `cidade`, `estado`, `dtnasc`, `motivo`, `sexo`, `mensagem`) VALUES ('$nome', '$email', '$telefone', '$cidade', '$estado', '$dtnasc', '$motivo', '$sexo', '$mensagem')";

    mysqli_query($conexao, $query);

    echo "Sua mensagem foi enviada com sucesso!<br>Agradecemos o contato.";
?>