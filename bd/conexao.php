<?php
$host 		= "localhost";
$usuario 	= "root";
$senha 		= "";
$db=mysql_connect($host,$usuario,$senha) or die("N?o foi possivel fazer a conex?o com o servidor de banco de ");
mysql_select_db("ordemservico",$db) or die("N?o foi possivel fazer a conex?o com o banco de dados");
?>
