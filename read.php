<?php
include 'db_connect.php';

$sql = "SELECT id, nome, endereco FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lista de Usuários</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <h2 class="mt-4">Lista de Usuários</h2>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'db_connect.php';

            $sql = "SELECT id, nome, endereco FROM usuarios";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nome"] . "</td>";
                    echo "<td>" . $row["endereco"] . "</td>";
                    echo "<td>
                            <a href='update.php?id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Editar</a>
                            <a href='delete.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Tem certeza que deseja excluir este registro?');\">Excluir</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhum registro encontrado</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
    <a href="create.php" class="btn btn-success">Adicionar Novo Usuário</a>
    <a href="gitflow_info.php" class="btn btn-info">Informações sobre o GitFlow</a>
</div>

<!-- Bootstrap JS e dependências -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
