</!DOCTYPE html>
<html>
<head>
		<h2>teste</h2>>
</head>
<body>


<?php
 $conexao = mysql_query("SELECT * FROM lossin");
 	while($td = mysql_fetch_array($conexao)){
 	 $name = $td['name'];
 	}

?>
		<h1><?php echo $name?></h1>



</body>
</html>
