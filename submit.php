<?php
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    
    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', 'toor', 'quizdbase');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert form data into table
    $sql = "INSERT INTO user (first_name, last_name, email, password, phone) VALUES ('$first_name', '$last_name', '$email', '$password', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "Form data saved successfully";
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>
