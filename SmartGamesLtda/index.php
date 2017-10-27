<?php

//CONEXAO
	require_once('modulo.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php"); ?>
	</head>
	<body>
		<div id="principal">

<!-- PEGANDO A FUNÇÃO DE AUTENTICAR -->
			<?php require_once('autenticacao.php'); ?>

			<div id="conteudo_login">
				<div id="area_login">
					<hgroup id="hgroup_modal">
					  <h1 class="h1_modal"><p>ÁREA DE AUTENTICAÇÃO</p></h1>
					</hgroup>

					<form id="form_modal" method="post" action="index.php">
					  <div class="group">
		  				<input type="email" class="input_modal" name="txt_email"><span class="highlight"></span><span class="bar"></span>
		  				<label class="label_modal">E-mail</label>
					  </div>
					  <div class="group">
		  				<input type="password" class="input_modal" name="txt_senha"><span class="highlight"></span><span class="bar"></span>
		  				<label class="label_modal">Senha</label>
					  </div>
						<div id="btn_entrar">
							<input name="btnLogar" value="E N T R A R" type="submit" style="font-size: 20px;"/>
						</div>
						<div id="btn_cadastrar">
					    <a href="cadastro.php"><p>c a d a s t r e - s e</p></a>
					  </div>
					</form>

				</div>
			</div>
		</div>
	</body>
</html>
