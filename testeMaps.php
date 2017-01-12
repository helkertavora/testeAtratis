<!DOCTYPE html>
<?php
require_once './core/topo.php';

?>  

<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
       <link rel="stylesheet" href="<?php print $path; ?>/css/estilo.css" />
        <title>Google Maps mapa personalizado</title>
    </head>
 
    <body>
     <div id="mapa" style="height: 600px; width: 1350px">
        </div>
 
        <!-- Maps API Javascript -->
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDyhpxvQciEcPWRguBhvvyIX6cZrOhWji0&amp;sensor=false">
        </script>
        <a href="home.php">Home</a>
<?php
    require_once './core/fim.php';
?>  
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
       <script src="https://cdn.rawgit.com/googlemaps/v3-utility-library/master/infobox/src/infobox.js"></script>
        <!-- Arquivo de inicialização do mapa -->
        <script src="js/mapa.js"></script>
        <script type="text/javascript">

        var idInfoBoxAberto;
            var infoBox = [];
             
            function abrirInfoBox(id, marker) {
                if (typeof(idInfoBoxAberto) == 'number' && typeof(infoBox[idInfoBoxAberto]) == 'object') {
                    infoBox[idInfoBoxAberto].close();
                }
             
                infoBox[id].open(map, marker);
                idInfoBoxAberto = id;
            }

    function carregarPontos() {

   $.getJSON('core/classes/pins.php', function(pontos) {
    
        $.each(pontos, function(index, ponto) {

            var icon = new google.maps.MarkerImage(
                    './img/'+ponto.imagem,
                    null, null, null, 
                    new google.maps.Size(40, 40));
            if (ponto.imagem == 'undefinded' || ponto.imagem == '' || ponto.imagem == null) {
                icon = './img/marcador.png';
            }

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(ponto.latitude, ponto.longitude),
                title: "Click aqui para mais informações do local..",
                map: map,
                icon: icon

            });

            var myOptions = {
                content: "Nome: <b>" + ponto.nome + "</b><br>"
                        + "Estado: <b>"+ ponto.estado +"</b><br>"
                        + "Cidade: <b>" + ponto.cidade + "</b><br>"
                        + "Latitude: <b>" + ponto.latitude + "</b><br>"
                        + "Longitude: <b>" + ponto.longitude + "</b><br>",
                pixelOffset: new google.maps.Size(-150, 0)
            };
         
            infoBox[ponto.id] = new InfoBox(myOptions);
            infoBox[ponto.id].marker = marker;
         
            infoBox[ponto.id].listener = google.maps.event.addListener(marker, 'click', function (e) {
                abrirInfoBox(ponto.id, marker);
            });

 
        });
 
    });
   
}
carregarPontos();
        </script>
    </body>
</html>