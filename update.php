<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Recuperar os dados atuais do usuário
    $sql = "SELECT * FROM usuarios WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nome = $row['nome'];
        $endereco = $row['endereco'];
    } else {
        echo "Registro não encontrado.";
        exit();
    }
} else {
    echo "ID não fornecido.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Atualizar Usuário</title>
</head>
<body>

<h2>Atualizar Usuário</h2>

<form action="update_process.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    Nome: <input type="text" name="nome" value="<?php echo $nome; ?>"><br><br>
    Endereço: <input type="text" name="endereco" value="<?php echo $endereco; ?>"><br><br>
    <input type="submit" value="Atualizar">
</form>

</body>
</html>
