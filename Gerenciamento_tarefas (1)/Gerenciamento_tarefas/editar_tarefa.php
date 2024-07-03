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

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM tarefas WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $titulo = $row["titulo"];
        $descricao = $row["descricao"];
        $prioridade = $row["prioridade"];
        $data_lembrete = $row["data_lembrete"];
        $anexo = $row["anexo"];
    } else {
        echo "Tarefa não encontrada";
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $prioridade = $_POST["prioridade"];
    $data_lembrete = $_POST["data_lembrete"];

    $sql = "UPDATE tarefas SET titulo='$titulo', descricao='$descricao', prioridade='$prioridade', data_lembrete='$data_lembrete' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Tarefa atualizada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>
</head>
<body>
    <h2>Editar Tarefa</h2>
    <form action="editar_tarefa.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="<?php echo $titulo; ?>" required><br><br>
        
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"><?php echo $descricao; ?></textarea><br><br>
        
        <label for="prioridade">Prioridade:</label>
        <select id="prioridade" name="prioridade">
            <option value="Baixa" <?php if ($prioridade == 'Baixa') echo 'selected'; ?>>Baixa</option>
            <option value="Média" <?php if ($prioridade == 'Média') echo 'selected'; ?>>Média</option>
            <option value="Alta" <?php if ($prioridade == 'Alta') echo 'selected'; ?>>Alta</option>
        </select><br><br>
        
        <label for="data_lembrete">Data de Lembrete:</label>
        <input type="date" id="data_lembrete" name="data_lembrete" value="<?php echo $data_lembrete; ?>"><br><br>
        
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
