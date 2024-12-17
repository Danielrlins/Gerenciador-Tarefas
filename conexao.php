<?php 
    //$nome = $_POST['nome'];
    //$email = $_POST['email'];
   // $senha_user = $_POST['senha'];

    $server = 'localhost';
    $usuario = 'root';
    $senha = '';
    $nomeDB = 'formulario-daniel';

    $connect = new mysqli($server,$usuario,$senha,$nomeDB);

    if($connect->connect_errno){
        echo "Erro";
    }
   // $smtp = $connect->prepare("INSERT INTO clientes(nome,senha) VALUES (?,?,?)"); //values ?? é um metodo anti-hacker
   // $smtp->bind_param("sss",$nome,$email,$senha_user);

   // if($smtp->execute()){
  //      echo "Mensagem enviada com sucesso";
  //  }
  //  else{
  //      echo "Erro no envio da mensagem $smtp->error";
   // }

  //  $smtp->close();
   // $connect->close();

   // var_dump($nome, $email,$senha_user);

    



?>