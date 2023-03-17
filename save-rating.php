// Get the rating data from the POST request
$data = json_decode(file_get_contents('php://input'));

// Connect to the database
$host = 'localhost';
$user = 'root';
$password = 'toor';
$database = 'quizdbase';
$conn = mysqli_connect($host, $user, $password, $database);

// Check if the connection to the database was successful
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

// Insert the rating data into the database
$query = sprintf(
  "INSERT INTO instructor_rating (user_id, item_id, rating) VALUES (%d, %d, %d)",
  mysqli_real_escape_string($conn, $data->user_id),
  mysqli_real_escape_string($conn, $data->item_id),
  mysqli_real_escape_string($conn, $data->rating)
);
$result = mysqli_query($conn, $query);

// Check if the query was executed successfully
if (!$result) {
  http_response_code(500);
  echo 'Failed to save rating: ' . mysqli_error($conn);
  exit;
}

// Close the database connection
mysqli_close($conn);

// Return a response to the client
http_response_code(200);
echo 'Rating saved successfully';
