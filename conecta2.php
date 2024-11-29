<?php
// Definir as credenciais do banco de dados
$servername = "localhost";  // Ou o endereço do seu servidor MySQL
$username = "root";         // Usuário do banco
$password = "";             // Senha do banco (se houver)
$dbname = "malalivre";      // Nome do banco de dados

// Criar a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar a conexão
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
