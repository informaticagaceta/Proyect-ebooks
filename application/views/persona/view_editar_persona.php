<div class="row">
	<div class="col-md-8 col-md-offset-2">
		
	<h1>Actualizar de Persona</h1>
		 <form method="POST" action="<?php echo base_url('index.php/persona/actualiza'); ?>">
		<?php 
		foreach ($laPersona as $value) {
			?>
				<input type="hidden" name="id" id="id" value="<?=$value->idPersona?>" >
			  <div class="form-group">
			    <label for="">Usuario</label>
			    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" readonly required value="<?=$value->usuario?>">
			  </div>
			  <div class="form-group">
			    <label for="">Password</label>
			    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"  required value="<?=$value->password?>">
			  </div>			  		
			  <div class="form-group">
			    <label for="">Perfil</label>
			    <select class="form-control" name="perfil" id="perfil">
				  <option value="1">Administrador</option>
				  <option value="2">Editor</option>
				</select>
			  </div>	
			  <div class="form-group">
			    <label for="">Nombres</label>
			    <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres" value="<?=$value->nombres?>" >
			  </div>
			  <div class="form-group">
			    <label for="">Apellidos</label>
			    <input type="text" class="form-control" id="apellidos"  name="apellidos" placeholder="Apellidos" value="<?=$value->apellidos?>" >
			  </div>
			  <div class="form-group">
			    <label for="">DNI</label>
			    <input type="number" maxlength="8" class="form-control" id="dni" name="dni" placeholder="Dni" value="<?=$value->dni?>" >
			  </div>
			  <div class="form-group">
			    <label for="">Email</label>
			    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?=$value->correo?>" >
			  </div>
			  <div class="form-group">
			    <label for="">Direccion</label>
			    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" value="<?=$value->direccion?>" >
			  </div>
			  <div class="form-group">
			    <label for="">F. Nacimiento</label>
			    <input type="date" class="form-control" id="fnacimiento" name="fnacimiento" placeholder="F. Nacimiento" value="<?=$value->fechaNacimiento?>" >
			  </div>

			  <div class="form-group">
			    <label for="">Telefono</label>
			    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="<?=$value->telefono?>" >
			  </div>
			  
			  <button type="submit" class="btn btn-primary btn-default">Actualizar</button>
			   <button type="button" onclick="location.href='../index'" class="btn btn-danger btn-default">Cancelar</button>
		<?php 
			}
		?>
		</form>	

	</div>
</div>