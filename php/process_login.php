<!-- process_form.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Submitted Data</title>
</head>
<body>
    <h2>Submitted Information:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo "<p>Email: $email</p>";
        echo "<p>Password: $password</p>";
    }
    ?>
</body>
</html>
