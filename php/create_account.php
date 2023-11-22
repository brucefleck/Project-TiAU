<!DOCTYPE html>
<html>
<head>
    <title>Cuenta Creada - TiAU</title>
    <link rel="stylesheet" href="..\css\universal-stylesheet.css">
    <link rel="icon" href="..\assets\images\upc-logo-red.webp" type="image/webp">
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "u252844311_brucefleck";
    $password = "Moocat12#";
    $dbname = "u252844311_TIAU";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    ////CHECK IF EMAIL IS ALREADY REGISTERED
    //$email = $_POST['email'];
    //echo "<h3>email: $email</h3>";
    //
    //$check_query = "SELECT * FROM users WHERE email = '$email'";
    //$result = $connection->query($check_query);
    //
    //if ($result->num_rows > 0) {
    //    echo "<script>alert('Email already exists. Please use a different email.');</script>";
    //} else {
    //    
    //}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['first_name'];
        $email = $_POST['email'];
        $password = $_POST['password1'];

        //echo "<p>Nombre: $name</p>";
        //echo "<p>Email: $email</p>";
        //echo "<p>Password: $password</p>";

        echo '<div style="margin-left: auto; margin-right: auto; margin-top: 8rem;
        border-radius: 4px; width: 20rem; border-radius: 10px;
        box-shadow: 15px 15px 25px 20px rgb(220, 218, 218);
        padding: 2rem; justify-content: center;">
            <div style="width: 17rem; justify-content: center; margin-left: auto; margin-right: auto;">
                <h2>Bienvenido, '.$name.'!!!</h2>
                <p>Ya esta registrada tu cuenta :D</p>
            </div>
            <div style="width: 7rem; margin-left: auto; margin-right: auto;">
                <a href="..\index.html">
                    <button style="background-color: #2A29B3;
                    color: whitesmoke;
                    padding: 1rem 1.5rem;
                    border: none;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    border-radius: 4px;" class="primary-button goto-login">Ir a login!</button>
                </a>
            </div>
            <div style="display: flex; flex-direction: row; width: 17rem; margin-top: 1rem; margin-left: auto; margin-right: auto;">
                    <div style="background-color: #2A29B3;
                    display: flex;
                    justify-content: flex-end; height: 7rem;">
                        <img style="height: 7rem; width: 12rem;" src="..\assets\images\tiau-logo_svg.svg" alt="tiau-logo">
                    </div>
                    <div class="colors-container">
                        <div style="width: 5rem; height: 2.33rem; background-color: #FFB100;"></div>
                        <div style="width: 100%; height: 2.33rem; background-color: #FF4B00;"></div>
                        <div style="width: 100%; height: 2.33rem; background-color: #FE6EB4"></div>
                    </div>
                </div>
            </div>';

        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
    ?>
</body>
</html>
