<?php

//CONEXÃO
require_once('modulo.php');

$id_categoria = "";
$id_jogo="";

// MODO DETALHES
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

        <div id="area_info_pesquisa">
          <div id="espaco">

          </div>
          <div id="titulo_jogos_pesquisa">
            <h1>Jogos relacionados a sua pesquisa...</h1>
          </div>
          <?php

						// FAZENDO A O SELECT DA PESQUISA

            if(isset($_POST['pesquisar'])){
                $pesquisar = $_POST['txt_pesquisar'];

                $sql_jogos = "select j.id_jogos,
                                     j.nome_jogo,
                                     j.img_jogo,
                                     j.preco_jogo,
                                     p.nome_plataforma
                                     from tbl_jogos as j
                                     inner join tbl_plataforma as p
                                     on p.id_plataforma = j.id_plataforma
                                     where nome_jogo like '%$pesquisar%'
                                     or preco_jogo like '%$pesquisar%'
                                     or p.nome_plataforma like '%$pesquisar%'";
            }

            $select = mysql_query($sql_jogos);

            while($resultado = mysql_fetch_array($select)){

          ?>

					<!-- PEGANDO ID -->
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
