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
        <form action="result.php" method="POST">
          <ul>
            <li class="head">
              1. How would you rate the teacher's depth of knowledge in the
              subject matter?
            </li>
            <li>
              <input
                name="ques1"
                class="little"
                type="radio"
                value="Excellent"
                required
              />Excellent
            </li>
            <li>
              <input
                name="ques1"
                class="little"
                type="radio"
                value="Good"
                required
              />Good
            </li>
            <li>
              <input
                name="ques1"
                class="little"
                type="radio"
                value="Average"
                required
              />Average
            </li>
            <li>
              <input
                name="ques1"
                class="little"
                type="radio"
                value="Poor"
                required
              />Poor
            </li>

            <li class="head">
              2. How would you describe the variety of teaching methods used by
              the teacher?
            </li>
            <li>
              <input
                name="ques2"
                class="little"
                type="radio"
                value="Very diverse"
                required
              />Very diverse
            </li>
            <li>
              <input
                name="ques2"
                class="little"
                type="radio"
                value="Moderately diverse"
                required
              />Moderately diverse
            </li>
            <li>
              <input
                name="ques2"
                class="little"
                type="radio"
                value="Somewhat limited"
                required
              />Somewhat limited
            </li>
            <li>
              <input
                name="ques2"
                class="little"
                type="radio"
                value="Very limited"
                required
              />Very limited
            </li>

            <li class="head">
              3. How well does the teacher manage the classroom environment?
            </li>
            <li>
              <input
                name="ques3"
                class="little"
                type="radio"
                value="Very effectively"
                required
              />Very effectively
            </li>
            <li>
              <input
                name="ques3"
                class="little"
                type="radio"
                value="Moderately effectively"
                required
              />Moderately effectively
            </li>
            <li>
              <input
                name="ques3"
                class="little"
                type="radio"
                value="Satisfactorily"
                required
              />Satisfactorily
            </li>
            <li>
              <input
                name="ques3"
                class="little"
                type="radio"
                value="Ineffectively"
                required
              />Ineffectively
            </li>

            <li class="head">
              4. To what extent does the teacher engage students in the learning
              process?
            </li>
            <li>
              <input
                name="ques4"
                class="little"
                type="radio"
                value="Highly engaged"
                required
              />Highly engaged
            </li>
            <li>
              <input
                name="ques4"
                class="little"
                type="radio"
                value="Moderately engaged"
                required
              />Moderately engaged
            </li>
            <li>
              <input
                name="ques4"
                class="little"
                type="radio"
                value="Minimally engaged"
                required
              />Minimally engaged
            </li>
            <li>
              <input name="ques4" class="little" type="radio" value="Notengaged" required/>Not engaged
            </li>

            <li class="head">
              5. How effectively does the teacher communicate with students?
            </li>
            <li>
              <input
                name="ques5"
                class="little"
                type="radio"
                value="Very effectively"
                required
              />Very effectively
            </li>
            <li>
              <input
                name="ques5"
                class="little"
                type="radio"
                value="Moderately effectively"
                required
              />Moderately effectively
            </li>
            <li>
              <input
                name="ques5"
                class="little"
                type="radio"
                value="Satisfactorily"
                required
              />Satisfactorily
            </li>
            <li>
              <input
                name="ques5"
                class="little"
                type="radio"
                value="Ineffectively"
                required
              />Ineffectively
            </li>

            <li class="head">
              6. How does the teacher assess student progress and provide
              feedback?
            </li>
            <li>
              <input
                name="ques6"
                class="little"
                type="radio"
                value="Regularly and effectively"
                required
              />Regularly and effectively
            </li>
            <li>
              <input
                name="ques6"
                class="little"
                type="radio"
                value="Regularly but ineffectively"
                required
              />Regularly but ineffectively
            </li>
            <li>
              <input
                name="ques6"
                class="little"
                type="radio"
                value="Irregularly and effectively"
                required
              />Irregularly and effectively
            </li>
            <li>
              <input
                name="ques6"
                class="little"
                type="radio"
                value="Irregularly and ineffectively"
                required
              />Irregularly and ineffectively
            </li>

            <li class="head">
              7. How does the teacher adapt teaching approaches to meet the
              diverse needs of students?
            </li>
            <li>
              <input
                name="ques7"
                class="little"
                type="radio"
                value="Very effectively"
                required
              />Very effectively
            </li>
            <li>
              <input
                name="ques7"
                class="little"
                type="radio"
                value="Moderately effectively"
                required
              />Moderately effectively
            </li>
            <li>
              <input
                name="ques7"
                class="little"
                type="radio"
                value="Satisfactorily"
                required
              />Satisfactorily
            </li>
            <li>
              <input
                name="ques7"
                class="little"
                type="radio"
                value="Ineffectively"
                required
              />Ineffectively
            </li>

            <li class="head">
              8. To what extent does the teacher integrate technology into
              instruction?
            </li>
            <li>
              <input
                name="ques8"
                class="little"
                type="radio"
                value="Extensively"
                required
              />Extensively
            </li>
            <li>
              <input
                name="ques8"
                class="little"
                type="radio"
                value="Moderately"
                required
              />Moderately
            </li>
            <li>
              <input
                name="ques8"
                class="little"
                type="radio"
                value="Minimally"
                required
              />Minimally
            </li>
            <li>
              <input name="ques8" class="little" type="radio" value="Not at all" required/>Not at all
            </li>

            <li class="head">
              9. How does the teacher collaborate with colleagues and engage in
              professional development?
            </li>
            <li>
              <input
                name="ques9"
                class="little"
                type="radio"
                value="Actively participates"
                required
              />Actively participates
            </li>
            <li>
              <input
                name="ques9"
                class="little"
                type="radio"
                value="Occasionally participates"
                required
              />Occasionally participates
            </li>
            <li>
              <input
                name="ques9"
                class="little"
                type="radio"
                value="Rarely participates"
                required
              />Rarely participates
            </li>
            <li>
              <input
                name="ques9"
                class="little"
                type="radio"
                value="Does not participate"
                required
              />Does not participate
            </li>

            <li class="head">
              10. How does the teacher provide support to students outside of
              the classroom?
            </li>
            <li>
              <input
                name="ques10"
                class="little"
                type="radio"
                value="Highly accessible and supportive"
                required
              />Highly accessible and supportive
            </li>
            <li>
              <input
                name="ques10"
                class="little"
                type="radio"
                value="Moderately accessible and supportive"
                required
              />Moderately accessible and supportive
            </li>
            <li>
              <input
                name="ques10"
                class="little"
                type="radio"
                value="Somewhat accessible and supportive"
                required
              />Somewhat accessible and supportive
            </li>
            <li>
              <input name="ques10" class="little" type="radio" value="Not accessible or supportive" required/>Not accessible or supportive
            </li>
          </ul>
          <div class="buttondiv">
            <button type="submit">SUBMIT</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
