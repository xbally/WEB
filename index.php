<?php
  require "authenticate.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login para area do professor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  <style>
  .bg-2 { 
      background-color: #474e5d;
      color: #ffffff;
  </style>

<body>
<div class="jumbotron bg-2 text-center">
	<div class="container-fluid bg-1 text-center">
<h1> Area do Professor! </h1>
</div>
</div>

<p>
  Escolha opção:
</p>
<div class="w3-container">
<ul>
  <?php if ($login): ?>
	<li><a href="logout.php">Logout</a></li>
  <?php else: ?>
    <a href="login.php">Login<a></button></br></br>
    <a href="register.php">Registrar-se<a></li>
  <?php endif; ?>
</ul>
</div>

<div class="text-center">
	<h2>Um pouco da nossa instituição </h2>
</div>
</p>
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="http://www.jandaiadosul.ufpr.br/wp-content/uploads/2016/12/logo_ufpr.png" style="width:100%">
  <img class="mySlides" src="http://www.gazetadopovo.com.br/blogs/blog-do-bessa/wp-content/uploads/sites/176/2016/09/UFPR.jpg" style="width:100%">
  <img class="mySlides" src="http://blog.unavirtual.com.br/wp-content/uploads/2016/09/qual-o-papel-do-professor-em-um-curso-a-distancia.jpeg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>

</html>
