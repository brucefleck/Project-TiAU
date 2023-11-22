error_reporting(E_ALL);
ini_set('display_errors', 1);

<!DOCTYPE html>
<html>
<head>
    <title>HELLOOO</title>
</head>
<body>
    <?php
    echo "<h2>GUH</h2>";
    $servername = "https://tiau.in/";
    $username = "u252844311_brucefleck";
    $password = "Moocat12#";
    $dbname = "u252844311_TIAU";

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

        echo "<p>Nombre: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Password: $password</p>";

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
