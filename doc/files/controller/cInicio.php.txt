<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_REQUEST['Salir'])) {
    unset($_SESSION['username']);
    session_destroy();
    header('Location: index.php');
}
if (isset($_REQUEST['EditarPerfil'])) {
    $_SESSION['pagina'] = 'miCuenta';
    header('Location: index.php');
}
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
} else {
    require_once $vistas['layout'];
}
