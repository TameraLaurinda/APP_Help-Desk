<?php
  session_start();
  echo'entrei';
  echo($_SESSION['autenticado']);
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'NAO')
  {
    header('Location: index.php?login=erro2');
    echo'entrei';
  }
?>