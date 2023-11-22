<!DOCTYPE html>
<html>
<head>
    <title>Cuenta Creada</title>
</head>
<body>
    <?php
    echo "<h2>GUH</h2>";
    $servername = "localhost";
    $username = "u252844311_brucefleck";
    $password = "Moocat12#";
    $dbname = "u252844311_TIAU";
    echo "<h2>KYS</h2>";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    //CHECK IF EMAIL IS ALREADY REGISTERED
    $email = $_POST['email'];

    $check_query = "SELECT * FROM users WHERE email = '\$email'";
    $result = $connection->query($check_query);

    if ($result->num_rows > 0) {
        echo "<script>alert('Email already exists. Please use a different email.');</script>";
    } else {
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
    }

    $conn->close();
    ?>
</body>
</html>
