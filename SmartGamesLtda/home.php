<?php

//CONEXÃO
require_once('modulo.php');

// session_start();
// $id_categoria = $_SESSION['id_categoria'];

$id_categoria = "";
$id_jogo="";

// MODO DE VER MAIS INFORMAÇÕES
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
		<!-- INCLUINDO O ARQUIVO HEAD -->
    <?php
      include('head.php');
    ?>
  </head>
  <body>

    <head>
      <nav>

				<!-- INCLUINDO O NAV -->
        <?php
          include('nav.php');
        ?>
      </nav>
    </head>
    <section>
      <div id="principal">
        <div id="espaco">

        </div>
        <div id="template_home">
					<!-- SLIDE NO TEMPLATE -->
          <div id="slideshow">
      			<div>
      				<img src="imagens/xbox_games.jpg" alt="" />
      			</div>
      		   <div>
      		     <img src="imagens/titanfall2_2.jpg" alt="" />
      		   </div>
      			 <div>
      		     <img src="imagens/sonic_hd.jpg" alt="" />
      		   </div>
      			 <div>
      				<img src="imagens/naruto_striker_hd.jpg" alt="" />
      			</div>
      		</div>
          <a href="cadastro.php">
    				<div id="btn_cadastrar_template">
    					<input type="submit" name="" value="C  A  D  A  S  T  R  E  -  S  E">
    				</div>
    			</a>
        </div>

        <?php

          $sql_categorias = "select * from tbl_categorias";

          $select = mysql_query($sql_categorias);

          while($resultado_cat=mysql_fetch_array($select)){

        ?>

				<!-- PEGANDO AS INFORMAÇÕES DA CATEGORIA ESPORTES -->

        <div class="espaco_categoria">
          <?php

            $sql_jogos = "select j.id_categoria,
                                 j.id_jogos,
                                 c.id_categoria,
                                 j.nome_jogo,
                                 j.desc_jogo,
                                 j.img_jogo,
																 j.id_endereco,
																 e.id_endereco
                                 from tbl_jogos as j
                                 inner join
                                 tbl_categorias as c
                                 on j.id_categoria = c.id_categoria
																 inner join
																 tbl_endereco as e
																 on j.id_endereco = e.id_endereco
                                 where c.id_categoria = 1 limit 1";

            $select=mysql_query($sql_jogos);

            while ($resultado=mysql_fetch_array($select)) {

          ?>
          <div class="titulo_categoria">
            <p>Esportes</p>
          </div>
          <div class="jogos_categoria">
            <div class="produto">
              <img src="<?php echo($resultado['img_jogo']); ?>" alt="">
            </div>
            <div class="descricao_jogo_categoria">
              <h1><?php echo($resultado['nome_jogo']); ?></h1>
              <h2><?php echo($resultado['desc_jogo']); ?></h2>
            </div>

          </div>
					<!-- PEGANDO O ID DO JOGO E O ID DO ENDEREÇO PRINCIPAL DO JOGO -->
          <a href="detalhesJogo.php?modo=vermais&id_jogos=<?php echo($resultado['id_jogos']);?>&id_endereco=<?php echo($resultado['id_endereco']); ?>">
            <div class="btn_verMAis_categoria">
              <input type="submit" name="" value="v  e  r  +">
            </div>
          </a>
        <?php } ?>
        </div>
      <?php } ?>

			<!-- PEGANDO AS INFORMAÇÕES DA CATEGORIA FPS -->

        <div class="espaco_categoria">
          <?php

					$sql_jogos = "select j.id_categoria,
															 j.id_jogos,
															 c.id_categoria,
															 j.nome_jogo,
															 j.desc_jogo,
															 j.img_jogo,
															 j.id_endereco,
															 e.id_endereco
															 from tbl_jogos as j
															 inner join
															 tbl_categorias as c
															 on j.id_categoria = c.id_categoria
															 inner join
															 tbl_endereco as e
															 on j.id_endereco = e.id_endereco
															 where c.id_categoria = 2 limit 1";

            $select=mysql_query($sql_jogos);

            echo($sql_jogos);

            while ($resultado=mysql_fetch_array($select)) {

          ?>

          <div class="titulo_categoria">
            <p>FPS</p>
          </div>
          <div class="jogos_categoria">
            <div class="produto">
              <img src="<?php echo($resultado['img_jogo']); ?>" alt="">
            </div>
            <div class="descricao_jogo_categoria">
              <h1><?php echo($resultado['nome_jogo']); ?></h1>
              <h2><?php echo($resultado['desc_jogo']); ?></h2>
            </div>

          </div>
					<!-- PEGANDO O ID DO JOGO E O ID DO ENDEREÇO PRINCIPAL DO JOGO -->
        <a href="detalhesJogo.php?modo=vermais&id_jogos=<?php echo($resultado['id_jogos']);?>&id_endereco=<?php echo($resultado['id_endereco']); ?>">
          <div class="btn_verMAis_categoria">
            <input type="submit" name="" value="v  e  r  +">
          </div>
        </a>
        <?php } ?>
        </div>

				<!-- PEGANDO AS INFORMAÇÕES DA CATEGORIA LUTA -->

        <div class="espaco_categoria">

          <?php

					$sql_jogos = "select j.id_categoria,
															 j.id_jogos,
															 c.id_categoria,
															 j.nome_jogo,
															 j.desc_jogo,
															 j.img_jogo,
															 j.id_endereco,
															 e.id_endereco
															 from tbl_jogos as j
															 inner join
															 tbl_categorias as c
															 on j.id_categoria = c.id_categoria
															 inner join
															 tbl_endereco as e
															 on j.id_endereco = e.id_endereco
															 where c.id_categoria = 3 limit 1";

            $select=mysql_query($sql_jogos);

            while ($resultado=mysql_fetch_array($select)) {

          ?>

          <div class="titulo_categoria">
            <p>Luta</p>
          </div>
          <div class="jogos_categoria">
            <div class="produto">
              <img src="<?php echo($resultado['img_jogo']); ?>" alt="">
            </div>
            <div class="descricao_jogo_categoria">
              <h1><?php echo($resultado['nome_jogo']); ?></h1>
              <h2><?php echo($resultado['desc_jogo']); ?></h2>
            </div>

          </div>
					<!-- PEGANDO O ID DO JOGO E O ID DO ENDEREÇO PRINCIPAL DO JOGO -->
          <a href="detalhesJogo.php?modo=vermais&id_jogos=<?php echo($resultado['id_jogos']);?>&id_endereco=<?php echo($resultado['id_endereco']); ?>">
            <div class="btn_verMAis_categoria">
              <input type="submit" name="" value="v  e  r  +">
            </div>
          </a>
        <?php } ?>

        </div>

				<!-- PEGANDO AS INFORMAÇÕES DA CATEGORIA RPG -->

        <div class="espaco_categoria">

          <?php

					$sql_jogos = "select j.id_categoria,
															 j.id_jogos,
															 c.id_categoria,
															 j.nome_jogo,
															 j.desc_jogo,
															 j.img_jogo,
															 j.id_endereco,
															 e.id_endereco
															 from tbl_jogos as j
															 inner join
															 tbl_categorias as c
															 on j.id_categoria = c.id_categoria
															 inner join
															 tbl_endereco as e
															 on j.id_endereco = e.id_endereco
															 where c.id_categoria = 4 limit 1";

            $select=mysql_query($sql_jogos);

            while ($resultado=mysql_fetch_array($select)) {

          ?>

          <div class="titulo_categoria">
            <p>RPG</p>
          </div>
          <div class="jogos_categoria">
            <div class="produto">
              <img src="<?php echo($resultado['img_jogo']); ?>" alt="">
            </div>
            <div class="descricao_jogo_categoria">
              <h1><?php echo($resultado['nome_jogo']); ?></h1>
              <h2><?php echo($resultado['desc_jogo']); ?></h2>
            </div>

          </div>
					<!-- PEGANDO O ID DO JOGO E O ID DO ENDEREÇO PRINCIPAL DO JOGO -->
          <a href="detalhesJogo.php?modo=vermais&id_jogos=<?php echo($resultado['id_jogos']);?>&id_endereco=<?php echo($resultado['id_endereco']); ?>">
            <div class="btn_verMAis_categoria">
              <input type="submit" name="" value="v  e  r  +">
            </div>
          </a>
        <?php } ?>

      </div>
    </section>
    <footer>
      <?php
        include('rodape.php');
      ?>
    </footer>
  </body>
</html>
