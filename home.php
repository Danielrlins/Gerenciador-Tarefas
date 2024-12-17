<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        h2{
            text-align: center;

        }
        #touchs{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
            
        }
        #touch button{
            background-color: grey;
            cursor: pointer;
            padding: 20px;
            border-radius: 10px;
        }
        
        #btn-login:hover{
            background-color:rgba(128, 128, 128, 0.541);
            
        } 
        #btn-cadastro:hover{
            background-color:rgba(128, 128, 128, 0.541);
            
        } 
       
       
    </style>
</head>
<body>
    <h2>Conheçam o nosso Gerenciador de Tarefas</h2>
    <div id="touchs">
        <div id="touch">
            <button id="btn-login">Login</button>
        </div>
        <div id="touch">
            <button id="btn-cadastro">Cadastro</button>
        </div>
    </div>
    <script>
        let btn_login = document.getElementById("btn-login");
        let btn_cadastro = document.getElementById("btn-cadastro");

        btn_login.addEventListener("click",function(){
            window.location.href = "login.php";
        })

        btn_cadastro.addEventListener("click",function(){
            window.location.href = "cadastro.php"
        })
    </script>
</body>
</html>