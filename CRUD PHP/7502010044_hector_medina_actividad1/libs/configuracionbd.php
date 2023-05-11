
<?php
/*CONFIGURACION DE LOS PARAMETROS DE LA BASE DE DATOS*/

require_once 'php-activerecord/ActiveRecord.php';
ActiveRecord\Config::initialize(function ($cfg)
{
    $cfg->set_model_directory('../co.edu.udec.act1.hectormedina.modelo');
    $cfg->set_connections(array(
        'development' =>'mysql://root:@localhost/mascotascrud'));
        /*EN database_name DEBO COLOCAR EL NOMBRE DE LA BASE DE DATOS*/
});