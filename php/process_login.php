<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<?php
    session_start();

    // Database connection
    $servername = "localhost";
    $username = "u252844311_brucefleck";
    $password = "Moocat12#";
    $dbname = "u252844311_TIAU";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "<p>Email: $email</p>";

    $query = "SELECT * FROM users WHERE email = ?";
    echo "<p>1</p>";
    $stmt = $connection->prepare($query);
    echo "<p>2</p>";
    $stmt->bind_param("s", $email);
    echo "<p>3</p>";
    $stmt->execute();
    echo "<p>4</p>";
    $result = $stmt->get_result();
    echo "<p>5</p>";

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            echo "Login successful! Redirecting...";
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "User not found";
    }

    $stmt->close();
    $connection->close();
?>
</body>
</html>
