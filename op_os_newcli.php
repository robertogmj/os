<?php
	include "bd/conexao.php";
	
	// Captura os Dados
	$os = $_POST[os];	
	$action = $_POST[action];

	$nome_cli = $_POST[nome_cli];
	$rua_cli = $_POST[rua_cli];
	$num_cli = $_POST[num_cli];
	$bairro_cli = $_POST[bairro_cli];
	$cep_cli = $_POST[cep_cli];
	$cidade_cli = $_POST[cidade_cli];
	$estado_cli = $_POST[estado_cli];
	$tel_cli = $_POST[tel_cli];
	$email_cli = $_POST[email_cli];

	$data_abertura = date('Y-m-d');
	$data_entrega = date('Y-m-d',strtotime("+3 days"));
	$sel_equipamento = $_POST[sel_equipamento];
	$marca_equipamento = $_POST[marca_equipamento];
	$acess_equipamento = $_POST[acess_equipamento];
	$def_equipamento = $_POST[def_equipamento];
	
	if($action == ""){
		// Insere dados Cliente
		$ins_cli = "INSERT INTO cliente(nome_cli,rua_cli,num_cli,bairro_cli,cep_cli,cidade_cli,estado_cli,email_cli,tel_cli) VALUES('$nome_cli','$rua_cli','$num_cli','$bairro_cli','$cep_cli','$cidade_cli','$estado_cli','$email_cli','$tel_cli')";
		mysql_query($ins_cli) or die(mysql_error());
	
		// Insere dados Ordem Servico
		$sqlcli 		= "SELECT * FROM cliente WHERE nome_cli = '$nome_cli' ORDER BY id_cli DESC";
		$qry_cli 	= mysql_query($sqlcli);
		$sel_cli 	= mysql_fetch_array($qry_cli);
	
		$sel_cliente = $sel_cli[id_cli];
	
		$ins_os = "INSERT INTO servico(id_cli,id_equipamento,marca,acessorios,rel_defeito,data_abertura,data_entrega) VALUES('$sel_cliente','$sel_equipamento','$marca_equipamento','$acess_equipamento','$def_equipamento','$data_abertura','$data_entrega')";
		mysql_query($ins_os) or die(mysql_error());
	
		mysql_close();
	
		echo "Registrando Ordem de Servico...";
	}elseif($action == "1"){
		// Selecionando Ordem de Serviço para Alteração
		$sqlos 		= "SELECT * FROM servico WHERE id_os = $os LIMIT 1";
		$qry_os 		= mysql_query($sqlos);
		$os	 		= mysql_fetch_assoc($qry_os);

		$up_os = "UPDATE servico SET 
							id_equipamento = '$sel_equipamento', 
							marca = '$marca_equipamento', 
							acessorios = '$acess_equipamento', 
							rel_defeito = '$def_equipamento' 
						WHERE id_os = '$os[id_os]'";
		
		mysql_query($up_os) or die(mysql_error());
		
		// Selecionando Cliente para Alteração
		$sqlcli 		= "SELECT * FROM cliente WHERE id_cli = $os[id_cli] LIMIT 1";
		$qry_cli 	= mysql_query($sqlcli);
		$os_cli 		= mysql_fetch_assoc($qry_cli);
		
		$up_cli = "UPDATE cliente SET 
							nome_cli = '$nome_cli', 
							rua_cli = '$rua_cli', 
							num_cli = '$num_cli', 
							bairro_cli = '$bairro_cli', 
							cep_cli = '$cep_cli', 
							cidade_cli = '$cidade_cli', 
							estado_cli = '$estado_cli', 
							email_cli = '$email_cli', 
							tel_cli = '$tel_cli' 
						WHERE id_cli = '$os_cli[id_cli]'";
		
		mysql_query($up_cli) or die(mysql_error());
		mysql_close();	
	}	
?>
	<script language= "JavaScript">
		location.href="index.php?link=6"
	</script>