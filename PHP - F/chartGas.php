<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ano', 'Salário', 'Gasolina'],
          ['1997', 120, 0.66],
          ['2002', 200, 1.74],
          ['2007', 380, 4.56],
           ['2012', 568, 5.68],
          ['2017', 937, 4.93],
        ]);
      

        var options = {
          title: 'Evolução do valor do litro da gasolina em função do salário minimo ao decorrer do tempo.',
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
