<?php
require "db_functions.php";
require "authenticate.php";

$error = false;
$password = $email = "";

if (!$login && $_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["email"]) && isset($_POST["password"])) {

    $conn = connect_db();

    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
    $password = md5($password);

    $sql = "SELECT id,name,email,password FROM $table_users
            WHERE email = '$email';";

    $result = mysqli_query($conn, $sql);
    if($result){
      if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if ($user["password"] == $password) {

          $_SESSION["user_id"] = $user["id"];
          $_SESSION["user_name"] = $user["name"];
          $_SESSION["user_email"] = $user["email"];

          header("Location: " . dirname($_SERVER['SCRIPT_NAME']) . "/pagina.php");
          exit();
        }
        else {
          $error_msg = "Senha incorreta!";
          $error = true;
        }
      }
      else{
        $error_msg = "Usuário não encontrado!";
        $error = true;
      }
    }
    else {
      $error_msg = mysqli_error($conn);
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Login - Registro</title>
</head>
<body>
<h1>Login</h1>

<?php if ($login): ?>
    <h3>Você já está logado!</h3>
  </body>
  
  <?php exit(); ?>
<?php endif; ?>

<?php if ($error): ?>
  <h3 style="color:red;"><?php echo $error_msg; ?></h3>
<?php endif; ?>

<form action="login.php" method="post">
  <div class="form-group">
  <label class = "form-group col-sm-offset-1 col-sm-5" for="email">Email: </label>
  <div class="form-group col-sm-offset-1 col-sm-10">
  <input class = "form-control" type="text" name="email" value="<?php echo $email; ?>" required><br>
</div>
</div>
<div class="form-group">
 <label class = "col-sm-offset-1 col-sm-10" for="password">Senha: </label>
  <div class="col-sm-offset-1 col-sm-10">
  <input class = "form-control" type="password" name="password" value="" required><br>
</div>
</div>
   <div class="form-group">        
   <div class="col-sm-offset-2 col-sm-10">
  <input type="submit" class = "btn btn-primary active" name="submit" value="Entrar"><br><br>
  </div>
 </div> 
</form>


  <div class="form-group">        
  <div class="col-sm-offset-2 col-sm-10">
  <a class = "btn btn-primary active" href="index.php">Voltar</a>
  </div>
 </div> 



</html>
