<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$doctor = $_POST['doctor'];
$date = $_POST['date'];
$time = $_POST['time'];

// Connect to database
$host = 'localhost';
$user = 'username';
$password = 'password';
$database = 'database_name';
$mysqli = new mysqli($host, $user, $password, $database);

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}

// Insert data into database
$insert_query = "INSERT INTO patients (name, email, phone, doctor, date, time)
                  VALUES ('$name', '$email', '$phone', '$doctor', '$date', '$time')";
if ($mysqli->query($insert_query) === TRUE) {
  echo "Patient registration successful";
} else {
  echo "Error: " . $mysqli->error;
}

// Close database connection
$mysqli->close();
?>
