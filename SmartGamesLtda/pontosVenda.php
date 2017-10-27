<?php

//CONEXÃO
require_once('modulo.php');

$id_categoria = "";

// PEGANDO IDS ATRAVES DA URL COM GET
$id_endereco=$_GET['id_endereco'];
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

      <!-- TRAZENDO INFORMAÇÕES DA TABELA JOGOS PARA PEGAR O ID E O ENDERECO -->
      <?php

      $sql_id_jogos= "select * from tbl_jogos where id_jogos=".$id_jogos;

      $select = mysql_query($sql_id_jogos);

      while ($rs=mysql_fetch_array($select)) {

      ?>
      <!-- PEGANDO OS IDS -->
      <a href="detalhesJogo.php?id_jogos=<?php echo($rs['id_jogos']); ?>">
        <input id="btn_back_home" type="submit" name="" value="<" style="font-size: 25px; ; font-weight: bold;">
      </a>
    <?php } ?>
    </head>
    <section>
      <div id="principal">
        <div id="espaco">

        </div>
        <div id="tudo_detalhesJogo">
          <div id="titulo_detalhesJogo">
            <h1>PONTOS DE VENDA</h1>
          </div>
            <div id="espaco_detalhesJogo">

              <!-- TRAZENDO MAPA ATRAVES DOS IDS UTILIZADOS ANTERIORMENTE -->

              <?php

              $sql_mapa= "select j.id_jogos,
                                 j.id_endereco,
                                 e.id_endereco,
                                 e.nome_endereco,
                                 e.bairro,
                                 e.numero,
                                 e.cep,
                                 e.visualizar_mapa
                                 from tbl_endereco as e
                                 inner join
                                 tbl_jogos as j
                                 on e.id_endereco = j.id_endereco
                                 where e.id_endereco =".$id_endereco." limit 1";

              $select = mysql_query($sql_mapa);

              while ($rsmapa=mysql_fetch_array($select)) {

              ?>

              <!-- MAPA COM INFRAME -->
              <div id="map">
                <?php echo($rsmapa['visualizar_mapa']); ?>
              </div>

              <?php
              }
              ?>

              <!-- ======================================= TENTATIVA DE MAPA COM XML ======================================= -->

              <!--<div id="map"></div>

                <script>
                  var customLabel = {
                    restaurant: {
                      label: 'R'
                    },
                    bar: {
                      label: 'B'
                    }
                  };

                    function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                      center: new google.maps.LatLng(-23.560320, -46.657545),
                      zoom: 5
                    });
                    var infoWindow = new google.maps.InfoWindow;

                      // Change this depending on the name of your PHP or XML file
                      downloadUrl('resultadoMapa.xml', function(data) {
                        var xml = data.responseXML;
                        var markers = xml.documentElement.getElementsByTagName('marker');
                        Array.prototype.forEach.call(markers, function(markerElem) {
                          var name = markerElem.getAttribute('name');
                          var address = markerElem.getAttribute('address');
                          var type = markerElem.getAttribute('type');
                          var point = new google.maps.LatLng(
                              parseFloat(markerElem.getAttribute('lat')),
                              parseFloat(markerElem.getAttribute('lng')));

                          var infowincontent = document.createElement('div');
                          var strong = document.createElement('strong');
                          strong.textContent = name
                          infowincontent.appendChild(strong);
                          infowincontent.appendChild(document.createElement('br'));

                          var text = document.createElement('text');
                          text.textContent = address
                          infowincontent.appendChild(text);
                          var icon = customLabel[type] || {};
                          var marker = new google.maps.Marker({
                            map: map,
                            position: point,
                            label: icon.label
                          });
                          marker.addListener('click', function() {
                            infoWindow.setContent(infowincontent);
                            infoWindow.open(map, marker);
                          });
                        });
                      });
                    }



                  function downloadUrl(url, callback) {
                    var request = window.ActiveXObject ?
                        new ActiveXObject('Microsoft.XMLHTTP') :
                        new XMLHttpRequest;

                    request.onreadystatechange = function() {
                      if (request.readyState == 4) {
                        request.onreadystatechange = doNothing;
                        callback(request, request.status);
                      }
                    };

                    request.open('GET', url, true);
                    request.send(null);
                  }

                  function doNothing() {}
                </script>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRrmok4t8FxSXTX26jQcGWK2ht1FK-2Cw&callback=initMap">
              </script>-->
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
