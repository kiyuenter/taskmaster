<?php
  session_start();
  include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/evaluation.css" />
    <title>TMAH | Evaluation Page</title>
  </head>
  <body>
    <div class="container">
      <div class="evaluation">
        <h1 style="text-align: center; color: rgb(19, 116, 206)">
          Evaluation Question
        </h1>
        <h2 style="text-align: center; color: rgb(206, 19, 19)">
          Please give answers carefully!!!
        </h2>
        <?php
          $username = $_SESSION['email'];
          $department = $_SESSION['department'];
          $academic = $_SESSION['academic'];
        ?>
        <form action="result.php" method="POST">
          <ul>
            <li>
              <input type="text" name="email" value="<?php echo $username?>"/>
            </li>
            <?php
                $order_number = 1;
                $sql = "SELECT * FROM evaluationque";

                $result = $conn -> query($sql);

                if ($result->num_rows > 0) {

                  while($row = $result->fetch_assoc()) {

                    $question = $row["evaDetail"];
                    $a = $row["A"];
                    $b = $row["B"];
                    $c = $row["C"];
                    $d = $row["D"];
                    $departQ = $row["departQ"];
                    $answer = $row["answer"];

                    // Arrange questions for all department
                    if ($department == $departQ && in_array($academic, array("MA", "MSc", "MFA"))) {
                      echo "
                          <h3>Upload your tesis</h3>
                      ";
                      } elseif ($department == $departQ && in_array($academic, array("Ph.D", "Ed.D", "M.D"))) {
                          echo "
                              <h3>Upload your published paper</h3>
                          ";
                      } elseif ($department == $departQ) {
                          echo "
                              <li class='head'>
                              ".$order_number.". ". $question ."
                              </li>
                              <li>
                              <input name='ques1' class='little' type='radio' value='Excellent' required/>"."&nbsp&nbsp&nbsp".$a."
                              </li>
                              <li>
                              <input name='ques1' class='little' type='radio' value='Excellent' required/>"."&nbsp&nbsp&nbsp".$b."
                              </li>
                              <li>
                              <input name='ques1' class='little' type='radio' value='Excellent' required/>"."&nbsp&nbsp&nbsp".$c."
                              </li>
                              <li>
                              <input name='ques1' class='little' type='radio' value='Excellent' required/>"."&nbsp&nbsp&nbsp".$d."
                              </li>
                          ";
                          $order_number++;
                  }
                  
                  
                  }
                  } else {
                      echo "0 results";
                  }    
            ?>
          </ul>
          <div class="buttondiv">
            <button type="submit">SUBMIT</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
