<div class="modal fade" id="agreNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Usuario</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="agreNuevo.php">
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="control-label" style="position:relative; top:7px;">Nombres:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="control-label" style="position:relative; top:7px;">Apellidos:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="lastName">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="control-label" style="position:relative; top:7px;">Nit:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" name="nit">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</a>
                    </form>
            </div>

        </div>
    </div>
</div>