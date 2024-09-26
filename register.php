﻿<?php
require "db_functions.php";

$error = false;
$success = false;
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm_password"])) {

    $conn = connect_db();

    $name = mysqli_real_escape_string($conn,$_POST["name"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
    $confirm_password = mysqli_real_escape_string($conn,$_POST["confirm_password"]);

    if ($password == $confirm_password) {
      $password = md5($password);

      $sql = "INSERT INTO $table_users
              (name, email, password) VALUES
              ('$name', '$email', '$password');";

      if(mysqli_query($conn, $sql)){
        $success = true;
      }
      else {
        $error_msg = mysqli_error($conn);
        $error = true;
      }
    }
    else {
      $error_msg = "Senha não confere com a confirmação.";
      $error = true;
    }
  }
  else {
    $error_msg = "Por favor, preencha todos os dados.";
    $error = true;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta charset="utf-8">
  <title>[WEB 1] Exemplo Sistema de Login - Registro</title>
</head>
<body>
<div class="w3-container">
<div class="w3-panel w3-blue w3-card-4">
<h1>Dados para registro de novo usuário</h1>

<?php if ($success): ?>
  <h3 style="color:lightgreen;">Usuário criado com sucesso!</h3>
  <p>
    Seguir para <a href="login.php">login</a>.
  </p>
<?php endif; ?>

<?php if ($error): ?>
  <h3 style="color:red;"><?php echo $error_msg; ?></h3>
<?php endif; ?>
<form action="register.php" method="post">
<form class="w3-container"
  <label for="name">Nome: </label>
  <input class ="w3-input" type="text" name="name" value="<?php echo $name; ?>" required><br>
	
  <label for="sobrenome">Sobre Nome: </label>
  <input class ="w3-input" type="text" name="sobrenome" value="" required><br>
  
  <label for="data">Data nascimento: </label>
  <input class ="w3-input" type="date" name="data" value="" required><br>
  
  <label for="codigo">Codigo da instituição: </label>
  <input class ="w3-input" type="text" name="codigo" value="" required><br>
  
  <label for="email">Email: </label>
  <input class ="w3-input" type="text" name="email" value="<?php echo $email; ?>" required><br>

  <label for="password">Senha: </label>
  <input class ="w3-input" type="password" name="password" value="" required><br>

  <label for="confirm_password">Confirmação da Senha: </label>
  <input class ="w3-input" type="password" name="confirm_password" value="" required><br>

  <input type="submit" name="submit" value="Criar usuário">
</form>
</form>
<ul>
  <li><a href="index.php">Voltar</a></li>
</ul>
</p>
</body>
</html>
