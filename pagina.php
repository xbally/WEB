<!DOCTYPE html>
<html>
  <head>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  </head>
  <body>

<div class="jumbotron text-center">

  <h1>Bem Vindo, professor </h1>
  <?php
   if ($login) {
      echo ", $user_name!";
    }
    else {
      echo "";
    }
  ?>
  <p>Professor selecione uma opção!</p> 
</div>
<div class="container">
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
<li><a data-toggle="tab" href="#menu1">Busca usuario</a></li>
<li><a data-toggle="tab" href="#menu2">Criar exercicio</a></li>
<li><a data-toggle="tab" href="#menu3">Exbi exercicio</a></li>
<li><a data-toggle="tab" href="#menu4">Busca exercicio</a></li>
<li><a data-toggle="tab" href="#menu5">Adiciona lista</a></li>
<li><a data-toggle="tab" href="#menu6">Cadastro disciplina</a></li>
<li><a data-toggle="tab" href="#menu7">Cadastro curso</a></li>
  </ul>


<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Busca usuario</h3>
      <a class ="btn btn-danger" href="">Lista usuarios adiministradores<a>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Busca usuario</h3>
	<a class ="btn btn-danger" href="">Cria lista de exercicio<a>     
	 <p></p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Exbi exercicio</h3>
	  <a class ="btn btn-danger" href="">Exibi lista de exercicio<a>
      <p></p>
    </div>
	    <div id="menu4" class="tab-pane fade">
      <h3>Busca exercicio </h3>
  <a class ="btn btn-danger" href="">Buscar exercicio<a>
      <p></p>
    </div>
	    <div id="menu5" class="tab-pane fade">
      <h3>Adiciona lista</h3>
  <a class ="btn btn-danger" href="">Adiciona lista de exercicio<a>
      <p></p>
    </div>
	    <div id="menu6" class="tab-pane fade">
      <h3>Cadastro disciplina</h3>
<a class ="btn btn-danger" href="/cadastroo.php/index.php">Cadastro Disciplina<a>
      <p></p>
    </div>
   <div id="menu7" class="tab-pane fade">
      <h3>Cadastro curso</h3>
	 <a class ="btn btn-danger" href="cadastroo.php">Cadastro curso<a>
      <p></p>
    </div>
  </div>
</div>
    <li><a href="logout.php">Logout</a></li>
	<a href="cadastroo.php">Cadastro curso<a>

 </body>
</html>