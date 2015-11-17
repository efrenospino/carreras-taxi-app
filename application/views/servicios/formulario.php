
<div class="row">
    <?php echo form_open("servicios/guardar"); ?>
        <form class="form-inline" role="form">
          <div class="col-md-5">
            <div class="form-group">
              <label for="direccion_destino">Direccion de destino</label>
              <?php echo form_input('direccion_destino', $servicio->direccion_destino, "class='form-control' placeholder='Calle M # N-O'"); ?>
            </div>
            <div class="form-group">
              <label for="cliente">Cliente</label>
                <?php echo form_dropdown('cliente', $clientes, '----', "class='form-control'"); ?>
            </div>
            <div class="form-group">
              <label for="conductor">Conductor</label>
                <?php echo form_dropdown('conductor', $conductores, '----', "class='form-control'"); ?>
            </div>
          </div>
              <div class="col-md-5">
            <div class="form-group">
              <label for="vehiculo">Vehiculo</label>
                <?php echo form_dropdown('vehiculo', $vehiculos, '----', "class='form-control'"); ?>
            </div>
            <div class="form-group">
              <label for="estado">Cliente</label>
                <?php echo form_dropdown('estado', $campo_estado, '----', "class='form-control'"); ?>
            </div>
            <div class="form-group">
              <label for="monto">Monto</label>
              <?php echo form_input('monto', $servicio->monto, "class='form-control' placeholder='000000'"); ?>
            </div>
            <?php echo form_hidden('id', $servicio->id); ?>
            <div class="form-group">
              <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary" />
              <a class="btn btn-warning" href="<?php echo base_url('servicios'); ?>">Cancelar</a>
            </div>
          </div>
        </form>
    <?php echo form_close(); ?>
</div>
