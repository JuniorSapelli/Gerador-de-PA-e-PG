<!DOCTYPE html>
<?php
    //variável do menu
    $menu = (isset($_POST['menu']) ? $_POST['menu'] : "");
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'line']});
        google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {

        var data = new google.visualization.DataTable();
        data.addColumn('number', 'X');
        data.addColumn('number', 'Progressao');

        data.addRows([
            [0, 5],   [1, 50],  [2, 500],  [3, 5000]
        ]);

        var options = {
            hAxis: {
            title: 'Quantidade'
            },
            vAxis: {
            title: 'Valor'
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

        chart.draw(data, options);
    }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px"></div>
  </body>
</html>
