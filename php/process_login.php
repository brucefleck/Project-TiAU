<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use the retrieved data as needed, e.g., insert into a database, perform calculations, etc.
    // For example, echoing the data back:
    echo "Email: $name <br>";
    echo "Password: $password <br>";
}
?>