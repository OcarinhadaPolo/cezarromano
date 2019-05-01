<?php
      $hostname = "localhost";
      $bancodedados = "CezarRomano";
      $usuario = "root";
      $senha = "";
 

      $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
      $mysqli->query("SET NAMES utf8");
      $mysqli->query("SET CHARACTER_SET utf8");
      $mysqli->character_set_name();
      if ($mysqli->connect_errno) {
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      }
      
?>