<?php 
	include "bd/conexao.php";
	
	$select_os = $_GET["os"];
	
	// Selecionando Ordem de Servico Cadastrada
	$sqlos 		= "SELECT * FROM servico WHERE id_os = $select_os LIMIT 1";
	$qry_os 		= mysql_query($sqlos);
	$os	 		= mysql_fetch_assoc($qry_os);
	
	// Selecionando Equipamento Cadastrado
	$sqlequip 		= "SELECT * FROM equipamento WHERE id_equipamento = $os[id_equipamento] LIMIT 1";
	$qry_equip 	= mysql_query($sqlequip);
	$os_equip 		= mysql_fetch_assoc($qry_equip);
	
	// Selecionando Cliente Cadastrado
	$sqlcli 		= "SELECT * FROM cliente WHERE id_cli = $os[id_cli] LIMIT 1";
	$qry_cli 	= mysql_query($sqlcli);
	$os_cli 		= mysql_fetch_assoc($qry_cli);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>PontoCom Informatica - Ordem de Servico</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
    	<div id="tb_layout_os">    		
    		<div id="top_os">
				<b>PONTOCOM INFORMATICA</b> <br>    			
    			L Barreto Almeida <br>
    			CNPJ: 08.621.745/0001-80 <br>
    			Rua Conselheiro José Fernandes 124 Sala E/F - Centro <br>
    			CEP: 28035-232 - Campos dos Goytacazes - RJ <br>
    			Tel: (22) 2725-8240 - Email: pontocom0002@gmail.com <br>  			
    		</div>
    		
			<div id="id_os">RECIBO DE ENTREGA - OS Nº: <?php echo "$os[id_os]"; ?></div>

			<div id="cli_os">
				<div id="nome_os"><b>Cliente:</b> <?php echo "$os_cli[nome_cli]"; ?></div>
				<div id="end_os"><b>Endereço:</b> <?php echo "$os_cli[rua_cli], $os_cli[num_cli] - $os_cli[bairro_cli]"; ?></div>
				<div id="end_os"><b>CEP:</b> <?php echo "$os_cli[cep_cli] - $os_cli[cidade_cli] - $os_cli[estado_cli]"; ?></div>
				<div id="contato_os"><b>Contato:</b> <?php echo "$os_cli[tel_cli] / $os_cli[email_cli]"; ?></div>
			</div>

			<div id="equip_os"><b>EQUIPAMENTO:</b> <?php echo "$os_equip[tipo_equipamento]"; ?> - <b>MARCA:</b> <?php echo "$os[marca]"; ?></div>

			<div id="def_os">
				<b>DEFEITO RELATADO:</b><br>
				<?php echo "$os[rel_defeito]"; ?>
			</div>	
			<div id="acess_os">
				<b>ACESSORIOS ENTREGUES:</b><br>
				<?php echo "$os[acessorios]"; ?>
			</div>			

			<div id="bot_os">
				ATENÇÃO: Será cobrado o Orçamento de Notebooks no valor de R$ 40,00 caso o cliente não realize nenhum serviço <br>
				A Empresa não se responsabiliza por perda de dados do cliente, ficando a responsabilidade por backups a cargo do cliente	
			</div>
			
			<div id="copy_os">Ordem de Serviço LBA 1.0 &reg;2015 - todos dos direitos reservados</div>    	
    	</div>
	</body>
</html>
