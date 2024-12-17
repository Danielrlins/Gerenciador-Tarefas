<?php
include_once('conexao.php');
   
if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $genero = $_POST['genero'];

    // Inserção com prepared statement
    $stmt = $connect->prepare("INSERT INTO usuarios (nome, email, senha, genero) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $email, $senha, $genero);

    if ($stmt->execute()) {
        //echo "Cadastro realizado com sucesso!";
        header('Location: login.php');
    } else {
       echo "Erro ao cadastrar: " . $stmt->error;
   }

    $stmt->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <div class="login-container">
        <form action="cadastro.php" method="post" class="login-form">
            <h2>Cadastro de clientes</h2>

            <div class="input-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="input-group">
                <label for="email">Email:</label>
                <input type="Email" name="email" id="email" required>
            </div>


            <div class="input-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required>
            </div>
            
            <div class="input-group">
                <label>Sexo:</label>
                <div class="radio-group">
                    <input type="radio" name="genero" id="feminino" value="feminino" required>
                    <label for="feminino">Feminino</label>

                    <input type="radio" name="genero" id="masculino" value="masculino" required>
                    <label for="masculino">Masculino</label>

                    <input type="radio" name="genero" id="outro" value="outro" required>
                    <label for="outro">Outro</label>
                </div>
            </div>




            <div class="button-group">
                <button type="submit" name="submit">Entrar</button>
            </div>

           
        </form>
    </div>
</body>
</html>
