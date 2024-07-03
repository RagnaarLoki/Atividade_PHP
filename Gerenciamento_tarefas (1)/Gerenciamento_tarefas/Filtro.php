<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gerenciamento_tarefas";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$prioridade = isset($_GET['prioridade']) ? $_GET['prioridade'] : '';

// Filtrar tarefas com base na prioridade
$sql = "SELECT id, titulo, descricao, prioridade, data_lembrete, anexo FROM tarefas";
if ($prioridade != '') {
    $sql .= " WHERE prioridade='$prioridade'";
}

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
</head>
<body>
    <h2>Lista de Tarefas</h2>
    
    <!-- Formulário de Filtro -->
    <form method="GET" action="listar_tarefas.php">
        <label for="prioridade">Filtrar por Prioridade:</label>
        <select id="prioridade" name="prioridade">
            <option value="">Todas</option>
            <option value="Baixa" <?php if ($prioridade == 'Baixa') echo 'selected'; ?>>Baixa</option>
            <option value="Média" <?php if ($prioridade == 'Média') echo 'selected'; ?>>Média</option>
            <option value="Alta" <?php if ($prioridade == 'Alta') echo 'selected'; ?>>Alta</option>
        </select>
        <input type="submit" value="Filtrar">
    </form>

    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Título</th><th>Descrição</th><th>Prioridade</th><th>Data de Lembrete</th><th>Anexo</th><th>Ações</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["titulo"]. "</td><td>" . $row["descricao"]. "</td><td>" . $row["prioridade"]. "</td><td>" . $row["data_lembrete"]. "</td><td><a href='" . $row["anexo"]. "'>Ver Anexo</a></td><td><a href='editar_tarefa.php?id=" . $row["id"] . "'>Editar</a> | <a href='excluir_tarefa.php?id=" . $row["id"] . "'>Excluir</a></td></tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhuma tarefa encontrada";
    }

    $conn->close();
    ?>
</body>
</html>
