<?php

$entradaOK = true;

$a_respuesta = [
    password1 => null,
    password2 => null,
    password3 => null
];

$a_errores = [
    password1 => null,
    password2 => null,
    password3 => null
];

$oldPassword = $_SESSION['username']->getPassword();
$usuario = $_SESSION['username'];

if (isset($_REQUEST['cancelar'])) {
    $_SESSION['pagina'] = 'miCuenta';
    header('Location: index.php');
} else {
    if (isset($_REQUEST['confirmar'])) {
        $a_errores[password1] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['password1'], LONGMAXPASS, LONGMINPASS, OBLIGATORIO);
        $a_errores[password2] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['password2'], LONGMAXPASS, LONGMINPASS, OBLIGATORIO);
        $a_errores[password3] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['password3'], LONGMAXPASS, LONGMINPASS, OBLIGATORIO);

        foreach ($a_errores as $key => $value) {
            if ($value != null) {
                $entradaOK = false;
                $_REQUEST[$key] = '';
            }
        }

        if ($oldPassword != $_REQUEST['password1']) {
            $a_errores[password1] = $a_errores[password1] . ' Esa contraseña no coincide con la actual.';
            $entradaOK = false;
        }

        if ($_REQUEST['password2'] != $_REQUEST['password3']) {
            $a_errores[password3] = $a_errores[password3] . ' Las contraseñas no son iguales.';
            $entradaOK = false;
        }

        if ($_REQUEST['password1'] != $_REQUEST['password3']) {
            $a_errores[password1] = $a_errores[password1] . ' La contraseña nueva es igual a la anterior.';
            $entradaOK = false;
        }
    }

    if (isset($_REQUEST['confirmar']) && $entradaOK == true) {
        $usuario = $usuario->modificarUsuario($_REQUEST['password2'], null, null);
        $_SESSION['username'] = $usuario;
        $_SESSION['pagina'] = 'miCuenta';
    } else {
        $_SESSION['pagina'] = 'cambiarPassword';
        require_once $vistas['layout'];
    }
}