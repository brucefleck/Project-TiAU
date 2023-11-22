error_reporting(E_ALL);
ini_set('display_errors', 1);


<!DOCTYPE html>
<html>
<head>
    <title>Database Connection Check</title>
</head>
<body>
    <?php
    $servername = "https://tiau.in/";
    $username = "u252844311_brucefleck";
    $password = "1JVp3K\$N78DEPq4Z\$wnn"; // Escaping special characters
    $dbname = "u252844311_TIAU_DB";

    // Attempt to create a connection
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
</body>
</html>
