<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
<script>
    function eliminar() {
        var respuesta = confirm("¿Estas seguro de eliminar el usuario?");
        return respuesta
    }
</script>

    <?php
        include "models/conection.php";
        include "controllers/delete_user.php";
    ?>
<div class="container-fluid row">
    <form class="col-4" method="POST">
    <h3 class="text-center text-primary">Registro de usuarios</h3>
    <?php
        include "controllers/create_user.php";
    ?>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="lastname">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password">
        </div>

        <button type="submit" class="btn btn-primary" name="btnregistro" value="ok">Registrar usuarios</button>
    </form>

    <div class="col-8 p-4">
        <h3 class="text-center text-primary">Lista de usuarios registrados</h3>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Correo Electronico</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "models/conection.php";
                $sql = $conection -> query("SELECT * FROM users");
                while ($data = $sql -> fetch_object()) { ?>
                <tr>
                    <td><?=$data->id?></td>
                    <td><?=$data->name?></td>
                    <td><?=$data->lastname?></td>
                    <td><?=$data->email?></td>
                    <td>
                        <a href="update_user.php?id=<?= $data->id?>" class="btn btn-small btn-warning">Editar</a>
                        <a onclick="return eliminar()" href="index.php?id=<?= $data->id ?> " class="btn btn-small btn-danger">Eliminar</a>
                    </td>
                </tr>
                <?php }
                ?>
                
                
            </tbody>
        </table>
    </div>
    
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html></main></header></head>