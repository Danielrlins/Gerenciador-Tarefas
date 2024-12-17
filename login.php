<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login Criativa</title>
    <style>
        /* Definindo um fundo claro e uma boa fonte para o layout */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container do formulário */
        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-container p{
            font-size: 16px;
            text-align: center;
        }

        /* Título do formulário */
        .login-container h2 {
            text-align: center;
            /*color: #333; */
            color: blue;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        /* Grupo de input */
        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
            transition: border-color 0.3s;
        }

        .input-group input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        /* Estilo do botão de envio */
        .button-group {
            text-align: center;
        }

        .button-group button {
            width: 100%;
            padding: 12px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button-group button:hover {
            background-color: #45a049;
        }

        /* Rodapé com link para criar conta */
        .footer {
            text-align: center;
            margin-top: 20px;
        }

        .footer p {
            font-size: 14px;
            color: #555;
        }

        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .radio-group {
            display: flex;
            align-items: center;
            gap: 10px; /* Espaçamento entre os elementos */
        }

        .radio-group input[type="radio"] {
            margin: 0 2px 0 0; /* Espaçamento entre o botão e o rótulo */
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <h2>Bem-vindo de volta!</h2>
            <p>Por favor, insira suas credenciais para acessar sua conta.</p>
            
            <form action="testLogin.php" method="post" class="login-form">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                </div>
                
                <div class="input-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                </div>
                
                <div class="button-group">
                    <button type="submit" name="submit">Entrar</button>
                </div>
                
                <div class="footer">
                    <p>Não tem uma conta? <a href="cadastro.php">Crie uma agora</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
