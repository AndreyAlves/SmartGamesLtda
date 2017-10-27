<?php

//CONEXÃO
require_once('modulo.php');

$id_categoria = "";
$id_jogo="";

$id_plataforma = $_GET['id_plataforma'];

if(isset($_GET['modo'])){
	if($_GET['modo']=='vermais'){
		$id_jogo=$_GET['id_jogos'];
		header('location:detalhesJogo.php');
	}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <?php
      include('head.php');
    ?>
  </head>
  <body>
    <head>
      <nav>
        <?php
          include('nav.php');
        ?>
      </nav>
    </head>
    <section>
      <div id="principal">
				<div id="espaco">

				</div>
				<div id="area_info_pesquisa">
          <div id="espaco">

          </div>

					<!-- TRAZENDO OS JOGOS DE ACORDO COM A PLATAFORMA SELECIONADA -->
					<?php

						$sql_nomePlataforma = "select * from tbl_plataforma where id_plataforma=".$id_plataforma;

						$select = mysql_query($sql_nomePlataforma);

						while ($rsnomePlataforma=mysql_fetch_array($select)) {


					?>
          <div id="titulo_jogos_pesquisa">
            <h1>Jogos de <?php echo($rsnomePlataforma['nome_plataforma']); ?></h1>
          </div>

				<?php } ?>

					<!-- TRAZENDO INFORMAÇÕES DO JOGO EM DETALHES E O ID -->

          <?php

						$sql_jogos = "select j.id_jogos,
																 j.id_plataforma,
																 p.id_plataforma,
																 j.nome_jogo,
																 j.img_jogo,
																 j.preco_jogo,
																 p.nome_plataforma
																 from tbl_jogos as j
																 inner join
																 tbl_plataforma as p
																 on p.id_plataforma = j.id_plataforma
																 where j.id_plataforma=".$id_plataforma;

            $select = mysql_query($sql_jogos);

            while($resultado = mysql_fetch_array($select)){

          ?>

          <div class="jogo_pesquisa">
            <a href="detalhesJogo.php?modo=vermais&id_jogos=<?php echo($resultado['id_jogos']);?>">
              <div id="ver_infoJogo_pesquisa">
                <p>v e r +</p>
              </div>
            </a>

            <img src="<?php echo($resultado['img_jogo']); ?>" alt="">
            <div class="info_jogo_pesquisa">
              <h1><?php echo($resultado['nome_jogo']); ?></h1>
              <h2>R$<?php echo($resultado['preco_jogo']); ?></h2>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </section>
    <footer>
      <?php
        include('rodape.php');
      ?>
    </footer>
  </body>
</html>
