<?php
session_start();
//print_r($_REQUEST);
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
  include_once('config.php');
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // print_r('Email: ' . $email);
  // print_r('<br>');
  // print_r('Senha: ' . $senha);

  $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' ";
  $result = $conexao -> query ($sql);

  //verificar se tem o registro no banco de dados
  // print_r($sql);
  // print_r($result);

  if(mysqli_num_rows($result) < 1)
  {
    //unset($_SESSION['email']);
    //unset($_SESSION['senha']);
    //print_r('Não existe');
    header('location: login.php?erro=invalido');
  }
  else
  {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    //print_r('Existe');
    header('location: sistema.php');
  }
}
else
{
  header('location: login.php');
}
?>