<?php
	include "bd/conexao.php";
	
	// Captura os Dados

	$data_abertura = date('Y-m-d');
	$data_entrega = date('Y-m-d',strtotime("+3 days"));
	$sel_cliente = $_POST[sel_cliente];
	$sel_equipamento = $_POST[sel_equipamento];
	$marca_equipamento = $_POST[marca_equipamento];
	$acess_equipamento = $_POST[acess_equipamento];
	$def_equipamento = $_POST[def_equipamento];
	
	
	// Insere dados Ordem Servico
	
	$ins_os = "INSERT INTO servico(id_cli,id_equipamento,marca,acessorios,rel_defeito,data_abertura,data_entrega) VALUES('$sel_cliente','$sel_equipamento','$marca_equipamento','$acess_equipamento','$def_equipamento','$data_abertura','$data_entrega')";
	mysql_query($ins_os) or die(mysql_error());
	
	mysql_close();
	
	echo "Registrando Ordem de Servico...";
	
?>

	<script language= "JavaScript">
		location.href="http://192.168.25.204/os/"
	</script>
	


