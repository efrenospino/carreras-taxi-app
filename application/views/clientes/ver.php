<div class="row">
	<h4><?php echo $campo_tipo_documento["$cliente->tipo_documento"].": N° ".$cliente->documento; ?> <span class="label label-default">Documento</span></h4>
	<h4><?php echo $cliente->nombres; ?> <span class="label label-default">Nombres</span></h4>
	<h4><?php echo $cliente->apellidos; ?> <span class="label label-default">Apellidos</span></h4>
	<h4><?php echo $campo_sexo["$cliente->sexo"]; ?> <span class="label label-default">Sexo</span></h4>
	<h4><?php echo $cliente->barrio; ?> <span class="label label-default">Barrio</span></h4>
	<h4><?php echo $cliente->direccion; ?> <span class="label label-default">Direccion</span></h4>
	<h4><?php echo $cliente->celular; ?> <span class="label label-default">Celular</span></h4>
	<h4><?php echo $cliente->telefono; ?> <span class="label label-default">Telefono</span></h4>
	<h4><?php echo $cliente->email; ?> <span class="label label-default">email</span></h4>
</div>
<div class="row"><br></div>
<div class="row">
	<p><a class="btn btn-primary" href="<?php echo base_url('clientes/editar/'.$cliente->id); ?>">
		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
		Editar
	</a>
	<a class="btn btn-danger" href="<?php echo base_url('clientes/eliminar/'.$cliente->id); ?>">
		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		Eliminar
	</a>
	<a class="btn btn-warning" href="<?php echo base_url('clientes'); ?>">Cancelar</a></p>
</div>
