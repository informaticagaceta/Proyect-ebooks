<!DOCTYPE html>
<html>
<head>
	<title>Login al Sistema - Proyecto E-Books</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/main.css'); ?>" />

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.js'); ?>"></script>	
	<style type="text/css">
body{
 background: url('http://k30.kn3.net/taringa/3/F/4/1/A/2/TheCrashWTF/B95.jpg');
}

	</style>
</head>
<body>
<div class="container">
	<div class="row">
    	<div class="col-md-4 col-md-offset-4">
             <form method="POST" action="<?php echo base_url('index.php/usuario/login'); ?>">
                <div class="panel panel-info" style="margin-top:50px;">
                    <div class="panel-heading"><h4 class="text-center">Acceder al Sistema</h4></div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="user">Usuario</label>
                                <input type="text" class="form-control" id="user" name="user" placeholder="Ingrese usuario">
                            </div>
                            
                            <div class="form-group">
                                <label for="pass">Contraseña</label>
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="Ingrese Contraseña">
                            </div>
                            
                            <button type="submit" class="btn btn-success btn-block">Ingresar</button>
                        </form>
                    </div>
                </div>
            </form>
        </div>
	</div>
</div>
</body>
</html>



