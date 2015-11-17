
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-11">
        <a class="btn btn-success" href="<?php echo base_url(); ?>usuarios/crear" role="button">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Crear usuario
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
    		<th class="info">Nombre de usuario</th>
    		<th class="info">Password</th>
            <th class="info">Acciones</th>
    	</tr>
    	<?php foreach($usuarios as $fila){ ?>
    	<tr>
            <td><?php echo $fila["id"]; ?></td>
            <td><?php echo $fila["nombre"]; ?></td>
            <td><?php echo $fila["password"]; ?></td>
            <td>
                <a href="<?php echo base_url('usuarios/editar/'.$fila["id"]); ?>">Editar</a>
                <a href="<?php echo base_url('usuarios/eliminar/'.$fila["id"]); ?>">Eliminar</a>
            </td>
        </tr>
    <?php } ?>
    </table>
