<!--Vista para editar al usuario proporcionado-->
<div class="row">
    <div class="col-md-7">
        <form name="theform" id="myform" method="POST" action="<?php echo base_url('usuario/update') ?>">
            <span id="formerror" class="error"></span>
            <?php foreach ($datosUsuario as $value) { ?>
                <input type="hidden" name="idUsuario" value="<?php echo $value->idUsuario; ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $value->nombre; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Paterno</label>
                    <input type="text" name="app" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $value->app; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Materno</label>
                    <input type="text" name="apm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $value->apm; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre de Usuario</label>
                    <input type="text" name="nombreUsuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $value->nombreUsuario; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $value->correo; ?>">
                </div>  
                <div class="form-group">
                    <label for="exampleInputEmail1">Contraseña</label>
                    <input type="password" name="contrasenia" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $value->contrasenia; ?>">
                </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary">Actualizar usuario</button>
        </form>
        <!--Validación del correo-->
        <script src="<?php echo base_url('public/js/myscript.js') ?>"></script>
    </div>
    <div class="col-md-5">
        
    </div>
</div>

