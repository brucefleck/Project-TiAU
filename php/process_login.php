<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Use the retrieved data as needed, e.g., insert into a database, perform calculations, etc.
    // For example, echoing the data back:
    echo "Name: $name <br>";
    echo "Email: $email <br>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Success Page</title>
</head>
<body>
    <h1>Success!</h1>
    <p>Name: $name</p>
    <p>Email: $email</p>
</body>
</html>