<!--CRUD de Usuario-->
<h1>CRUD Usuarios</h1>
<div>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#registro" aria-controls="home" role="tab" data-toggle="tab">Create Usuario</a></li>
        <li role="presentation"><a href="#read" aria-controls="profile" role="tab" data-toggle="tab">Read Usuarios</a></li>
        <li role="presentation"><a href="#actualiza" aria-controls="messages" role="tab" data-toggle="tab">Update Usuario</a></li>
        <li role="presentation"><a href="#eliminar" aria-controls="settings" role="tab" data-toggle="tab">Delete Usuario</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Insertar un Usuario -->
        <div role="tabpanel" class="tab-pane active" id="registro">
            <h2>Formulario de registro de Usuarios</h2>
            <form name="theform" id="myform" method="POST" action="<?php echo base_url('usuario/insert') ?>">
                <span id="formerror" class="error"></span>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Paterno</label>
                    <input type="text" name="app" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apellido Paterno" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Materno</label>
                    <input type="text" name="apm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apellido Materno" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre de Usuario</label>
                    <input type="text" name="nombreUsuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="usuario" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label> <!-- pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" -->
                    <input type="text" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com" required>
                </div>  
                <div class="form-group">
                    <label for="exampleInputEmail1">Contraseña</label>
                    <input type="password" name="contrasenia" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrar usuario</button>
            </form>
            <!--Validación del correo-->
            <script src="<?php echo base_url('public/js/myscript.js') ?>"></script>
        </div>
        <!--Ver la lista de Usuarios-->
        <div role="tabpanel" class="tab-pane" id="read">
            <table class="table table-hover">
                <thead>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombre de Usuario</th>
                <th>Correo</th>
                </thead>
                <tbody>
                    <?php foreach ($readUsuarios as $value){ ?>
                    <tr>
                        <td><?php echo $value->nombre; ?></td>
                        <td><?php echo $value->app; ?></td>
                        <td><?php echo $value->apm; ?></td>
                        <td><?php echo $value->nombreUsuario; ?></td>
                        <td><?php echo $value->correo; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!--Actualizar Usuarios -->
        <div role="tabpanel" class="tab-pane" id="actualiza">
            <table class="table table-hover">
                <thead>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombre de Usuario</th>
                <th>Correo</th>
                <th>Acciones</th>
                </thead>
                <tbody>
                    <?php foreach ($readUsuarios as $value) { ?>
                        <tr>
                            <td><?php echo $value->nombre; ?></td>
                            <td><?php echo $value->app; ?></td>
                            <td><?php echo $value->apm; ?></td>
                            <td><?php echo $value->nombreUsuario; ?></td>
                            <td><?php echo $value->correo; ?></td>
                            <td>
                                <a href="<?php echo base_url('usuario/edit/').$value->idUsuario; ?>" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Editar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- Eliminar Usuarios -->
        <div role="tabpanel" class="tab-pane" id="eliminar">
            <table class="table table-hover">
                <thead>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombre de Usuario</th>
                <th>Correo</th>
                <th>Acciones</th>
                </thead>
                <tbody>
                    <?php foreach ($readUsuarios as $value) { ?>
                        <tr>
                            <td><?php echo $value->nombre; ?></td>
                            <td><?php echo $value->app; ?></td>
                            <td><?php echo $value->apm; ?></td>
                            <td><?php echo $value->nombreUsuario; ?></td>
                            <td><?php echo $value->correo; ?></td>
                            <td>
                                <a href="<?php echo base_url('usuario/delete/').$value->idUsuario; ?>" title="Eliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

