<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

require_once 'config/config.php';

session_start();

if (isset($_SESSION['username']) && !isset($_SESSION['pagina'])) {
    include_once $controladores['inicio'];
}
if (isset($_SESSION['pagina'])) {
    include_once $controladores[$_SESSION['pagina']];
} else {
    include_once $controladores['login'];
}

/*switch (true) {
    case (isset($_SESSION['username']) && !isset($_SESSION['pagina'])):
        include_once $controladores['inicio'];

        break;

    case (isset($_SESSION['pagina'])):
        include_once $controladores[$_SESSION['pagina']];

        break;

    default:
        include_once $controladores['login'];

        break;
}*/
