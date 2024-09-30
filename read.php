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
            <th>Ações</th>

        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Saída de dados de cada linha
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["endereco"] . "</td>";
                echo "<td>
        <a href='update.php?id=" . $row["id"] . "'>Editar</a> |
        <a href='delete.php?id=" . $row["id"] . "' onclick=\"return confirm('Tem certeza que deseja excluir este registro?');\">Excluir</a>
      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
        }
        $conn->close();
        ?>
    </table>

    <p><a href="gitflow_info.php">Informações sobre o GitFlow</a></p>


</body>

</html>