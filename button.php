<!-- Boton eliminar -->
    <div class="modal fade" id="del<?php echo $row['idUser']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Eliminar Usuario</h4></center>
                </div>
                <div class="modal-body">
                <?php
                    $del=mysqli_query($conect,"select * from users where idUser='".$row['idUser']."'");
                    $drow=mysqli_fetch_array($del);
                ?>
                <div class="container-fluid">
                    <h5><center>Estas seguro de eliminar a <strong><?php echo ucwords($drow['name'].' '.$row['lastName']); ?></strong> del registro.</center></h5> 
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a href="delete.php?id=<?php echo $row['idUser']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Eliminar</a>
                </div>
                
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Boton Editar -->
    <div class="modal fade" id="edit<?php echo $row['idUser']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar</h4></center>
                </div>
                <div class="modal-body">
                <?php
                    $edit=mysqli_query($conect,"select * from users where idUser='".$row['idUser']."'");
                    $erow=mysqli_fetch_array($edit);
                ?>
                <div class="container-fluid">
                <form method="POST" action="edit.php?id=<?php echo $erow['idUser']; ?>">
                    <div class="row">
                        <div class="col-lg-2">
                            <label style="position:relative; top:7px;">Nombres:</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" value="<?php echo $erow['name']; ?>">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-lg-2">
                            <label style="position:relative; top:7px;">Apellidos:</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="lastName" class="form-control" value="<?php echo $erow['lastName']; ?>">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-lg-2">
                            <label style="position:relative; top:7px;">Nit:</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="number" name="nit" class="form-control" value="<?php echo $erow['nit']; ?>">
                        </div>
                    </div>
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<!-- /.modal -->