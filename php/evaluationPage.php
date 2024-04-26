<?php
  session_start();
  include 'connection.php';

  $username = $_SESSION['email'];
  $department = $_SESSION['department'];
  $academic = $_SESSION['academic'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/evaluation.css" />
    <title>TMAH | Evaluation Page</title>
    <style>
      .custom-file-input{
        font-size: 16px;
        border-radius: 0px 15px 15px 0px;
        height: 50px;
        width: 50%;
        top: 50%;
        left: 50%;
        background: #d5d8e0;
      }

      .custom-file{
        margin: 50px 50px 20px 50px;
        align-items:center;
        justify-content: center;
        display: flex;
      }
      .custom-file-input::-webkit-file-upload-button {
        visibility: hidden;
        }

        .custom-file-label {
          cursor: pointer;
          width: 20%;
          height: 50px;
          align-items:center;
          justify-content:center;
          display: flex;
          font-size: 24px;
          border-radius: 15px 0px 0px 15px;
          background: #19ace6;
        }

        
        
    </style>
  </head>
  <body>
    <div class="container">
      <div class="evaluation">
        <?php
          if($academic == "MA" || $academic == "MSc" || $academic == "MFA"){
            echo "
            <h1 style='text-align: center; color: rgb(19, 116, 206)'>
              Upload your Thesis
            </h1>
            <h2 style='text-align: center; color: rgb(206, 19, 19)''>
              Make sure it's yours!
            </h2>
            ";
          } elseif($academic == "Ph.D" || $academic == "Ed.D" || $academic == "M.D") {
            echo "
            <h1 style='text-align: center; color: rgb(19, 116, 206)'>
              Upload your published paper
            </h1>
            <h2 style='text-align: center; color: rgb(206, 19, 19)'>
              Make sure it's yours!
            </h2>
            ";
          } else{
                  echo "
                  <h1 style='text-align: center; color: rgb(19, 116, 206)'>
                    Evaluation Question
                  </h1>
                  <h2 style='text-align: center; color: rgb(206, 19, 19)''>
                    Please give answers carefully!!!
                  </h2>
                  ";
          }
        ?>
        
        <form action="result.php" method="POST">
          <ul>
            <li>
              <input style="display: none;" type="text" name="email" value="<?php echo $username?>"/>
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
                          <div class='custom-file'>
                            <label class='custom-file-label' for='customFile'>Choose file</label>
                            <input type='file' class='custom-file-input' id='customFile'>
                          </div>
                      ";
                      break;
                      } elseif ($department == $departQ && in_array($academic, array("Ph.D", "Ed.D", "M.D"))) {
                          echo "
                          <div class='custom-file'>
                            <label class='custom-file-label' for='customFile'>Choose file</label>
                            <input type='file' class='custom-file-input' id='customFile'>
                          </div>
                          ";
                      break;
                      } elseif ($department == $departQ && $academic !== "Ph.D" && $academic !== "Ed.D" && $academic !== "M.D" && $academic !== "MA" && $academic !== "MSc" && $academic !== "MFA") {
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
                      echo "Your Department is not correct";
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