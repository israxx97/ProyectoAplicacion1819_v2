<?php

if (isset($_REQUEST['cancelar'])) {
    $_SESSION['pagina'] = 'mtoUsuarios';
    header('Location: index.php');
}

$usuario = Usuario::buscaUsuariosPorCodigo($_SESSION['codigoUsuario']);

if (isset($_REQUEST['confirmar'])) {
    $usuario->borrarUsuario();
    $_SESSION['pagina'] = 'mtoUsuarios';
    header('Location: index.php');
    exit;
}

require_once $vistas['layout'];
