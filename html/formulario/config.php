<?php

  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassword = 'Edsonops123@';
  $dbName = 'formulario-edson';

  $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

  if ($conexao->connect_error) {
    echo "erro";
  }
  else {
    echo"sucesso";
  }

?>