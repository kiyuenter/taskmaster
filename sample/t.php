<?php
$target_date = strtotime("2024-05-10 10:00:00"); // Set your target date/time
$current_time = time();
$difference = $target_date - $current_time;

$days = floor($difference / (60*60*24));
$hours = floor(($difference % (60*60*24)) / (60*60));
$minutes = floor(($difference % (60*60)) / 60);
$seconds = $difference % 60;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Countdown Timer</title>
</head>
<body>
  <h1>Countdown to Event</h1>
  <p id="countdown"></p>
  <script>
    var days = <?= $days; ?>;
    var hours = <?= $hours; ?>;
    var minutes = <?= $minutes; ?>;
    var seconds = <?= $seconds; ?>;

    function updateCountdown() {
      seconds--;
      if (seconds < 0) {
        seconds = 59;
        minutes--;
      }
      if (minutes < 0) {
        minutes = 59;
        hours--;
      }
      if (hours < 0) {
        hours = 23;
        days--;
      }

      document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

      if (days === 0 && hours === 0 && minutes === 0 && seconds === 0) {
        clearInterval(countdownInterval);
        document.getElementById("countdown").innerHTML = "Event Started!";
      }
    }

    var countdownInterval = setInterval(updateCountdown, 1000); // Update every second
  </script>
</body>
</html>
