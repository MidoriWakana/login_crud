<?php

if (!empty($_POST["btnregistro"])) {
    if (!empty($_POST["name"]) and !empty($_POST["lastname"]) and !empty($_POST["email"]) and !empty($_POST["password"])) {
        
        $id = $_POST["id"];
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = $conection->query("UPDATE users SET name='$name', lastname='$lastname', email='$email', password='$password' WHERE id=$id"); 
        if ($sql == 1) {
            header ("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Error updating user</div>";
        }
    } else {
        echo "<div class='alert alert-warining'>Please fill in all fields</div>";
    }
}

?>