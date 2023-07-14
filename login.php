<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Tela de Login</title>
</head>

<style>
body {
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(15, 54, 71));
}

.nova-classe {
  background-color: dodgerblue;
  border: none;
  padding: 15px;
  width: 100%;
  border-radius: 10px;
  color: white;
}

.nova-classe:hover {
  background-color: aquamarine;
  color: black;
  font-weight: 700;
  cursor: pointer;
}
</style>

<body>
  <a href="home.php">Voltar</a>
  <div class="tela-login">
    <h1>Login</h1>
    <form action="testelogin.php" method="POST">
      <input class="login" type="text" name="email" placeholder="Email">
      <br><br>
      <input class="login" type="password" name="senha" placeholder="Digite a senha">
      <br><br>
      <input type="submit" name="submit" class="nova-classe" value="Enviar">
    </form>
    <?php
    if (isset($_GET['erro']) && $_GET['erro'] == 'invalido') {
    echo '<p class="erro">Login inválido.</p>';
    }
    ?>
  </div>
</body>

</html>