<?php
require_once '../models/mUsuario.php';
$instancia = new mUsuario();
$accion    = $_POST['action'];
session_start();
switch ($accion) {
    case 'set-login':
        $usuario  = $_POST['_usuario'];
        $password = $_POST['_password'];
        $array    = $instancia->set_login($usuario, $password);
        if ($array[0] == 0) {
            echo '0';
        } else {
            session_start();
            $_SESSION['acceso']     = 'YES';
            $_SESSION['user_rol']   = $array['user_rol'];
            $_SESSION['user_datos'] = $array['user_apellidos'].', '.$array['user_nombres'];
            echo '1';
        }
        break;
    default:
        break;
}