<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* if (isset($_REQUEST['salir'])) {
  unset($_SESSION['username']);
  session_destroy();
  header('Location: index.php');
  }
  if (isset($_REQUEST['editarPerfil'])) {
  $_SESSION['pagina'] = 'miCuenta';
  header('Location: index.php');
  }
  if (!isset($_SESSION['username'])) {
  header('Location: index.php');
  } else {
  require_once $vistas['layout'];
  } */

switch (true) {
    case (isset($_REQUEST['salir'])):
        unset($_SESSION['username']);
        session_destroy();
        header('Location: index.php');

        break;

    case (isset($_REQUEST['miPerfil'])):
        $_SESSION['pagina'] = 'miCuenta';
        header('Location: index.php');

        break;

    case (!isset($_SESSION['username'])):
        header('Location: index.php');

        break;

    default:
        require_once $vistas['layout'];
}