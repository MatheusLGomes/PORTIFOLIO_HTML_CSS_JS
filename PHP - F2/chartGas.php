<?php

require_once "./conn.php";
$table = "dadosmatheus";
$query =  "SELECT * FROM $table";
$stmt = $conn->prepare($query);

$stmt->execute();

$list= $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ano', 'Gasolina', 'Salario'],
          <?php foreach($list as $user):?>
          ['<?=$user['anomatheus'];?>', <?=$user['gasolinamatheus'];?>,<?=$user['salariomatheus'];?>],
          <?php endforeach; ?>
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
