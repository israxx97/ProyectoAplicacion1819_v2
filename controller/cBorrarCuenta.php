<?php

if (isset($_REQUEST['cancelar'])) {
    $_SESSION['pagina'] = 'miCuenta';
    header('Location: index.php');
} else {
    if (isset($_REQUEST['borrar'])) {
        $usuario = $_SESSION['username'];

        if ($usuario->borrarCuenta()) {
            unset($_SESSION['username']);
            session_destroy();
            $_SESSION['pagina'] = 'login';
            header('Location: index.php');
        }
    } else {
        $_SESSION['pagina'] = 'borrarCuenta';
        require_once $vistas['layout'];
    }
}
