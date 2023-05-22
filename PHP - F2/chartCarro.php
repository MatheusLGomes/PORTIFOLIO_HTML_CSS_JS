<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ano', 'Salário', 'Valor do carro'],
          ['1997',120 , 3.248],
          ['2002', 200, 7.514],
          ['2007', 380, 9.767],
          ['2012', 622, 13.397],
          ['2017', 937, 28.406],
        ]);

        var options = {
          title: 'Evolução do valor dos carros em função do salário minimo ao decorrer do tempo.',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
