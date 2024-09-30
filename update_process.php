<?php
include 'db_connect.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];

$sql = "UPDATE usuarios SET nome='$nome', endereco='$endereco' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro atualizado com sucesso.";
    echo "<br><a href='read.php'>Voltar à lista de usuários</a>";
} else {
    echo "Erro ao atualizar o registro: " . $conn->error;
}

$conn->close();
?>
