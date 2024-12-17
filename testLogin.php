<?php 
  session_start();
  //print_r($_REQUEST);

  if(isset($_POST['submit']) && !empty($_POST['email']) && !empty(['senha'])){
     
    include("conexao.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    print_r($email);
    print_r($senha);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $result = $connect->query($sql);

    //print_r($sql);
    //print_r($result);

    if(mysqli_num_rows($result) < 1){
        unset($_SESSION['email']); //vai destruir qualquer registro de email e senha que não tenha no bd
        unset($_SESSION['senha']);
        //echo "Não existe";
        header('Location: login.php');
    }
    else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        //echo "Existe";
        header('Location: sistema.php');
        
    }
  }
  else {
    header('Location:login.php');
  }


?>