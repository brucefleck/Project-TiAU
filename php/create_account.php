error_reporting(E_ALL);
ini_set('display_errors', 1);


<!DOCTYPE html>
<html>
<head>
    <title>Database Connection Check</title>
</head>
<body>
    <?php
    $servername = "tiau.in";
    $username = "u252844311_brucefleck";
    $password = "1JVp3K\$N78DEPq4Z\$wnn"; // Escaping special characters
    $dbname = "u252844311_TIAU_DB";

    // Attempt to create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        echo "<h2>Connection Failed</h2>";
        echo "Error: " . $conn->connect_error;
    } else {
        echo "<h2>Connection Successful</h2>";
    }

    // Close the connection
    $conn->close();
    ?>
</body>
</html>
