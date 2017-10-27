<?php

//CONEXÃO
require_once('modulo.php');

//$id_endereco=$_GET['id_endereco'];

// PEGANDO ID DO JOGO ATRAVES DA URL USANDO GET
$id_jogos=$_GET['id_jogos'];

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
      <a href="home.php">
        <input id="btn_back_home" type="submit" name="" value="<" style="font-size: 25px; ; font-weight: bold;">
      </a>
    </head>
    <section>
      <div id="principal">
        <div id="espaco">

        </div>
        <div id="tudo_detalhesJogo">
          <div id="titulo_detalhesJogo">
            <h1>DETALHES DO JOGO</h1>
          </div>
          <div id="espaco_detalhesJogo">

            <!-- FAZENDO O SELECT DA TABELA JOGOS PARA TRAZER AS INFORMAÇÕES ADEQUADAS -->
            <?php

              $id_jogos = $_GET['id_jogos'];

              $sql_verMais="select * from tbl_jogos where id_jogos = ".$id_jogos;

              $select=mysql_query($sql_verMais);

              while ($resultado=mysql_fetch_array($select)) {

            ?>
            <div class="jogos_categoria">
              <div class="produto">
                <img src="<?php echo($resultado['img_jogo']); ?>" alt="">
              </div>
              <div class="descricao_jogo_categoria">
                <h1><?php echo($resultado['nome_jogo']); ?></h1>
                <h2><?php echo($resultado['desc_jogo']); ?></h2>

              </div>
              <div id="preco_jogo_detalhes">
                <h1>R$<?php echo($resultado['preco_jogo']); ?></h1>
              </div>

              </div>
              <!-- PEGANDO O ID DO JOGO E DO ENDERECO DO JOGO PARA TRAZER O MAPA NA TELA SEGUINTE -->
              <div id="ponto_venda">
                <a href="pontosVenda.php?id_jogos=<?php echo($resultado['id_jogos']);?>&id_endereco=<?php echo($resultado['id_endereco']); ?>">
                  <img src="imagens/location.png" alt="">
                </a>
              </div>

              <div id="btn_comprar">
                <p>C O M P R A R</p>
              </div>
          <?php } ?>
          </div>
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
