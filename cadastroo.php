<?php
  session_start();

  session_unset();

  session_destroy();

  header("Location: " . dirname($_SERVER['SCRIPT_NAME']) . "/cadastro_curso/index.php");
?>
