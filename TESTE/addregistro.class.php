<?php

$servername = "localhost";
$database = "controlequipe";
$username = "root";
$password = "root";
$conn = mysqli_connect($servername, $username, $password, $database);

public function InsertRegistro($registro, $data, $analista)
      {
        $query = "INSERT INTO `registro`(`INC_numero`, `INC_data`, `analistas_idanalistas`) VALUES ('$registro', '$data', '$analista')";
        header('Location: index.php?alert=2'); 
        }