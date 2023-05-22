<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ano', 'Salário', 'Valor'],
          ['1997', 120, 509.800.000.000],
          ['2002', 200, 1.397.000.000.000],
          ['2007', 380, 2.465.000.000.000],
          ['2012', 568, 2.064.000.000.000],
          ['2017', 937, 9.900.000.000.000],
        ]);

        var options = {
          title: 'Evolução do valor do PIB  ao decorrer do tempo.',
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
