<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $expStart = $_POST['expStart'];
    $expEnd = $_POST['expEnd'];
    $compname = $_POST['compname'];
    $comploc = $_POST['comploc'];
    $comjob = $_POST['comjob'];

    for ($i = 0; $i < count($expStart); $i++) {
        $start = $expStart[$i];
        $end = $expEnd[$i];
        $company = $compname[$i];
        $location = $comploc[$i];
        $position = $comjob[$i];

        // Process each experience entry
        // For example, save to database, display on screen, etc.
        echo "Experience #".($i+1).":<br>";
        echo "Start Date: $start<br>";
        echo "End Date: $end<br>";
        echo "Company Name: $company<br>";
        echo "Company Location: $location<br>";
        echo "Job Position: $position<br><br>";
    }
}
?>
