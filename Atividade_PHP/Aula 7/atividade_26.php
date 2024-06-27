<!DOCTYPE html> 
<html lang="pt"> 
<head> 
<meta charset="UTF-8"> 
<title>Cadastro de Cliente</title> 
</head> 
<body> 
<h1>Cadastro de Cliente</h1>
<form action="processar_cliente.php" method="POST"> 
<label for="nome">Nome:</label> 
<input type="text" id="nome" name="nome" required><br><br> 
<label for="email">Email:</label> 
<input type="email" id="email" name="email" required><br><br> 
<label for="telefone">Telefone:</label> 
<input type="text" id="telefone" name="telefone" required><br><br> 
<label for="endereco">Endereço:</label> 
<input type="text" id="endereco" name="endereco" 
required><br><br>
<label for="cidade">Cidade:</label> 
<input type="text" id="cidade" name="cidade" required><br><br> 
<label for="estado">Estado:</label> 
<input type="text" id="estado" name="estado" required><br><br> 
<label for="cep">CEP:</label> 
<input type="text" id="cep" name="cep" required><br><br> 
<label for="data_nascimento">Data de Nascimento:</label> 
<input type="date" id="data_nascimento" name="data_nascimento"
required><br><br> 
<input type="submit" value="Cadastrar">
</form>
<body>
—--
—---
—---
</body> 
</html>