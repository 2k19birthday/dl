<?php
// Check if the form was submitted
if(isset($_POST['submit'])) {
    // Get the form data
    $username_or_email = $_POST['username_or_email'];
    $password = $_POST['password'];
    
    // Validate the form data
    $errors = array();

    if(empty($username_or_email)) {
        $errors[] = "Username or email is required";
    }

    if(empty($password)) {
        $errors[] = "Password is required";
    }

    if(count($errors) > 0) {
        // Display errors and exit
        foreach($errors as $error) {
            echo $error . "<br>";
        }
        exit();
    }
    
    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', 'toor', 'quizdbase');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query the database to check if the user exists
    $sql = "SELECT * FROM user WHERE (email = '$username_or_email') AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // User exists, log them in
        session_start();
        $_SESSION['username'] = $username_or_email;
        header("Location: quiz.php");
    } else {
        // User doesn't exist or password is incorrect
        echo "Incorrect username/email or password";
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>
