<?php
include "models/conection.php";
    $id = $_GET["id"];
    $sql = $conection->query("SELECT * FROM users WHERE id=$id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
    <h3 class="text-center text-primary">Actualizar usuarios</h3>
    <input type="text" name="id" value="<?=$_GET["id"] ?>" hidden>
    <?php
        include "controllers/update_user.php";
        while ($data = $sql -> fetch_object()) {?>
    <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" value="<?=$data->name?>">
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="lastname" value="<?=$data->lastname?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" name="email" value="<?=$data->email?>">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password" value="<?=$data->password?>">
        </div>
        <?php }
    ?>
        

        <button type="submit" class="btn btn-primary" name="btnregistro" value="ok">Registrar usuarios</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>