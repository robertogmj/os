<?php 
	include "bd/conexao.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>PontoCom Informatica - Ordem de Servico</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
        
		<style type="text/css">
			#bgtela{
				background:url(imgs/bgs/<?php echo $bgrand; ?>.jpg) #CCCC00 center no-repeat;
			}
		</style>
	</head>

	<body>
		<div id="principal">
		<div id="cabecalho">
			<div id="top_logo"><img src="imgs/logolba.png" /></div>
			<div id="top_txt">
				<b>PONTOCOM INFORMATICA</b> <br>    			
    			L Barreto Almeida <br>
    			CNPJ: 08.621.745/0001-80 <br>
    			Rua Conselheiro José Fernandes 124 Sala E/F - Centro <br>
    			CEP: 28035-232 - Campos dos Goytacazes - RJ <br>
    			Tel: (22) 2725-8240 - Email: pontocom0002@gmail.com <br>  			
			</div>		
		</div>
		<div id="vertmenu">
    		<div class="menu_item"><a href="index.php?link=1"><div class="menu_img"><img src="imgs/ico_cli.png" width="50px" height="50px" /></div><div class="menu_txt">Cadastrar Cliente</div></a></div>
			<div class="menu_item"><a href="index.php?link=4"><div class="menu_img"><img src="imgs/ico_os.png" width="50px" height="50px" /></div><div class="menu_txt">Cadastrar O.S</div></a></div>
			<div class="menu_item"><a href="index.php?link=6"><div class="menu_img"><img src="imgs/ico_list.png" width="50px" height="50px" /></div><div class="menu_txt">Listar O.S</div></a></div>
<!-- 		<div><a href="index.php?link=3">Cadastrar Tecnico</a></div> -->
		</div>
    	<div id="conteudo">		
    		<?php
		    	$paghome = $_GET["link"];
				if($paghome == "1"){ include "cad_cliente.php"; }
					elseif($paghome == "2"){ include "cad_equipamento.php"; }
					elseif($paghome == "3"){ include "cad_tecnico.php"; }
					elseif($paghome == "4"){ include "cad_os.php"; }
					elseif($paghome == "5"){ include "cad_os_newcli.php"; }
					elseif($paghome == "6"){ include "list_os.php"; }
			?> 		
    	</div>
    	<div id="rodape">
			Ordem de Serviço LBA 1.0 &reg;2015 - todos dos direitos reservados    	
    	</div>
		</div>
	</body>
</html>
