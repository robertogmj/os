<?php
	include "bd/conexao.php";
	
	// Captura os Dados

	$nome_cli = $_POST[nome_cli];
	$rua_cli = $_POST[rua_cli];
	$num_cli = $_POST[num_cli];
	$bairro_cli = $_POST[bairro_cli];
	$cep_cli = $_POST[cep_cli];
	$cidade_cli = $_POST[cidade_cli];
	$estado_cli = $_POST[estado_cli];
	$tel_cli = $_POST[tel_cli];
	$email_cli = $_POST[email_cli];
	
	
	// Insere dados Cliente
	
	$ins_cli = "INSERT INTO cliente(nome_cli,rua_cli,num_cli,bairro_cli,cep_cli,cidade_cli,estado_cli,email_cli,tel_cli) VALUES('$nome_cli','$rua_cli','$num_cli','$bairro_cli','$cep_cli','$cidade_cli','$estado_cli','$email_cli','$tel_cli')";
	mysql_query($ins_cli) or die(mysql_error());
	
	mysql_close();
	
	echo "Registrando Novo Cliente...";
	
?>

	<script language= "JavaScript">
		location.href="http://192.168.25.204/os/"
	</script>


