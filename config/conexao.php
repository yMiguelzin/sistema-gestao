<?php
$servername = "localhost";
$username = "root";  // Seu nome de usuário
$password = "";      // Sua senha
$dbname = "sistema_gestao";  // Nome do banco de dados

// Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>
