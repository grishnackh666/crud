<!DOCTYPE html>
<html>

<head>
    <title>CRUD Usuarios</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <br>
        <div class="well" style="margin:auto; padding:auto; width:80%;">
            <div class="container-fluid bg-success">
                <div class="row">
                    <div class="col-md">
                        <header class="py-3">
                            <h3 class="text-center">CRUD USUARIOS</h3>
                        </header>
                    </div>
                </div>
                <span class="pull-right"><a href="#agreNuevo" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Agregar Usuario</a></span>
                <br><br>
                <table class="table caption-top table-striped table-bordered ">
                    <caption>Lista de usuarios</caption>
                    <thead>
                        <th>#</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Nit</th>
                        <th>Accion</th>
                    </thead>
                    <tbody>
                        <?php
                        include('conect.php');
                        $query = mysqli_query($conect, "select * from `users`");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo ($row['idUser']); ?></td>
                                <td><?php echo ucwords($row['name']); ?></td>
                                <td><?php echo ucwords($row['lastName']); ?></td>
                                <td><?php echo $row['nit']; ?></td>
                                <td>
                                    <a href="#edit<?php echo $row['idUser']; ?>" data-toggle="modal" style="margin-right: 10px" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                                    <a href="#del<?php echo $row['idUser']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Eliminar</a>
                                    <?php include('button.php'); ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php include('agreModal.php'); ?>
        </div>
</body>

</html>