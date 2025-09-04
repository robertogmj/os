<?php
	// Pegando Parametros de OS via GET
	$os = $_GET[os];
	$action = $_GET[action];
	
	// Testando Ação: Inserir ou Alterar
	if($action == 1){
		// Selecionando Ordem de Serviço para Alteração
		$sqlos 		= "SELECT * FROM servico WHERE id_os = $os LIMIT 1";
		$qry_os 		= mysql_query($sqlos);
		$os	 		= mysql_fetch_assoc($qry_os);
		
		// Selecionando Cliente para Alteração
		$sqlcli 		= "SELECT * FROM cliente WHERE id_cli = $os[id_cli] LIMIT 1";
		$qry_cli 	= mysql_query($sqlcli);
		$os_cli 		= mysql_fetch_assoc($qry_cli);
	}

	// Selecionando Equipamentos Cadastrados
	$sql_equipa 	= "SELECT * FROM equipamento";
	$qry_equipa 	= mysql_query($sql_equipa);
?>

<div class="tit_form_os"> Cadastro de Ordem Serviços </div>

<form action="op_os_newcli.php" method="post" enctype="multipart/form-data">
<!-- Cadastro Novo Cliente -->		
		<div class="inp_form_os"> Nome: <input type="text" name="nome_cli" id="nome_cli" size="50" value="<?php echo $os_cli['nome_cli'];?>" maxlength="50" /> </div>
		<div class="inp_form_os"> Rua: <input type="text" name="rua_cli" id="rua_cli" value="<?php echo $os_cli['rua_cli'];?>" size="30" maxlength="30" /> | 
											Nº: <input type="text" name="num_cli" id="num_cli" value="<?php echo $os_cli['num_cli'];?>" size="5" maxlength="5" /> | 
											Bairro: <input type="text" name="bairro_cli" id="bairro_cli" value="<?php echo $os_cli['bairro_cli'];?>" size="10" maxlength="10" />
		</div>
		<div class="inp_form_os"> CEP: <input type="text" name="cep_cli" id="cep_cli" value="<?php echo $os_cli['cep_cli'];?>" size="8" maxlength="8" /> | 
											Cidade: <input type="text" name="cidade_cli" id="cidade_cli" value="<?php if($os != ""){ echo $os_cli['cidade_cli']; }else{ echo "Campos dos Goytacazes"; } ?>" size="20" maxlength="30" /> | 
											Estado: <input type="text" name="estado_cli" id="estado_cli" value="<?php if($os != ""){ echo $os_cli['estado_cli']; }else{ echo "RJ"; } ?>" size="2" maxlength="2" />
		</div>
		<div class="inp_form_os"> Telefone: <input type="text" name="tel_cli" id="tel_cli" value="<?php echo $os_cli['tel_cli'];?>" size="11" maxlength="11" /> | 
											Email: <input type="text" name="email_cli" id="email_cli" value="<?php echo $os_cli['email_cli'];?>" size="30" maxlength="30" />
		</div>

<!-- Cadastro Ordem de Serviço -->
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
	
	<input type="hidden" name="action" id="action" value="<?php echo $action; ?>" />
	<input type="hidden" name="os" id="os" value="<?php echo $os['id_os']; ?>" />		
	<div class="inp_form_os"> <input type="submit" value="Cadastrar" /> </div>
</form>