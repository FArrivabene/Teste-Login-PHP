<?php
  if(isset($_POST['submit']))
  {
      //  print_r('Nome: '. $_POST['nome']);
      //  print_r('<br>');
      //  print_r('Email: '. $_POST['email']);
      //  print_r('<br>');
      //  print_r('Telefone: '. $_POST['telefone']);
      //  print_r('Sexo: '. $_POST['genero']);
      //  print_r('<br>');
      //  print_r('Nascimento: '. $_POST['data_nascimento']);
      //  print_r('<br>');
      //  print_r('Cidade: '. $_POST['cidade']);
      //  print_r('<br>');
      //  print_r('Estado: '. $_POST['estado']);
      //  print_r('<br>');
      //  print_r('Endereço: '. $_POST['endereco']);
    include_once('config.php');

     $nome = $_POST['nome'];
     $senha = $_POST['senha'];
     $email = $_POST['email'];
     $telefone = $_POST['telefone'];
     $sexo = $_POST['genero'];
     $data_nasc = $_POST['data_nascimento'];
     $cidade = $_POST['cidade'];
     $estado = $_POST['estado'];
     $endereco = $_POST['endereco'];

     $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, email, telefone, sexo, data_nasc, cidade, estado, endereco)
     VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    header('Location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Formulário | FA</title>
</head>

<body class="form">
  <a href="home.php">Voltar</a>
  <div class="box">
    <form action="formulario.php" method="POST">
      <fieldset>
        <legend><b>Formulário de Clientes</b></legend>
        <br>
        <div class="innput-box">
          <input type="text" name="nome" id="nome" class="innput-user" required>
          <label for="nome" class="label-inpput">Nome completo</label>
        </div>
        <br><br>
        <div class="innput-box">
          <input type="password" name="senha" id="senha" class="innput-user" required>
          <label for="senha" class="label-inpput">Digite a senha</label>
        </div>
        <br><br>
        <div class="innput-box">
          <input type="text" name="email" id="email" class="innput-user" required>
          <label for="email" class="label-inpput">E-mail</label>
        </div>
        <br><br>
        <div class="innput-box">
          <input type="tel" name="telefone" id="telefone" class="innput-user" required>
          <label for="telefone" class="label-inpput">Telefone</label>
        </div>
        <br>

        <p>Sexo:</p>
        <input type="radio" id="feminino" name="genero" value="Feminino" required>
        <label for="feminino">Feminino</label><br>
        <input type="radio" id="masculino" name="genero" value="Masculino" required>
        <label for="masculino">Masculino</label><br>
        <input type="radio" id="outro" name="genero" value="Outro" required>
        <label for="outro">Outro</label>
        <br><br>

        <label for="data_nascimento"><b>Data de Nascimento:</b></label>
        <input type="date" name="data_nascimento" id="data_nascimento" required>
        <br><br>

        <div class="innput-box">
          <input type="text" name="cidade" id="cidade" class="innput-user" required>
          <label for="cidade" class="label-inpput">Cidade</label>
        </div>
        <br><br>
        <div class="innput-box">
          <input type="text" name="estado" id="estado" class="innput-user" required>
          <label for="estado" class="label-inpput">Estado</label>
        </div>
        <br><br>
        <div class="innput-box">
          <input type="text" name="endereco" id="endereco" class="innput-user" required>
          <label for="endereco" class="label-inpput">Endereço</label>
        </div>
        <br><br>

        <input type="submit" name="submit" id="submit">

      </fieldset>
    </form>
  </div>
</body>

</html>