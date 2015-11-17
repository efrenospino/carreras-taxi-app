<div class="row">

    <?php echo form_open("conductores/guardar"); ?>
        <form class="form-inline" role="form">
          <div class="col-md-5">
            <div class="form-group">
              <label for="cedula">Numero de cedula</label>
              <?php echo form_input('cedula', $conductor->cedula, "class='form-control' placeholder='00000000000'"); ?>
            </div>
            <div class="form-group">
              <label for="nombres">Nombres</label>
              <?php echo form_input('nombres', $conductor->nombres, "class='form-control' placeholder='Nombres'"); ?>
            </div>
            <div class="form-group">
              <label for="apellidos">Apellidos</label>
              <?php echo form_input('apellidos', $conductor->apellidos, "class='form-control' placeholder='Apellidos'"); ?>
            </div>
            <div class="form-group">
              <label for="sexo">Sexo</label>
              <?php echo form_dropdown('sexo', $campo_sexo, '---', "class='form-control'"); ?>
            </div>
            <div class="form-group">
              <label for="fecha_nacimiento">Fecha de nacimiento</label>
              <?php echo form_input('fecha_nacimiento', $conductor->fecha_nacimiento, "class='form-control datepicker' placeholder='aa-mm-dd'"); ?>
            </div>
            <div class="form-group">
              <label for="fecha_vinculacion">Fecha de vinculacion</label>
              <?php echo form_input('fecha_vinculacion', $conductor->fecha_vinculacion, "class='form-control datepicker' placeholder='aa-mm-dd'"); ?>
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <label for="tipo_licencia">Tipo de Licencia</label>
              <?php echo form_dropdown('tipo_licencia', $campo_licencia, '---', "class='form-control'"); ?>
            </div>
            <div class="form-group">
              <label for="barrio">Barrio</label>
              <?php echo form_input('barrio', $conductor->barrio, "class='form-control' placeholder='Barrio'"); ?>
            </div>
            <div class="form-group">
              <label for="direccion">Direccion</label>
              <?php echo form_input('direccion', $conductor->direccion, "class='form-control' placeholder='Calle I # J - K'"); ?>
            </div>
            <div class="form-group">
              <label for="email">email</label>
              <?php echo form_input('email', $conductor->email, "class='form-control' placeholder='email@example.com'"); ?>
            </div>
            <div class="form-group">
              <label for="celular">Celular</label>
              <?php echo form_input('celular', $conductor->celular, "class='form-control' placeholder='000000000'"); ?>
            </div>
            <div class="form-group">
              <label for="telefono">Telefono</label>
              <?php echo form_input('telefono', $conductor->telefono, "class='form-control' placeholder='000000000'"); ?>
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
              <label for="comentarios">Comentarios</label>
              <?php echo form_textarea('comentarios', $conductor->comentarios, "class='form-control' placeholder='Area de comentarios'"); ?>
            </div>
            <?php echo form_hidden('id', $conductor->id); ?>
            <div class="form-group">
              <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary" />
              <a class="btn btn-warning" href="<?php echo base_url('conductores'); ?>">Cancelar</a>
            </div>
          </div>
        </form>
    <?php echo form_close(); ?>
</div>
