<?php

$entradaOK = true;

$a_respuesta = [
    descripcion => null
];

$a_errores = [
    descripcion => null
];

switch (true) {
    case (isset($_REQUEST['cancelar'])):
        $_SESSION['pagina'] = 'inicio';
        header("Location: index.php");
        exit;

        break;

    case (isset($_REQUEST['eliminar'])):
        $_SESSION['pagina'] = 'borrarCuenta';
        header("Location: index.php");
        exit;

        break;

    case (isset($_REQUEST['cambiar'])):
        $_SESSION['pagina'] = 'cambiarPassword';
        header("Location: index.php");
        exit;

        break;

    case (isset($_REQUEST['confirmar'])):
        $a_errores[descripcion] = validacionFormularios::comprobarAlfanumerico($_REQUEST['descripcion'], LONGMAXDESC, LONGMINDESC, OBLIGATORIO);

        foreach ($a_errores as $value => $key) {
            if ($key != null) {
                $entradaOk = false;
                $_REQUEST[$value] = "";
            }
        }

        break;

    case (isset($_REQUEST['confirmar']) && $entradaOK == true):
        $a_respuesta[descripcion] = $_REQUEST['descripcion'];
        $usuario = $_SESSION['username'];

        if ($a_respuesta[descripcion] != $_SESSION['username']->getDescUsuario()) {
            $usuario = $usuario->modificarUsuario($_SESSION['username']->getPassword(), $a_respuesta[descripcion], null);
            $_SESSION['username'] = $usuario;
        }

        $_SESSION['pagina'] = 'inicio';
        header("Location: index.php");

        break;



    default:
        $_SESSION['pagina'] = 'miCuenta';
        require_once $vistas['layout'];

        break;
}
