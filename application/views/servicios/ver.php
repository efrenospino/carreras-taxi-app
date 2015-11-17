<div class="row">
	<h2>Informacion de la transaccion</h2>
	<h4><?php echo $servicio->direccion_destino; ?> <span class="label label-default">Destino</span></h4>
	<h4><?php echo "$".$servicio->monto; ?> <span class="label label-default">Monto</span></h4>
	<h4><?php echo $campo_estado[$servicio->estado]; ?> <span class="label label-default">Estado</span></h4>
</div>

<div class="row">
	<h2>Informacion basica del cliente</h2>
	<h4><?php echo $cliente->nombres." ".$cliente->apellidos; ?> <span class="label label-default">Nombres y Apellidos</span></h4>
	<h4><?php echo $cliente->barrio; ?> <span class="label label-default">Barrio</span></h4>
	<h4><?php echo $cliente->direccion; ?> <span class="label label-default">Direccion</span></h4>
	<p><a href="<?php echo base_url('clientes/perfil/'.$cliente->id); ?>">
		<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
		Ver mas...
	</a></p>
</div>

<div class="row">
	<h2>Informacion basica del conductor</h2>
	<h4><?php echo "N° ".$conductor->cedula; ?> <span class="label label-default">Cedula</span></h4>
	<h4><?php echo $conductor->nombres." ".$conductor->apellidos; ?> <span class="label label-default">Nombres y Apellidos</span></h4>
	<h4><?php echo $conductor->celular; ?> <span class="label label-default">Celular</span></h4>
	<p><a href="<?php echo base_url('conductores/perfil/'.$conductor->id); ?>">
		<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
		Ver mas...
	</a></p>
</div>

<div class="row">
	<h2>Informacion basica del vehiculo</h2>
	<h4><?php echo $vehiculo->matricula; ?> <span class="label label-default">Matricula</span></h4>
	<h4><?php echo $campo_tipo["$vehiculo->tipo"]; ?> <span class="label label-default">Tipo</span></h4>
	<h4><?php echo $campo_color["$vehiculo->color"]; ?> <span class="label label-default">Color</span></h4>
	<h4><?php echo $campo_marca["$vehiculo->marca"]; ?> <span class="label label-default">Marca</span></h4>
	<p><a href="<?php echo base_url('vehiculos/perfil/'.$vehiculo->id); ?>">
		<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
		Ver mas...
	</a></p>
</div>
<div class="row">
	<br>
</div>
<div class="row">
	<p><a class="btn btn-primary" href="<?php echo base_url('servicios/editar/'.$servicio->id); ?>">
		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
		Editar
	</a>
	<a class="btn btn-danger" href="<?php echo base_url('servicios/eliminar/'.$servicio->id); ?>">
		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		Eliminar
	</a>
	<a class="btn btn-warning" href="<?php echo base_url('servicios'); ?>">Cancelar</a></p>
</div>
