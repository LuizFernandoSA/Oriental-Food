<?php 
    
    $dbHost = 'localhost';
    $dbName = 'orientalfood';
    $dbUsername = 'root';
    $dbPassword = '2509';

    // Criando a conexão
    $conexao = new mysqli($dbHost, $dbUsername, $dbName, $dbPassword);
    
    // Checando a conexão
    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    } else {
        include('sucesso.php');
    }

?>
