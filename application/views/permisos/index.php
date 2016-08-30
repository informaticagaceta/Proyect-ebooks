
<h1 class="text-center">Mantenimiento Permisos</h1> <br>

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		
		<form class="form-inline" method="POST" name="miForm" id="miForm" action="<?php echo base_url('index.php/permisos/actualizar_permisos'); ?>">
		<label>Perfil : </label>
			<select name="perfil" class="form-control" onchange="enviarp();">
			  <option>Seleccion un Perfil</option>
			  <?php 
			  	foreach ($allRoles as $key) {
			  	 	echo '<option value="'.$key->idRol.'">'.$key->nombre.'</option>';
			  	}
			  ?>
			</select>
			<input type="hidden" id="ocult" name="ocult" value="0">
			<input type="submit" value="Actualizar Permisos" class="btn btn-success" />
		<br>
		<br>
		 
			<table class="table table-striped sales">
				<thead>
					<th>#</th>
					<th>nombres</th>
					<th>URL</th>

					<th>Publicar</th>
					<th>Modificar</th>
					<th>Leer</th>
					<th>Eliminar</th>
					<th>
				</thead>
				<tbody>
			<?php 
			$cont = 0;
			$limit = 0;
			foreach ($allModulos as $value) {
				$cont++;

			// vemos y compramos los permisos 
			//	foreach ($verPermisos as $ve) {
			//  comparar los valores de aqui. con el ID de Perfil para conseguir la data correcta. 
			// con esto continua en si para avanzar en los de mas  
			// titulo con misma forma en pulir. 	
				
					
					
				//	if ($limit>0 ) continue;
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

					<?
						foreach ($mePerfil as $val) {
						if(  ($value->idModulo==$val->idModulo  && $val->permisos=='1')  ){
					?>
						<td class="text-center">
							 <input type="checkbox" id="" name="permis[]" <?php  echo ( ($value->idModulo==$val->idModulo && $val->permisos=='1')?"checked":"")  ?> value="<?=$value->idModulo ?>_1"> 
						</td>
						<?
							}
							// segundo opcion
						if(  $value->idModulo==$val->idModulo  && $val->permisos=='2'){
						?>
						<td class="text-center">
							 <input type="checkbox" id="" name="permis[]" <?php  echo ( ($value->idModulo==$val->idModulo && $val->permisos=='2')?"checked":"")  ?> value="<?=$value->idModulo ?>_2"> 
						</td>
						<?
							}
							// segundo opcion
						if(  $value->idModulo==$val->idModulo  && $val->permisos=='3'){						
							
						?>
						<td class="text-center">
							 <input type="checkbox" id="" name="permis[]" <?php  echo ( ($value->idModulo==$val->idModulo && $val->permisos=='3')?"checked":"")  ?> value="<?=$value->idModulo ?>_3"> 
						</td>
						<?
							}
							// segundo opcion
						if(  $value->idModulo==$val->idModulo  && $val->permisos=='4'){						
							
						?>						
						<td class="text-center">
							 <input type="checkbox" id="" name="permis[]" <?php  echo ( ($value->idModulo==$val->idModulo && $val->permisos=='4')?"checked":"")  ?> value="<?=$value->idModulo ?>_4"> 
						</td>
				<?php 
					}
				}
				?>
					</tr>
			<?php 
			
		
		// eso
			}

			?>

				</tbody>
			</table>
		</form>
<script type="text/javascript">
// envio  para mostrar 
function enviarp(){
	$("#ocult").value("1");
	$("#miForm").submit();
}


//pregunto antes de enviar 
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