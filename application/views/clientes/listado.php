<?php
    if(isset($resCliente)){
        if($resCliente){
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    <p>Guardado correctamente</p>
                  </div>";
        }else{
            echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    <p>Error al guardar</p>
                  </div>";
        }
    }

    ?>

    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-11">
        <a class="btn btn-success" href="<?php echo base_url(); ?>clientes/crear" role="button">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Crear Cliente
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
    		<th class="info">Nombres</th>
    		<th class="info">Apellidos</th>
    		<th class="info">Direccion</th>
            <th class="info">Celular</th>
            <th class="info">Acciones</th>
    	</tr>
    	<?php foreach($clientes as $fila){ ?>
    	<tr>
            <td><?php echo $fila["id"]; ?></td>
            <td><?php echo $fila["nombres"]; ?></td>
            <td><?php echo $fila["apellidos"]; ?></td>
            <td><?php echo $fila["direccion"]; ?></td>
            <td><?php echo $fila["celular"]; ?></td>
            <td>
                <a href="<?php echo base_url('clientes/editar/'.$fila["id"]); ?>">Editar</a>
                <a href="<?php echo base_url('clientes/eliminar/'.$fila["id"]); ?>">Eliminar</a>
                <a href="<?php echo base_url('clientes/perfil/'.$fila["id"]); ?>">Ver</a>
            </td>
        </tr>
    <?php } ?>
    </table>
