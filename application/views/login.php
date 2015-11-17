<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Online</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('css/signin.css'); ?>">

    </style>

  </head>

  <body>

    <div class="container">

      <div class="page-header">
        <h1>Inicio de sesion</h1>
      </div>

      <?php echo validation_errors(); ?>
      <?php echo form_open('verificar', array("class"=>"form-signin")); ?>
       <label for="nombre">Username:</label>
       <input class="form-control" placeholder="Nombre de usuario" type="text" size="20" id="nombre" name="nombre"/>
       <br/>
       <label for="password">Clave:</label>
       <input class="form-control" placeholder="Clave" type="password" size="20" id="passowrd" name="password"/>
       <br/>
       <input class="btn btn-primary" type="submit" value="Login"/>
      </form>
    </div>
  </body>
</html>
