<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Deletar o registro
    $sql = "DELETE FROM usuarios WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro excluído com sucesso.";
        echo "<br><a href='read.php'>Voltar à lista de usuários</a>";
    } else {
        echo "Erro ao excluir o registro: " . $conn->error;
    }
} else {
    echo "ID não fornecido.";
}

$conn->close();
?>
