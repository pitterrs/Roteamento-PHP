<?php

$cn = mysqli_connect('localhost', 'root', '') or die(mysqli_error() ); // mysql_connect = função para conectar ao mysql
	
mysqli_select_db($cn, 'cadastro') or die(mysqli_error() ); // função para selecionar o banco de dados

