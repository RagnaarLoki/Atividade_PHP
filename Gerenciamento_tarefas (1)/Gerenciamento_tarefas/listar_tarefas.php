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

$sql = "SELECT id, titulo, descricao, prioridade, data_lembrete, anexo FROM tarefas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Lista de Tarefas</h2>";
    echo "<table border='1'><tr><th>ID</th><th>Título</th><th>Descrição</th><th>Prioridade</th><th>Data de Lembrete</th><th>Anexo</th><th>Ações</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["titulo"]. "</td><td>" . $row["descricao"]. "</td><td>" . $row["prioridade"]. "</td><td>" . $row["data_lembrete"]. "</td><td><a href='" . $row["anexo"]. "'>Ver Anexo</a></td><td><a href='editar_tarefa.php?id=" . $row["id"] . "'>Editar</a> | <a href='excluir_tarefa.php?id=" . $row["id"] . "'>Excluir</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$conn->close();
?>
