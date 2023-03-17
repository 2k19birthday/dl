<?php
// define database connection variables
$host = "localhost";
$user = "root";
$pass = "toor";
$dbname = "quizdbase";

// connect to MySQL database
$conn = mysqli_connect($host, $user, $pass, $dbname);

// check for database connection errors
if (mysqli_connect_errno()) {
    echo "<p>Failed to connect to MySQL: " . mysqli_connect_error() . "</p>";
    exit();
}

// retrieve correct answers from MySQL database
$sql = "SELECT q.id, a.aid FROM questions q INNER JOIN answers a ON q.id = a.id WHERE a.is_correct = 1";
$result = mysqli_query($conn, $sql);

if (!$result) {
    // handle query error
    echo "<p>Error executing query: " . mysqli_error($conn) . "</p>";
    exit();
}

// initialize quiz score and array to store selected answers
$score = 0;
$selected_answers = array();

// loop through each submitted answer and check if it is correct
foreach ($_POST as $question => $selected_answer) {
    // check if answer is not empty and is a selected radio button
    if (!empty($selected_answer) && strpos($question, 'question-') === 0) {
        $question_id = substr($question, 9); // get question ID from question name
        $selected_answers[$question_id] = $selected_answer; // add selected answer to array

        // check if selected answer is correct
        $is_correct = false;
        mysqli_data_seek($result, 0); // move MySQL result pointer to beginning
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["id"] == $question_id && $row["aid"] == $selected_answer) {
                $is_correct = true;
                break;
            }
        }
        if ($is_correct) {
            $score++; // increment quiz score
        }
    }
}

// calculate percentage score
$total_questions = mysqli_num_rows($result);
$percentage_score = round(($score / $total_questions) * 100, 2);

// display quiz result
echo "<p>You scored " . $score . " out of " . $total_questions . " (" . $percentage_score . "%)</p>";

// display selected answers
echo "<p>Selected answers:</p>";
foreach ($selected_answers as $question_id => $selected_answer) {
    if($selected_answer%4==0)
    {
        echo "<p>Question ". $question_id . ": 4</p>";
    }
    else{
        echo "<p>Question ". $question_id.":".($selected_answer%4)."</p>";
    }
}

// close database connection
mysqli_close($conn);
?>
