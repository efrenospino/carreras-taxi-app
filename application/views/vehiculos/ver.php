<div class="row">
	<h4><?php echo $vehiculo->matricula; ?> <span class="label label-default">Matricula</span></h4>
	<h4><?php echo $campo_tipo["$vehiculo->tipo"]; ?> <span class="label label-default">Tipo</span></h4>
	<h4><?php echo $campo_color["$vehiculo->color"]; ?> <span class="label label-default">Color</span></h4>
	<h4><?php echo $campo_marca["$vehiculo->marca"]; ?> <span class="label label-default">Marca</span></h4>
	<h4><?php echo $vehiculo->fecha_vinculacion; ?> <span class="label label-default">Fecha de vinculacion</span></h4>
	<h4><?php echo $campo_estado["$vehiculo->estado"]; ?> <span class="label label-default">Estado</span></h4>
	<h4><?php echo $vehiculo->modelo; ?> <span class="label label-default">Modelo</span></h4>
	<h4><?php echo $vehiculo->comentarios; ?> <span class="label label-default">Comentarios</span></h4>
</div>
<div class="row"><br></div>
<div class="row">
	<p><a class="btn btn-primary" href="<?php echo base_url('vehiculos/editar/'.$vehiculo->id); ?>">
		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
		Editar
	</a>
	<a class="btn btn-danger" href="<?php echo base_url('vehiculos/eliminar/'.$vehiculo->id); ?>">
		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		Eliminar
	</a>
	<a class="btn btn-warning" href="<?php echo base_url('vehiculos'); ?>">Cancelar</a></p>
</div>
