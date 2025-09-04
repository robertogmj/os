<div class="tit_form_os"> Cadastro de Clientes </div>

<form action="op_cliente.php" method="post" enctype="multipart/form-data">	
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
	<div class="inp_form_os"> <input type="submit" value="Cadastrar" /> </div>
</form>