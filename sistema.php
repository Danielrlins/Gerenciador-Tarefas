<?php 
    session_start();
    //print_r($_SESSION);
    if(isset($_SESSION['email']) == true && isset($_SESSION['senha']) == true ){
           $logado = $_SESSION['email'];
          
          
    }
    else{
        header('Location: login.php');
    }

?>
<?php
    include("conexao.php"); // Certifique-se de incluir a conexão com o banco de dados

    // Obter o e-mail da sessão
    $email = $_SESSION['email'];

    // Buscar o nome no banco de dados
    $sql = "SELECT nome FROM usuarios WHERE email = ?"; //Consulta no sql para buscar o nome na tabela usuarios onde o campo email coincide
    $stmt = $connect->prepare($sql); //prepara a conexao com o banco de dados de forma segura
    $stmt->bind_param("s", $email); //associa o valor da variavel 'email' ao placeholder '?'
    $stmt->execute(); //executa a consulta
    $result = $stmt->get_result(); //obtem os resultados

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); //retorna o resultado em um array associativo
        $nome = $row['nome'];

        // Exibir o nome
        echo "Bem-vindo, " . htmlspecialchars($nome) . "!"; //protege contra ataques anti-hackers (ataques de XSS)
    } else {
        echo "Usuário não encontrado.";
    }

    $stmt->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de tarefas</title>
    <link rel="stylesheet" href="pgp.css">
  
</head>
<body>
    <h1>Gerenciador de tarefas</h1>
    <div id="container">
       <input type="text" name="" id="input-add" placeholder="O que você quer adicionar?">
       <button id="btn-add-task">Adicionar</button>

       <ul id="list-task">
       
       </ul>
    </div>
    <script src="gerenciador.js"></script>
</body>
</html>