<?php
// define database connection variables
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "quizdbase";

// connect to MySQL database
$conn = mysqli_connect($host, $user, $pass, $dbname);

// check for database connection errors
if (mysqli_connect_errno()) {
    echo "<p>Failed to connect to MySQL: " . mysqli_connect_error() . "</p>";
    exit();
}

// retrieve questions from MySQL database
$sql = "SELECT q.id, q.question, a.aid, a.answer FROM questions q INNER JOIN answers a ON q.id = a.id";
$result = mysqli_query($conn, $sql);

if (!$result) {
    // handle query error
    echo "<p>Error executing query: " . mysqli_error($conn) . "</p>";
    exit();
}
$current_question_id=null;
$num_rows=mysqli_num_rows($result);
echo "<script>var total=$num_rows;</script>";
?>
<form method='post' action='submit_quiz.php' onsubmit='return validateForm()'>
<?php
if (mysqli_num_rows($result) > 0) {
    // loop through each question and display it on the webpage
    while ($row = mysqli_fetch_assoc($result)) {
        // check if current question has already been displayed
        if ($current_question_id != $row["id"]) {
            // if not, display the question and update the current question ID
            echo "<p>" . $row["question"] . "</p>";
            $current_question_id = $row["id"];
        }

        // display the answer as a radio button
        echo "<input type='radio' name='question-" . $row["id"] . "' value='" . $row["aid"] . "'> " . $row["answer"] . "<br>";
    }

    // add submit button to the webpage
    echo "<br><button type='submit' name='submit'>Submit Quiz</button>";
} else {
    echo "<p>No questions found.</p>";
}

// close database connection
mysqli_close($conn);
?>
</form>
<script>
function validateForm() {
    var radios = document.querySelectorAll('input[type="radio"]');
    var checked = 0;
    console.log(checked);
    console.log(total);
    var total=<?php echo $num_rows; ?>;
    
    console.log(total);
    for(var i=0;i<radios.length;i++)
    {
        if(radios[i].checked)
        {
            
    console.log(checked);
   
            checked++;
   
            console.log(checked);
        }
    }
    if(checked!==total)
    {
        alert("Please answer all questions.");
        return false;
    }
}
</script>
