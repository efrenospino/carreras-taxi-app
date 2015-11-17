
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-11">
        <a class="btn btn-success" href="<?php echo base_url(); ?>servicios/crear" role="button">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Crear servicio
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
    		<th class="info">Destino</th>
    		<th class="info">Monto</th>
    		<th class="info">Estado</th>
            <th class="info">Acciones</th>
    	</tr>
    	<?php foreach($servicios as $fila){ ?>
    	<tr>
            <td><?php echo $fila["id"]; ?></td>
            <td><?php echo $fila["direccion_destino"]; ?></td>
            <td><?php echo $fila["monto"]; ?></td>
            <td><?php echo $campo_estado[$fila["estado"]]; ?></td>
            <td>
                <a href="<?php echo base_url('servicios/editar/'.$fila["id"]); ?>">Editar</a>
                <a href="<?php echo base_url('servicios/eliminar/'.$fila["id"]); ?>">Eliminar</a>
                <a href="<?php echo base_url('servicios/perfil/'.$fila["id"]); ?>">Ver</a>
            </td>
        </tr>
    <?php } ?>
    </table>
