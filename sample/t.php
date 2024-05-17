<?php
// Include connection details and database operations from a separate file
include '../php/connection.php';

$sql_solved = "SELECT COUNT(*) AS solved_count FROM askedquestions WHERE statuss = 'solved'";
$result_solved = mysqli_query($conn, $sql_solved);
$row_solved = mysqli_fetch_assoc($result_solved);
$solved_count = $row_solved['solved_count'];

$sql_unsolved = "SELECT COUNT(*) AS unsolved_count FROM askedquestions WHERE statuss = 'unsolved'";
$result_unsolved = mysqli_query($conn, $sql_unsolved);
$row_unsolved = mysqli_fetch_assoc($result_unsolved);
$unsolved_count = $row_unsolved['unsolved_count'];

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Status</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
</head>
<body>
  <div style="width: 200px; height: 200px;">
    <canvas id="myPieChart" style="width: 200px; height: 200px;"></canvas></div>  <script>
        // Define chart data based on fetched counts
        const data = {
          labels: ['Solved', 'Unsolved'],
          datasets: [{
            label: 'Questions Status',
            data: [<?php echo $solved_count; ?>, <?php echo $unsolved_count; ?>], // Use fetched counts
            backgroundColor: [
              'rgba(54, 162, 235, 0.2)', // Light blue (solved)
              'rgba(255, 99, 132, 0.2)', // Light red (unsolved)
            ],
            hoverOffset: 4 // Distance between hovered point and chart
          }]
        };

        // Create the pie chart
        var ctx = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
          type: 'pie',
          data: data,
          options: {
            plugins: {
              legend: {
                position: 'bottom' // Change the position of the legend
              },
              title: {
                display: true,
                text: 'Questions Status'
              }
            }
          }
        });
      </script>
</body>
</html>
