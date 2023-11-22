<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta creada!</title>
</head>
<body>
    <h2>Cuanta creada exitosamente!</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['first_name'];
        $email = $_POST['email'];
        $password = $_POST['password1'];

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Password: $password</p>";
    }
    ?>  
</body>
</html>