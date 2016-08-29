<div class="row">
	<div class="col-md-8 col-md-offset-2">
		
	<h1>Registro de Persona</h1>
		 <form method="POST" action="<?php echo base_url('index.php/modulo/agregar'); ?>">
		  		
			   
			  <div class="form-group">
			    <label for="">Nombres</label>
			    <input type="text" class="form-control" name="nombres" id="" placeholder="Nombres" autofocus required>
			  </div>
			  <div class="form-group">
			    <label for="">URL</label>
			    <input type="text" class="form-control" name="url" id="url" placeholder="URL" autofocus required>
			  </div>			  

			  <button type="submit" class="btn-azul">Registrar</button>
			  <button type="button" onclick="location.href='index'" class="btn-rojo">Cancelar</button>
		</form>	

	</div>
</div>