<?php

//FAZENDO A VERIFICAÇÃO DOS TEXTOS DESCRITOS NOS INPUTS PARA A CONCLUSÃO DO LOGIN

if(isset($_POST['txt_email']) && isset($_POST['txt_senha'])){
	$email = $_POST['txt_email'];
	$senha = $_POST['txt_senha'];

	$sql = "select * from tbl_usuarios where email_usuario = '$email' and senha_usuario = '$senha'";

	$select = mysql_query($sql);

	if($rsconsulta = mysql_fetch_array($select)){

		$_SESSION['email_usuario'] = $rsconsulta['email_usuario'];
		$_SESSION['senha_usuario'] = $rsconsulta['senha_usuario'];

		header('location:entrada_portal.php');

	}else {

?>
		<script>
			alert("USUÁRIO OU SENHA INVÁLIDOS!");
		</script>

<?php
		}

	}


?>
