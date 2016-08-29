<div class="row">
	<div class="col-md-8 col-md-offset-2">
		
	<h1>Actualizar de Persona</h1>
		 <form method="POST" action="<?php echo base_url('index.php/modulo/actualiza'); ?>">
		<?php 
		foreach ($elModulo as $value) {
			?>
				<input type="hidden" name="id" id="id" value="<?=$value->idModulo?>" >

			  <div class="form-group">
			    <label for="">Nombres</label>
			    <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres" value="<?=$value->nombre?>" >
			  </div>
			  <div class="form-group">
			    <label for="">URL</label>
			    <input type="text" class="form-control" name="url" id="url" placeholder="URL" value="<?=$value->url?>" >
			  </div>
			  
			  <button type="submit" class="btn btn-primary btn-default">Actualizar</button>
			   <button type="button" onclick="location.href='../index'" class="btn btn-danger btn-default">Cancelar</button>
		<?php 
			}
		?>
		</form>	

	</div>
</div>