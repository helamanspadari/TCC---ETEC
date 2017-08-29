<?php
	$host = "localhost";
	$user = "root";
	$senha = "";
	$banco = "escola";

	$conexao = mysql_connect($host,$user,$senha) or die (mysql_error());
	
	mysql_select_db($banco) or die (mysql_error());
?>