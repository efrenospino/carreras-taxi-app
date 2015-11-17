
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-11">
        <a class="btn btn-success" href="<?php echo base_url(); ?>vehiculos/crear" role="button">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Registrar vehiculo
        </a>
        <a class="btn btn-info" disabled="disabled" role="button">
            <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
            Imprimir
        </a>
      </div>
    </div>
    <div class="row"><br></div>
    <table class="table table-hover">
    	<tr>
    		<th class="info">ID</th>
    		<th class="info">Matricula</th>
    		<th class="info">Tipo</th>
    		<th class="info">Estado</th>
            <th class="info">Acciones</th>
    	</tr>
    	<?php foreach($vehiculos as $fila){ ?>
    	<tr>
            <td><?php echo $fila["id"]; ?></td>
            <td><?php echo $fila["matricula"]; ?></td>
            <td><?php echo $campo_tipo[$fila['tipo']]; ?></td>
            <td><?php echo $campo_estado[$fila["estado"]]; ?></td>
            <td>
                <a href="<?php echo base_url('vehiculos/editar/'.$fila["id"]); ?>">Editar</a>
                <a href="<?php echo base_url('vehiculos/eliminar/'.$fila["id"]); ?>">Eliminar</a>
                <a href="<?php echo base_url('vehiculos/perfil/'.$fila["id"]); ?>">Ver</a>
            </td>
        </tr>
    <?php } ?>
    </table>
