<!DOCTYPE html>
<html>
<head>
    <title>Database Connection Test</title>
</head>
<body>
    <?php
    // Database connection details
    $servername = "https://auth-db1074.hstgr.io/index.php?route=/"; // Replace with your server name
    $username = "u252844311_brucefleck"; // Replace with your database username
    $password = "1JVp3K$N78DEPq4Z$wnn"; // Replace with your database password
    $dbname = "u252844311_TIAU_DB"; // Replace with your database name

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