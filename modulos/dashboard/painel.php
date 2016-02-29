   <script type="text/javascript">
      google.charts.load('current', {'packages':['geochart']});
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {

        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularidade'],
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 1200],
          ['Canada', 500],
          ['France', 600],
          ['RU', 200]
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>

<div class="conteudo container arredondado  ">


    <h1>Dashboard</h1>

    <div class="width-1-2 arredondado padding fundo-branco margem-topo sombra">

        <div id="regions_div" class="arredondado" style="max-width:100%; height: auto;"></div>
        <h3 class="padding-topo padding-bottom">Mapa</h3>
        <p>Mapeamento da Semana</p>
    </div>


</div>
