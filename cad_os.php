<?php
	// Selecionando Clientes Cadastrados
	$sqlcli 		= "SELECT * FROM cliente ORDER BY nome_cli ASC";
	$qry_cli 	= mysql_query($sqlcli);
	
	// Selecionando Equipamentos Cadastrados
	$sql_equipa 	= "SELECT * FROM equipamento";
	$qry_equipa 	= mysql_query($sql_equipa);
?>
<div class="tit_form_os"> Cadastro de Ordem Serviços </div>
<form action="op_os.php" method="post" enctype="multipart/form-data">
	<div class="ico_form_os"> <a href="index.php?link=5">
		<img src="imgs/ico_add_cli.png" title="Cadastrar Novo Cliente" width="50px" height="50px"></a>
	</div> 
	<div class="inp_form_os">
		Cliente: 
			<select name="sel_cliente" id="sel_cliente">
				<?php	while($lista_cli 	= mysql_fetch_array($qry_cli)){ ?>
					<option value="<?php echo $lista_cli[id_cli]; ?>" label="<?php echo $lista_cli[nome_cli]; ?>"><?php echo $lista_cli[nome_cli]; ?></option>
				<?php } ?>
			</select> 
	</div>
	<div class="inp_form_os">
		Equipamento:
			<select name="sel_equipamento">
				<?php	while($lista_equipa 	= mysql_fetch_array($qry_equipa)){ ?>
					<option value="<?php echo $lista_equipa[id_equipamento]; ?>" label="<?php echo $lista_equipa[id_equipamento]; ?>" <?php if($lista_equipa['id_equipamento'] == $os['id_equipamento']){ echo 'selected = "true"'; }?> ><?php echo $lista_equipa[tipo_equipamento]; ?></option>
				<?php } ?>		
			</select> | 
		Marca: <input type="text" name="marca_equipamento" id="marca_equipamento" value="<?php echo $os['marca']; ?>" size="30" />
	</div>
	<div class="inp_form_os"> Acessorios: <input type="text" name="acess_equipamento" id="acess_equipamento" value="<?php echo $os['acessorios']; ?>" size="50" /> </div>
	<div class="inp_form_os"> Defeito Relatado: <input type="text" name="def_equipamento" id="def_equipamento" value="<?php echo $os['rel_defeito']; ?>" size="50" /> </div>
	<div class="inp_form_os"> <input type="submit" value="Cadastrar" /> </div>
</form>