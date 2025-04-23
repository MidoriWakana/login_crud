<?php

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conection->query("DELETE FROM users WHERE id=$id");
    if ($sql == 1) {
        echo "<div class='alert alert-success'>User deleted successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error deleting user</div>";
    }
} else {
    echo "<div class='alert alert-danger'>No user ID provided</div>";
}

?>