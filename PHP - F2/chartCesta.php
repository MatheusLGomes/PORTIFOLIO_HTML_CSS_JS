<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ano', 'Salário', 'Cesta'],
          ['1997', 120, 96.39],
          ['2002', 200, 130],
          ['2007', 380, 214.63],
          ['2012', 568, 366.58],
          ['2017', 937, 762.23],
        ]);

        var options = {
          title: 'Evolução do valor da cesta básica em função do salário minimo ao decorrer do tempo.',
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
