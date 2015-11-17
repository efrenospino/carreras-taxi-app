<div class="row">
    <?php echo form_open("vehiculos/guardar"); ?>
        <form class="form-inline" role="form">
          <div class="col-md-5">
            <div class="form-group">
              <label for="matricula">Matricula</label>
                <?php echo form_input('matricula', $vehiculo->matricula, "class='form-control' placeholder='AAA-000'"); ?>
            </div>
            <div class="form-group">
              <label for="documento">Color</label>
              <?php echo form_dropdown('color', $campo_color, '---', "class='form-control'"); ?>
            </div>
            <div class="form-group">
              <label for="tipo">Tipo</label>
              <?php echo form_dropdown('tipo', $campo_tipo, '---', "class='form-control'"); ?>
            </div>
            <div class="form-group">
              <label for="marca">Marca</label>
              <?php echo form_dropdown('marca', $campo_marca, '---', "class='form-control'"); ?>
            </div>
            <div class="form-group">
              <label for="modelo">Modelo</label>
              <?php echo form_input('modelo', $vehiculo->modelo, "class='form-control' placeholder='Modelo'"); ?>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
              <label for="fecha_vinculacion">Fecha de vinculacion</label>
              <?php echo form_input('fecha_vinculacion', $vehiculo->fecha_vinculacion, "class='form-control datepicker' placeholder='aa-mm-dd'"); ?>
            </div>
            <div class="form-group">
              <label for="estado">Estado</label>
              <?php echo form_dropdown('estado', $campo_estado, '---', "class='form-control'"); ?>
            </div>
            <div class="form-group">
              <label for="comentarios">Comentarios</label>
              <?php echo form_textarea('comentarios', $vehiculo->comentarios, "class='form-control' placeholder='Comentarios...'"); ?>
            </div>
            <?php echo form_hidden('id', $vehiculo->id); ?>
            <div class="form-group">
              <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary" />
              <a class="btn btn-warning" href="<?php echo base_url('vehiculos'); ?>">Cancelar</a>
            </div>
          </div>
        </form>
    <?php echo form_close(); ?>
</div>
