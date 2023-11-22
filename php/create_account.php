<?php
$servername = "2a02:4780:13:1174:0:f12:1917:2"; // Replace with your server name
$username = "u252844311_brucefleck"; // Replace with your database username
$password = "1JVp3K$N78DEPq4Z$wnn"; // Replace with your database password
$dbname = "u252844311_TIAU_DB"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['first_name'];
    $email = $_POST['email'];
    $password = $_POST['password1'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
