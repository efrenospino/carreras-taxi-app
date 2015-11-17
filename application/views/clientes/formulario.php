<div class="row">
    <?php echo form_open("clientes/guardar"); ?>
        <form class="form-inline" role="form">
            <div class="col-md-5">
              <div class="form-group">
                <label for="tipo_documento">Tipo de documento</label>
                <?php echo form_dropdown('tipo_documento', $campo_tipo_documento, '----', "class='form-control'"); ?>
              </div>
              <div class="form-group">
                <label for="documento">Numero de documento</label>
                <?php echo form_input('documento', $cliente->documento, "class='form-control' placeholder='00000000000'"); ?>
              </div>
              <div class="form-group">
                <label for="nombres">Nombres</label>
                <?php echo form_input('nombres', $cliente->nombres, "class='form-control' placeholder='Nombres'"); ?>
              </div>
              <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <?php echo form_input('apellidos', $cliente->apellidos, "class='form-control' placeholder='Apellidos'"); ?>
              </div>
              <div class="form-group">
                <label for="sexo">Sexo</label>
                <?php echo form_dropdown('sexo', $campo_sexo, '---', "class='form-control'"); ?>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="barrio">Barrio</label>
                <?php echo form_input('barrio', $cliente->barrio, "class='form-control' placeholder='Barrio'"); ?>
              </div>
              <div class="form-group">
                <label for="direccion">Direccion</label>
                <?php echo form_input('direccion', $cliente->direccion, "class='form-control' placeholder='Calle I # J - K'"); ?>
              </div>
              <div class="form-group">
                <label for="email">email</label>
                <?php echo form_input('email', $cliente->email, "class='form-control' placeholder='email@example.com'"); ?>
              </div>
              <div class="form-group">
                <label for="celular">Celular</label>
                <?php echo form_input('celular', $cliente->celular, "class='form-control' placeholder='000000000'"); ?>
              </div>
              <div class="form-group">
                <label for="telefono">Telefono</label>
                <?php echo form_input('telefono', $cliente->telefono, "class='form-control' placeholder='000000000'"); ?>
              </div>
              <?php echo form_hidden('id', $cliente->id); ?>
              <div class="form-group">
                <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary" />
                <a class="btn btn-warning" href="<?php echo base_url('clientes'); ?>">Cancelar</a>
              </div>
          </div>

      </form>
    <?php echo form_close(); ?>
</div>
