<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../photo/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard.css" />
    <title>Taskmaster | Teacher Dashboard</title>

    <!-- Pie Chart for data visualization -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Solved', <?php echo $solved_count ?>],
          ['Unsolved', <?php echo $unsolved_count ?>],
        ]);

        var options = {
          title: 'Web question activities with chart',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

    <!-- Line chart to view registered teachers -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Access the encoded data from PHP using JavaScript
        var data = <?= $data_json ?>;

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            var options = {
            title: 'Daily Registered Teacher Partners',
            curveType: 'function',
            legend: { position: 'bottom' }
            };

            chart.draw(google.visualization.arrayToDataTable(data), options);
        }
    </script>