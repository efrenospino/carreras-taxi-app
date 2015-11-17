<div class="row">
	<h4><?php echo "N° ".$conductor->cedula; ?> <span class="label label-default">Cedula</span></h4>
	<h4><?php echo $conductor->nombres; ?> <span class="label label-default">Nombres</span></h4>
	<h4><?php echo $conductor->apellidos; ?> <span class="label label-default">Apellidos</span></h4>
	<h4><?php echo $campo_sexo["$conductor->sexo"]; ?> <span class="label label-default">Sexo</span></h4>
	<h4><?php echo $campo_licencia["$conductor->tipo_licencia"]; ?> <span class="label label-default">Tipo de licencia</span></h4>
	<h4><?php echo $conductor->fecha_nacimiento; ?> <span class="label label-default">Nacimiento</span></h4>
	<h4><?php echo $conductor->fecha_vinculacion; ?> <span class="label label-default">Vinculacion</span></h4>
	<h4><?php echo $conductor->barrio; ?> <span class="label label-default">Barrio</span></h4>
	<h4><?php echo $conductor->direccion; ?> <span class="label label-default">Direccion</span></h4>
	<h4><?php echo $conductor->celular; ?> <span class="label label-default">Celular</span></h4>
	<h4><?php echo $conductor->telefono; ?> <span class="label label-default">Telefono</span></h4>
	<h4><?php echo $conductor->email; ?> <span class="label label-default">email</span></h4>
	<h4><?php echo $conductor->comentarios; ?> <span class="label label-default">Comentarios</span></h4>
</div>
<div class="row"><br></div>
<div class="row">
	<p><a class="btn btn-primary" href="<?php echo base_url('conductores/editar/'.$conductor->id); ?>">
		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
		Editar
	</a>
	<a class="btn btn-danger" href="<?php echo base_url('conductores/eliminar/'.$conductor->id); ?>">
		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		Eliminar
	</a>
	<a class="btn btn-warning" href="<?php echo base_url('conductores'); ?>">Cancelar</a></p>
</div>
