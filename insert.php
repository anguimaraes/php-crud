<?php
include 'db_connect.php';

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];

$sql = "INSERT INTO usuarios (nome, endereco) VALUES ('$nome', '$endereco')";

if ($conn->query($sql) === TRUE) {
  echo "Novo registro criado com sucesso";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
