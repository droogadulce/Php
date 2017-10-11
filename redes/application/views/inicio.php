<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen de Mecanografía en JS</title>
    <!-- agrega aquí el script para el estilo-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style.css') ?>">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <header class="masthead">
        <h1>Mide tu velocidad al teclear</h1>
    </header>
    <main class="main">
        <article class="intro">
            <p>¡Inicia sesión para poder empezar a jugar!</p>
        </article><!-- .intro -->
            
            <div class="container">
        <header><h1>Ingresa</h1></header>
        <div class="row">
            
            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                <form role="form" id="form-submit"  method="POST" class="form-submit" action="<?php echo base_url(); ?>index.php/login/do_login">
                    <div class="form-group">
                        <label for="form-create-account-email">Usuario:</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" required>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label for="form-create-account-password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div><!-- /.form-group -->
                    <div class="form-group clearfix">
                        <button type="submit" class="btn pull-right btn-default" id="account-submit">Ingresar</button>
                    </div><!-- /.form-group -->
                </form>
                <hr>
                <div class="center"><a href="#">Si tienes problemas de acceso por favor escribe a paulo.contreras@ciencias.unam.mx</a></div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
    
    <div class="container">
        <header><h1>Registro de Usuario</h1></header>
        <div class="row">

            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                <form role="form" id="form-submit"  method="POST" class="form-submit" action="<?php echo base_url(); ?>index.php/login/addUsuario">
                    <div class="form-group">
                        <label for="form-create-account-email">Usuario:</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" required>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label for="form-create-account-password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div><!-- /.form-group -->
                    <div class="form-group clearfix">
                        <button type="submit" class="btn pull-right btn-default" id="account-submit">Registrar</button>
                    </div><!-- /.form-group -->
                </form>
                <hr>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
        
    </main>
</body>

</html>
