    <style>
      #map {
        height: 500px;
      }
      #adresse{
        position: absolute;
        background-color: #e6e6e6;
        z-index: 1;
        padding: 1%;
        opacity: 0.8;
        margin-top: 2%;
        margin-left: 2%;
      }
    </style>
    <article id="adresse">
        <p>Aformac Vichy</br/></br/>38 avenue de la croix Saint-Martin<br/>03200 Vichy<br/></br/>Numéros: 04-70-08-70-90<br/></br/>Ouvert du lundi au vendredi:<br/>De 9h30 à 12h30 et 13h30 à 17h.</p>
      </article>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 46.1158089, lng: 3.4358138000000054},
          zoom: 17
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSBobvPyqEMcubZhaCZ_OWa8n8HM4DTYw&callback=initMap"
    async defer></script>