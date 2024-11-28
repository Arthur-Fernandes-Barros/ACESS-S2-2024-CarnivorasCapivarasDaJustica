<?php   


// Configurações do banco de dados
$host = "localhost"; // Endereço do servidor
$user = "root"; // Nome de usuário do MySQL
$password = ""; // Senha do MySQL
$database = "fatecon"; // Nome do banco de dados

// Criar a conexão
$conn = new mysqli($host, $user, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}


?>