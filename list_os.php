<?php 
	// Selecionando Ordem de Servico Cadastrada
	$sqlos 		= "SELECT * FROM servico ORDER BY id_os DESC";
	$qry_os 		= mysql_query($sqlos);
?>
<div class="tit_list_os"> Ordens de Serviço Cadastradas </div>
<div id="list_os">
<?php
	// Listando Ordem de ServiÃ§o Cadastradas	
	while($os = mysql_fetch_array($qry_os)){
		
		// Selecionando Cliente Cadastrado
		$sqlcli 		= "SELECT * FROM cliente WHERE id_cli = $os[id_cli] LIMIT 10";
		$qry_cli 	= mysql_query($sqlcli);
		$os_cli 		= mysql_fetch_assoc($qry_cli);
?>
		<div class="item_list_os">
			<b>OS nº:</b> <?php echo $os['id_os']; ?><b> - Cliente:</b> <?php echo $os_cli['nome_cli'];?>
			<div class="ico_list_os">
				<a href="index.php?link=5&os=<?php echo $os['id_os']; ?>&action=1"><img src="imgs/ico_editar.png" title="Alterar OS" width="18px" height="18px" /></a> | 
				<a href="os_layout.php?os=<?php echo $os['id_os']; ?>"><img src="imgs/ico_print.png" title="Imprimir OS" width="18px" height="18px" /></a>
			</div>
		</div>
<?php
	}
?>
</div>