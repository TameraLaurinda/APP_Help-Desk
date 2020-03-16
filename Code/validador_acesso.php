<?php
  session_start();
  if(!$_SESSION['autenticado'] || $_SESSION['autenticado'] == 'NAO')
  {
    header('Location: index.php?login=erro2');
  }
?>