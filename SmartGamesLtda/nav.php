<div id="conteudo_nav">
  <a href="home.php">
    <div id="logo_portal">
      <p>S. G  A  M  E  S</p>
    </div>
  </a>
  <div id="area_menu">

    <!-- TRAZENDO O MENU ATRAVES DAS PLATAFORMAS CADASTRADAS NO BD -->
    <?php

      $sql_menu = "select * from tbl_plataforma";

      $select = mysql_query($sql_menu);

      while ($rsmenu=mysql_fetch_array($select)) {

    ?>

    <!-- PEGANDO O ID E O NOME DA PLATAFORMA -->
      <a href="jogos.php?id_plataforma=<?php echo($rsmenu['id_plataforma']); ?>">
        <p><?php echo($rsmenu['nome_plataforma']) ?></p>
      </a>


  <?php } ?>
  </div>

  <!-- FORMULARIO PARA O FUNCIONAMENTO DA OPERÇÃO BUSCA -->
  <form name="frm_busca" id="form_buscar" action="resultadoPesquisa.php" method="post">
    <input id="busca_menu" type="text" name="txt_pesquisar" value="" placeholder="Jogos, preços, plataformas...">
    <button id="btn_buscar" name="pesquisar" type="submit">
          <img src="imagens/pesquisa.png" alt="">
    </button>
  </form>

</div>
