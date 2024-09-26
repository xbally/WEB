<?php


if (isset($_GET['logout'])==1)
{
  session_start();
  $_SESSION=array();
  session_destroy();
}
//session_start();
//if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']){
//  header("Location: ../TelaLoginn.php"); exit;
//}


$id = $_SESSION["idUser"];
require'validapesquisa.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>teste</title>
	  <meta charset="utf-8">

</head>
<h3> Consulta de dados</h3>
<body>
<div class="container" id="caixameio">
  <h4 >Pesquisar Cliente/Vincular Tag</h4><br>
  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>" class="form-horizontal">
    <div class="col-xs-9">
      <div class="inner-addon left-addon">
        <i class="glyphicon glyphicon-user"></i>
        <input type="text" placeholder="Nome do Cliente..." name="cliente"  class="form-control" /><br>
        <table  class="table table-hover">
        <tr>
        <th class="col">NOME </th>
        <th class="col">Email</th>
      </tr>
        <?php if (!empty($_POST["cliente"]) and ($result = $conn->query($sql))): ?>
          <?php while($row = $result->fetch_row()): ?>
        <tr onclick="window.location.href= 'vinculartag.php?id=<?php echo $row[2]; ?>' "> 
          <td > <?php echo $row[0] ?> </td>
          <td > <?php echo $row[1] ?> </td>
        </tr>
          <?php endwhile;?>
          <?php endif; ?>
        </table>

          

      </div>

    </div>
  </form>

</div>

</body>
</html>