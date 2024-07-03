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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $prioridade = $_POST["prioridade"];
    $data_lembrete = $_POST["data_lembrete"];
    
    // Processar o upload do anexo
    $anexo = '';
    if (isset($_FILES['anexo']) && $_FILES['anexo']['error'] == 0) {
        $anexo = 'uploads/' . basename($_FILES['anexo']['name']);
        move_uploaded_file($_FILES['anexo']['tmp_name'], $anexo);
    }

    $sql = "INSERT INTO tarefas (titulo, descricao, prioridade, data_lembrete, anexo) VALUES ('$titulo', '$descricao', '$prioridade', '$data_lembrete', '$anexo')";

    if ($conn->query($sql) === TRUE) {
        echo "Tarefa cadastrada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
