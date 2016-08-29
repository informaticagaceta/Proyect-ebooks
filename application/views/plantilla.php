<!DOCTYPE html>
<html lang="en">
<head>
	<title>Proyecto - Ebooks</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/main.css'); ?>" />

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.js'); ?>"></script>
</head>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="http://www.crearlogogratis.com/wp-content/uploads/2015/08/logo-300x169.png" style="max-width: 130px;" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="http://www.crearlogogratis.com/wp-content/uploads/2015/08/logo-300x169.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>

                        <?php foreach ($_SESSION['modulos'] as $val) {
                            ?>
                             <li class="active"><a href="<?=base_url('index.php/'.$val->url); ?>"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm"><?=$val->nombre?></span></a></li>
                        <?php }

                        ?>
                  <!--      <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Personas</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Pioneer</span></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Normas</span></a></li>
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Usuarios</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Configuracion</span></a></li>  -->
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Buscar.." id="search">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Agregar Projecto</a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://1.bp.blogspot.com/-p8EFlkXywyE/UDZvWTyr1bI/AAAAAAAAEU0/xL8pmKN1KOY/s200/facebook.png alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span><?=$_SESSION['nombre']; ?></span>
                                                    <p class="text-muted small">
                                                        <?=$_SESSION['correo']; ?>
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="<?php echo base_url('index.php/usuario/logout'); ?>" class="logout btn-sm active">Salir</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                  
                    
			 			<!-- aqui empieza el contenido -->
						<?php
							$this->load->view($contenido);
						?>                   	
                    
                </div>
            </div>
        </div>

    </div>



<script type="text/javascript">
	$(document).ready(function(){
	   $('[data-toggle="offcanvas"]').click(function(){
	       $("#navigation").toggleClass("hidden-xs");
	   });
	});

II Pleno Jurisdiccional Extraordinario Penal 2016
	
</script>
</body>
</html>
