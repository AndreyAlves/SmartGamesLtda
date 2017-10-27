<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>SMART GAMES Ltda.</title>

<!-- ================= LINKS ================= -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link href="fontes/fonte.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" href="imagens/icone.png">
<!-- ================= SCRIPTS GERAL ================= -->
<script src="js/jquery-1.8.2.js"></script>

<!-- ========================================= Script para Modal ========================================= -->
<script>
  $(document).ready(function(){
    $("a[rel=modal]").click( function(ev){
      ev.preventDefault();

      var mod = this;

          var id = $(mod).attr("href");

          var alturaTela = $(document).height();
          var larguraTela = $(window).width();

          //colocando o fundo preto
          $('#mascara').css({'width':larguraTela,'height':alturaTela});
          $('#mascara').fadeIn(1000);
          $('#mascara').fadeTo("slow",0.8);

          var left = ($(window).width() /2) - ( $(id).width() / 2 );
          var top = ($(window).height() / 2) - ( $(id).height() / 2 );

          $(id).css({'top':top,'left':left});
          $(id).show();


 });

 $("#mascara").click( function(){
  $(this).hide();
  $(".window").hide();
 });

 $('.fechar').click(function(ev){
  ev.preventDefault();
  $("#mascara").hide();
  $(".window").hide();
 });

});

</script>


<!-- ========================================= Script para o slider ========================================= -->
<script>

$(document).ready(function() {
  $("#slideshow > div:gt(0)").hide();

  setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
    }
    , 5000);
  });

</script>

<!-- ========================================= Script para tradutor ========================================= -->
<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
