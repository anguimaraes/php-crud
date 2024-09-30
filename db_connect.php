<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "db_crud_gitflow";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}
?>
