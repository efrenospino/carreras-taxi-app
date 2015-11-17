
<div class="row">
    <?php echo form_open("usuarios/guardar"); ?>
        <form class="form-inline" role="form">
          <div class="col-md-5">
            <div class="form-group">
              <label for="nombre">Nombre de usuario</label>
              <?php echo form_input('nombre', $usuario->nombre, "class='form-control' placeholder='Nombre de usuario'"); ?>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
                <?php echo form_password('password', $usuario->password, "class='form-control' placeholder='Password'"); ?>
            </div>
            <?php echo form_hidden('id', $usuario->id); ?>
            <div class="form-group">
              <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary" />
              <a class="btn btn-warning" href="<?php echo base_url('usuarios'); ?>">Cancelar</a>
            </div>
          </div>
        </form>
    <?php echo form_close(); ?>
</div>
