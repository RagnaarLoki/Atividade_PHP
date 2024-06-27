<?php 
// Configurações do banco de dados 
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "loja"; 
// Conectar ao banco de dados 
$conn = new mysqli($servername, $username, $password, 
$dbname);
// Verificar a conexão 
if ($conn->connect_error) { 
    die("Conexão falhou: " . $conn->connect_error); 
    }
// Verifica se a requisição foi feita via método POST 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $nome = $_POST['nome'] ?? ''; 
    $email = $_POST['email'] ?? ''; 
    $telefone = $_POST['telefone'] ?? '';
     $endereco = $_POST['endereco'] ?? ''; 
    $cidade = $_POST['cidade'] ?? ''; 
    $estado = $_POST['estado'] ?? ''; 
    $cep = $_POST['cep'] ?? ''; 
    $data_nascimento = $_POST['data_nascimento'] ?? '';
// Prepara a declaração SQL para inserção 
$stmt = $conn->prepare("INSERT INTO clientes (nome, email, telefone, 
endereco, cidade, estado, cep, data_nascimento) VALUES (?, ?, ?, ?, ?, ?, 
?, ?)"); 
$stmt->bind_param("ssssssss", $nome, $email, $telefone, $endereco, 
$cidade, $estado, $cep, $data_nascimento); 
// Executa a declaração 
if ($stmt->execute()) {
    echo "Cliente cadastrado com sucesso!"; 
    } else { 
    echo "Erro ao cadastrar cliente: " . $stmt->error; 
    }
// Fecha a declaração e a conexão 
$stmt->close(); 
$conn->close(); } else { 
header('Location: formulario.html'); 
exit; 
} 
?>
            