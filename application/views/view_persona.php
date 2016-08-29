<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$data_nombres = array(
        'name'  => 'nombres',
        'id'    => 'nombres'
);
$data_apellidos = array(
        'name'  => 'apellidos',
        'id'    => 'apellidos'
);

$data_dni = array(
        'name'  => 'dni',
        'id'    => 'dni'
);
$data_direccion= array(
        'name'  => 'direccion',
        'id'    => 'direccion'
);
$data_fechaNac = array(
        'name'  => 'fechaNacimineto',
        'id'    => 'fechaNacimineto'
);

$data_fechaRegis = array(
        'name'  => 'fechaRegistro',
        'id'    => 'fechaRegistro'
);

$data_telefono = array(
        'name'  => 'telefono',
        'id'    => 'telefono'
);

?>
<h2>Formulario de Persona</h2>


<?php  echo form_open(); ?>

<?php  echo form_label("Nombre"); ?>

<?php  echo form_input($data_nombres); ?>
<br>
<?php  echo form_label("apellidos"); ?>

<?php  echo form_input($data_apellidos); ?>
<br>
<?php  echo form_label("Dni"); ?>

<?php  echo form_input($data_dni); ?>
<br>
<?php  echo form_label("Direccion"); ?>

<?php  echo form_input($data_direccion); ?>
<br>
<?php  echo form_label("fecha Nacimiento"); ?>

<?php  echo form_input($data_fechaNac); ?>
<br>

<?php  echo form_close(); ?>