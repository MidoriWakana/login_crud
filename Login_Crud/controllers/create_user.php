<?php
if (!empty($_POST["btnregistro"])) {
    if (!empty($_POST["name"]) and !empty($_POST["lastname"]) and !empty($_POST["email"]) and !empty($_POST["password"])) {
        
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = $conection->query("INSERT INTO users (name, lastname, email, password) VALUES ('$name', '$lastname', '$email', '$password')");
        if ($sql == 1) {
            echo "<div class='alert alert-success'>User registered successfully</div>";
        } else {
            echo "<div class='alert alert-danger'>Error registering user</div>";
        }
    } else {
        echo "<div class='alert alert-warining'>Please fill in all fields</div>";
    }
}
?>