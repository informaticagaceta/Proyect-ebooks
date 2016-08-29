
<h1 class="text-center">Mantenimiento Modulos</h1> <br>
<div class="row" style="margin-bottom: 20px;">
	<div class="col-md-3 col-md-offset-9 ">
		<a class="btn-azul" href="<?php echo base_url('index.php/modulo/agregar/'); ?>" role="button">Agregar Modulo</a>
	</div>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		
		<table class="table table-striped sales">
			<thead>
				<th>#</th>
				<th>nombres</th>
				<th>URL</th>

				<th>Eliminar/Editar</th>
			</thead>
			<tbody>
		<?php 
		$cont = 0;
		foreach ($allModulos as $value) {
			$cont++;
			?>
				<tr>
					<td>
						<?=$cont?>
					</td>
					<td>
						<?=$value->nombre?>
					</td>
					<td>
						<?=$value->url?>
					</td>
					<td class="text-center">
						<a class="btn btn-danger btn-xs" href="<?php echo base_url('index.php/modulo/eliminar/'.$value->idModulo); ?>" title="Eliminar" onclick="return pregunt();">
							<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</a>
						<a href="<?php echo base_url('index.php/modulo/editar/'.$value->idModulo); ?>" class="btn btn-success btn-xs" title="Editar">
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