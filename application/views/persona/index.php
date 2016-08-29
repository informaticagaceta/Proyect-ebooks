
<h1 class="text-center">Mantenimiento Personas</h1> <br>
<div class="row" style="margin-bottom: 20px;">
	<div class="col-md-3 col-md-offset-9 ">
		<a class="btn-azul" href="<?php echo base_url('index.php/modulo/agregar/'); ?>" role="button">Agregar Persona</a>
	</div>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		
		<table class="table table-striped sales">
			<thead>
				<th>#</th>
				<th>Usuario</th>
				<th>Perfil</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>E-mail</th>
				<th>Direccion</th>
				<th>F. Naci.</th>
				<th>Telefono</th>
				<th>Eliminar/Editar</th>
			</thead>
			<tbody>
		<?php 
		$cont = 0;
		foreach ($allPersona as $value) {
			$cont++;
			?>
				<tr>
					<td>
						<?=$cont?>
					</td>
					<td>
						<?=$value->usuario?>
					</td>
					<td>
						<?=($value->tipoUsuario=='1'?'Administrador':'Editor')?>
					</td>
					<td>
						<?=$value->nombres?>
					</td>
					<td>
						<?=$value->apellidos?>
					</td>
					<td>
						<?=$value->correo?>
					</td>
					<td>
						<?=$value->direccion?>
					</td>
					<td>
						<?=$value->fechaNacimiento?>
					</td>
					<td>
						<?=$value->telefono?>
					</td>
					<td class="text-center">
						<a class="btn btn-danger btn-xs" href="<?php echo base_url('index.php/persona/eliminar/'.$value->idPersona); ?>" title="Eliminar" onclick="return pregunt();">
							<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</a>
						<a href="<?php echo base_url('index.php/persona/editar/'.$value->idPersona); ?>" class="btn btn-success btn-xs" title="Editar">
							<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
						</a>

					</td>

				</tr>
		<?php }
		?>

			</tbody>
		</table>
<script type="text/javascript">
	function pregunt(){
		var resp = confirm("¿Desea eliminar el Registro?");
		if (resp) 
			return true;
		else
			return false;

	}
</script>
			
		</div>	

</div>