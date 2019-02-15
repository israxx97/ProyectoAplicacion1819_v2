<?php

/*if (isset($_REQUEST['cancelar'])) {
    $_SESSION['pagina'] = 'miCuenta';
    header('Location: index.php');
} else {
    if (isset($_REQUEST['confirmar'])) {
        $usuario = $_SESSION['username'];

        if ($usuario->borrarUsuario()) {
            unset($_SESSION['username']);
            session_destroy();
            $_SESSION['pagina'] = 'login';
            header('Location: index.php');
        }
    } else {
        $_SESSION['pagina'] = 'borrarCuenta';
        require_once $vistas['layout'];
    }
}*/

switch (true) {
    case (isset($_REQUEST['cancelar'])):
        $_SESSION['pagina'] = 'miCuenta';
        header('Location: index.php');

        break;

    default:
        switch (true) {
            case (isset($_REQUEST['confirmar'])):
                $usuario = $_SESSION['username'];

                if ($usuario->borrarUsuario()) {
                    unset($_SESSION['username']);
                    session_destroy();
                    $_SESSION['pagina'] = 'login';
                    header('Location: index.php');
                }

                break;

            default:
                $_SESSION['pagina'] = 'borrarCuenta';
                require_once $vistas['layout'];

                break;
        }

        break;
}