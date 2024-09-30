<?php
include 'db_connect.php';

$sql = "SELECT id, nome, endereco FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários</title>
</head>
<body>

<h2>Lista de Usuários</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Endereço</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        // Saída de dados de cada linha
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"]. "</td>";
            echo "<td>" . $row["nome"]. "</td>";
            echo "<td>" . $row["endereco"]. "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html>
