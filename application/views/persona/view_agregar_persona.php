<div class="row">
	<div class="col-md-8 col-md-offset-2">
		
	<h1>Registro de Persona</h1>
		 <form method="POST" action="<?php echo base_url('index.php/persona/agregar'); ?>">
			  <div class="form-group">
			    <label for="">Usuario</label>
			    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" autofocus required>
			  </div>
			  <div class="form-group">
			    <label for="">Password</label>
			    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" autofocus required>
			  </div>			  		
			  <div class="form-group">
			    <label for="">Perfil</label>
			    <select class="form-control" name="perfil" id="perfil">
				  <option value="1">Adminstrador</option>
				  <option value="2">Editor</option>
				</select>
			  </div>				   
			  <div class="form-group">
			    <label for="">Nombres</label>
			    <input type="text" class="form-control" name="nombres" id="" placeholder="Nombres" autofocus required>
			  </div>
			 <div class="form-group">
			    <label for="">Apellidos</label>
			    <input type="text" class="form-control" id=""  name="apellidos" placeholder="Apellidos" required>
			  </div>
			  <div class="form-group">
			    <label for="">DNI</label>
			    <input type="number" maxlength="8" class="form-control" id="" name="dni" placeholder="Dni" required>
			  </div>
			  <div class="form-group">
			    <label for="">Email</label>
			    <input type="email" class="form-control" id="" name="email" placeholder="Email" required>
			  </div>
			  <div class="form-group">
			    <label for="">Direccion</label>
			    <input type="text" class="form-control" id="" name="direccion" placeholder="Direccion" required>
			  </div>
			  <div class="form-group">
			    <label for="">F. Nacimiento</label>
			    <input type="date" class="form-control" id="" name="fnacimiento" placeholder="F. Nacimiento" required>
			  </div>

			  <div class="form-group">
			    <label for="">Telefono</label>
			    <input type="tel" class="form-control" id="" name="telefono" placeholder="Telefono">
			  </div>
			  
			  <button type="submit" class="btn-azul">Registrar</button>
			  <button type="button" onclick="location.href='index'" class="btn-rojo">Cancelar</button>
		</form>	

	</div>
</div>