<!DOCTYPE html>
<html>
  <head>
    <?php
      include('head.php');
    ?>
  </head>
  <body>
    <!-- VOLTAR -->
    <head>
      <a href="index.php">
        <input id="btn_back_home" type="submit" name="" value="<" style="font-size: 25px;  font-weight: bold;">
      </a>
    </head>
    <!-- CAMPOS DE CADASTRO *STATICO* -->
    <section>
      <div id="principal">
        <div id="area_cadastro">
          <div id="txt_cadastro">
            <p>Preencha todos os campos!</p>
          </div>
          <div id="area_campos">
            <input placeholder="Nome" type="text" name="" value="">
            <input placeholder="E-mail" type="text" name="" value="">
            <input placeholder="Senha" type="text" name="" value="">
            <input placeholder="CPF" type="text" name="" value="">
            <input placeholder="Telefone" type="text" name="" value="">
          </div>
          <div id="area_foto_botao">
            <input id="btn_salvar" type="submit" name="cadastrar" value="Cadastrar" style="font-size: 20px">
          </div>
        </div>
      </div>
    </section>
    <footer>

    </footer>
  </body>
</html>
