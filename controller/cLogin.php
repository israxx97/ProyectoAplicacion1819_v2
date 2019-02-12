<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$entradaOK = true;
$a_respuesta = [username => null,
    password => null];
$a_errores = [username => null,
    password => null];

if (isset($_REQUEST['entrar'])) {
    $a_errores[username] = validacionFormularios::comprobarAlfabetico($_REQUEST['username'], LONGMAXUSUARIO, LONGMINUSUARIO, OBLIGATORIO);
    $a_errores[password] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['password'], LONGMAXPASS, LONGMINPASS, OBLIGATORIO);
    foreach ($a_errores as $value => $key) {
        if ($key != null) {
            $entradaOK = false;
            $_REQUEST[$value] = '';
        }
    }
}
if (isset($_REQUEST['entrar']) && $entradaOK == true) {
    $a_respuesta[username] = $_REQUEST['username'];
    $a_respuesta[password] = $_REQUEST['password'];
    $usuario = Usuario::validarUsuario($a_respuesta[username], $a_respuesta[password]);
    if (is_null(($usuario))) {
        $a_errores[password] = $a_errores[password] . 'Usuario o contraseña incorrectos.';
        $_SESSION['pagina'] = 'login';
        require_once $vistas['layout'];
    } else {
        $_SESSION['username'] = $usuario;
        $_SESSION['pagina'] = 'inicio';
        $_SESSION['visitas'] = $usuario->registrarUltimaConexion();
        header("Location: index.php");
        exit;
    }
}

$_SESSION['pagina'] = 'login';
require_once $vistas["layout"];



